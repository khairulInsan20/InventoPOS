@extends('layouts.app')

@section('title', 'Buat Mata Uang')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('currencies.index') }}">Mata Uang</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <form action="{{ route('currencies.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    @include('utils.alerts')
                    <div class="form-group">
                        <button class="btn btn-primary">Buat Mata Uang <i class="bi bi-check"></i></button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="currency_name">Nama Mata Uang <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="currency_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="code">Kode Mata Uang <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="code" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="symbol">Simbol <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="symbol" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="thousand_separator">Pemisah Ribuan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="thousand_separator" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="decimal_separator">Pemisah Desimal <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="decimal_separator" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

