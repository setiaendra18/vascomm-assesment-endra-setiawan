@extends('layouts.customer.main')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row ">
                <h1 class="mb-3">{{ $products->nama_produk }}</h1>
                <h2 class="mb-3 text-danger">Rp. {{ number_format($products->harga) }}</h2>
                <!-- Product image-->
                <img class="card-img-top" src="{{ url('/product') }}/{{ $products->product_image }}" alt="..." />
                <!-- Product details-->
            </div>
            <div class="row">
             <p>
                {{ $products->deskripsi }}
             </p>
            </div>
        </div>
    </section>
@endsection
