@extends('layouts.admin.main')
@section('content')
    <div class="col-xl-12 col-lg-12">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong> </strong> anda telah berhasil ditambahkan ke sistem.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            Data <strong> </strong> anda telah berhasil dirubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data <strong> </strong> anda telah berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf :( pemrosesan data <strong> </strong> anda gagal, ada beberapa kemungkinan
            kesalahan.
            <ol>
                <li>Data yang saling berelasi tidak dapat dihapus.</li>
                <li>Data sudah tersedia dalam database, input tidak boleh sama.</li>
            </ol>
            <i>{{ session('error') }}</i>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Produks</h6>
                <div class="float-right shadow animated--fade-in">
                    <a href="{{ route('product_create') }}" class="btn btn-xs btn-success">Add Product</a>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $data)
                            <tr>
                                <td>{{ $data->nama_produk }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>
                                    <img src="{{ url('/product') }}/{{ $data->product_image }}" width="150px">
                                </td>
                                <td>
                                    
                                    <a href="{{ route('product_destroy', $data->id) }}"
                                        class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
