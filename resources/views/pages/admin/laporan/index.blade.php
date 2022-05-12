@extends('layouts.dashboard')

@section('title')
Laporan Data Posyandu Pepaya Cipayung
@endsection

@section('content')
<div class="row">


    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Balita</h6>
                <h6 class="font-extrabold ">{{ $balita }}</h6>
                <a href="{{ route('laporan-balita') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Ibu Hamil</h6>
                <h6 class="font-extrabold">{{ $ibu_hamil }}</h6>
                <a href="{{ route('laporan-ibu-hamil') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Imunisasi</h6>
                <h6 class="font-extrabold">{{ $imunisasi }}</h6>
                <a href="{{ route('laporan-imunisasi') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Vitamin</h6>
                <h6 class="font-extrabold">{{ $imunisasi }}</h6>
                <a href="{{ route('laporan-vitamin') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Kematian</h6>
                <h6 class="font-extrabold">{{ $kematian }}</h6>
                <a href="{{ route('laporan-kematian') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Penimbangan</h6>
                <h6 class="font-extrabold">{{ $penimbangan }}</h6>
                <a href="{{ route('laporan-penimbangan') }}" class="mb-0 text-primary">Print</a>
            </div>
        </div>
    </div>
</div>
@endsection
