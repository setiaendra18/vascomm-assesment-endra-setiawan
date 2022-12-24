<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Produk;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $products = Produk::all();
        return view('home', [
            'products' => $products,
        ]);
    }
    public function view($id)
    
    {
        $products = Produk::find($id);
        return view('pages.customer.products', [
            'products' => $products,
        ]);
    }
}
