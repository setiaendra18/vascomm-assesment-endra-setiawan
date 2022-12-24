<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index()
    {
        $products = Produk::all();
        return view('pages.admin.home', [
            'products' => $products,
        ]);
    }
    public function product_create()
    {
        return view('pages.admin.produk.create_product');
    }
    public function product_store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'product_image' => 'required'
        ]);
        $resorce       = $request->file('product_image');
        $name   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() . "/public/product", $name);
        $product =   Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'product_image' => $name
        ]);
        if ($product) {
            return redirect()
                ->route('admin')
                ->with([
                    'success' => ''
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => ''
                ]);
        };
    }
    public function show(Admin $admin)
    {
        //
    }
    public function edit(Admin $admin)
    {
        //
    }
    public function update(Request $request, Admin $admin)
    {
        //
    }
    public function product_destroy($id)
    {
        $product = Produk::find($id);
        $product->delete();
        return redirect()
            ->route('admin')
            ->with(['warning' => ' ']);
    }
    public function customer_index()
    {
        $users = User::all()->where('user_type', '=', 'customer');
        return view('pages.admin.customer.index_customer', [
            'users' => $users,
        ]);
    }
    public function customer_view($id)
    {
        $user = User::find($id);
        return view('pages.admin.customer.view_customer', [
            'user' => $user,
        ]);
    }
    public function customer_edit($id)
    {
        $user = User::find($id);
        return view('pages.admin.customer.edit_customer', [
            'user' => $user,
        ]);
    }
    public function customer_update(Request $request)
    {
        $this->validate($request, [
            'account_status' => 'required|string',
        ]);
        $users = User::findOrFail($request->id);
        try {
            $users->update([
                'account_status' => $request->account_status,
            ]);
            return redirect()
                ->route('customer_index')
                ->with(['info' => ' ']);
        } catch (QueryException $error_query) {
            return redirect()
                ->back()
                ->withInput()
                ->with(['error' => $error_query->getMessage()]);
        }
    }
    public function customer_destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->with(['success' => ' ']);
    }
}
