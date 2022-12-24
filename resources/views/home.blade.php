@extends('layouts.customer.main')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($products as $data)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ url('/product') }}/{{ $data->product_image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $data->nama_produk }}</h5>
                                    <!-- Product price-->
                                    Rp. {{ number_format($data->harga) }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                @if (auth()->user() !== null && auth()->user()->account_status == 'unactive')
                                    <div class="text-center"><button class="btn btn-danger mt-auto disabled">Detail</button>
                                    </div>
                                @elseif (auth()->user() !== null && auth()->user()->account_status == 'active')
                                    <div class="text-center">
                                        <a href="{{ route('product_detail', $data->id) }}" class="btn btn-xs btn-success">Detail</a>
                                    </div>
                                @elseif (auth()->user() == null)
                                    <div class="text-center"><a class="btn btn-primary btn-xs mt-auto"
                                            href="{{ url('/login') }}">Login/Register</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
