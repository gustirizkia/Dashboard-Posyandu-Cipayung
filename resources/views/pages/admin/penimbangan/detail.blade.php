@extends('layouts.dashboard')

@section('title')
Detail Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label for="">Nama Anak</label>
                <div>
                    <strong>{{ $item->anak->nama_anak }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Tanggal Penimbangan</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tanggal_penimbangan)->translatedFormat('l, d F Y')
                        }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Usia</label>
                <div>
                    <strong>{{ $item->usia }} Tahun</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Berat Badan</label>
                <div>
                    <strong>{{ $item->berat_badan }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Lingkar Perut</label>
                <div>
                    <strong>{{ $item->lingkar_perut}}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Saran</label>
                <div>
                    <strong>{{ $item->saran}}</strong>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
