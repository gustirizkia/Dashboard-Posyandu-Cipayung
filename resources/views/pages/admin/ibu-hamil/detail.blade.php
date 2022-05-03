@extends('layouts.dashboard')

@section('title')
Detail Data Ibu Hamil
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <label for="">Nama Ibu</label>
                <div>
                    <strong>{{ $item->nama_ibu }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Alamat</label>
                <div>
                    <strong>{{ $item->alamat }}</strong>
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
                <label for="">Hamil Ke</label>
                <div>
                    <strong>{{ $item->hamil_ke }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Tanggal Daftar</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tanggal_daftar)->translatedFormat('l, d F Y') }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Tanggal Bersalin</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tanggal_bersalin)->translatedFormat('l, d F Y') }}</strong>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
