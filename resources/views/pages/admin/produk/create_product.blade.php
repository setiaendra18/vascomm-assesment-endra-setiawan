@extends('layouts.admin.main')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body p-8">
               

                <div class="col-md-5">
                    <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">  
                        @csrf
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">

                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga">

                        </div>
                        <div class="form-group">
                            <label>Deskrpisi</label>
                            <input type="text" class="form-control" name="deskripsi">

                        </div>
                        <div class="form-group">
                            <label>Product Images</label>
                            <input type="file" class="form-control" name="product_image">

                        </div>

                        <button type="submit" class="btn btn-success">Save</button>  <a href="{{ route('admin') }}" class="btn btn-dark">Kembali</a>
                    </form>

                   </div>
                   
            </div>
            
           
        </div>
    </div>
    </div>
@endsection
