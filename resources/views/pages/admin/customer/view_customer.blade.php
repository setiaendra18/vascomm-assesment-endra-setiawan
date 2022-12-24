@extends('layouts.admin.main')
@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail Account Customer : {{ $user->name }}</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td width="150px">
                                    Nama
                                </td>
                                <td> : {{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td width="150px">
                                    e-mail
                                </td>
                                <td> : {{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td width="150px">
                                    user type
                                </td>
                                <td> : {{ $user->user_type }}</td>
                            </tr>
                            <tr>
                                <td width="150px">
                                    account status
                                </td>
                                <td> : {{ $user->account_status }}</td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <h6>Foto</h6>
                        <img src="{{ url('storage/user_image') }}/{{ $user->user_image }}">

                    </div>
                </div>
                <a href="{{ route('customer_index') }}" class="btn btn-dark">Kembali</a>

            </div>
        </div>
    </div>
@endsection
