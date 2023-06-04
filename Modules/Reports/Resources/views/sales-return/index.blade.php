@extends('layouts.app')

@section('title', 'Laporan Retur Penjualan')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Retur Penjualan</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <livewire:reports.sales-return-report :customers="\Modules\People\Entities\Customer::all()"/>
    </div>
@endsection
