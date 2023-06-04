@extends('layouts.app')

@section('title', 'Laporan Retur Pembelian')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Retur Pembelian</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <livewire:reports.purchases-return-report :suppliers="\Modules\People\Entities\Supplier::all()"/>
    </div>
@endsection
