@extends('layouts.app')

@section('title', 'Buat Penyesuaian')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('adjustments.index') }}">Penyesuaian</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-12">
                <livewire:search-product/>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('utils.alerts')
                        <form action="{{ route('adjustments.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="reference">Referensi <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="reference" required readonly value="ADJ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="from-group">
                                        <div class="form-group">
                                            <label for="date">Tanggal <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" required value="{{ now()->format('Y-m-d') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <livewire:adjustment.product-table/>
                            <div class="form-group">
                                <label for="note">Catatan (Jika Diperlukan)</label>
                                <textarea name="note" id="note" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Buat Penyesuaian <i class="bi bi-check"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
