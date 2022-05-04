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
                <label for="">Tanggal Kematian</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tgl_kematian)->translatedFormat('l, d F Y')
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
            <div class="col-md-12">
                <label for="">Keterangan</label>
                <div>
                    <strong>{{ $item->ket }}</strong>
                </div>
                <hr>
            </div>

        </div>
    </div>
</div>
@endsection
