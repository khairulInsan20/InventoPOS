@extends('layouts.app')

@section('title', 'Edit Kategori Produk')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produk</a></li>
        <li class="breadcrumb-item"><a href="{{ route('product-categories.index') }}">Kategori</a></li>
        <li class="breadcrumb-item active">Ubah</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @include('utils.alerts')
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product-categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label class="font-weight-bold" for="category_code">Kode Kategori <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="category_code" required value="{{ $category->category_code }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="category_name">Nama Kategori <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name" required value="{{ $category->category_name }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Perbarui <i class="bi bi-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

