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
                <label for="">Tanggal Pemberian Vitamin</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tgl)->translatedFormat('l, d F Y')
                        }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Jenis Vitamin</label>
                <div>
                    <strong>{{ $item->jenis_vitamin }}</strong>
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
        </div>
    </div>
</div>
@endsection
