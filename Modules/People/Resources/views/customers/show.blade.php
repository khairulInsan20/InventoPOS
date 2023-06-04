@extends('layouts.app')

@section('title', 'Rincian Pelanggan')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Pelanggan</a></li>
        <li class="breadcrumb-item active">Rincian</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <td>{{ $customer->customer_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email Pelanggan</th>
                                    <td>{{ $customer->customer_email }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP Pelanggan</th>
                                    <td>{{ $customer->customer_phone }}</td>
                                </tr>
                                <tr>
                                    <th>Kota</th>
                                    <td>{{ $customer->city }}</td>
                                </tr>
                                <tr>
                                    <th>Negara</th>
                                    <td>{{ $customer->country }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

