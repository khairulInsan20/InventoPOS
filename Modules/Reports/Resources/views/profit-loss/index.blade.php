@extends('layouts.app')

@section('title', 'Laporan Laba Rugi')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Laba/Rugi</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <livewire:reports.profit-loss-report/>
    </div>
@endsection
