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
                    <strong>{{ $item->nama_anak }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Jenis Kelamin</label>
                <div>
                    <strong>{{ $item->jenis_kelamin }}</strong>
                </div>
                <hr>
            </div>

            <div class="col-md-4">
                <label for="">Tanggal Lahir</label>
                <div>
                    <strong>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('l, d F Y') }}
                    </strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Umur</label>
                <div>
                    <strong>{{ $item->umur }} Tahun</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Nama Ibu</label>
                <div>
                    <strong>{{ $item->nama_ibu }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Nama Ayah</label>
                <div>
                    <strong>{{ $item->nama_ayah }}</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Tinggi Badan</label>
                <div>
                    <strong>{{ $item->tinggi_badan }} Cm</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Berat Badan</label>
                <div>
                    <strong>{{ $item->berat_badan }} Kg</strong>
                </div>
                <hr>
            </div>
            <div class="col-md-4">
                <label for="">Lingkar Kepala</label>
                <div>
                    <strong>{{ $item->lingkar_kepala }} Cm</strong>
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
        </div>
    </div>
</div>
@endsection
