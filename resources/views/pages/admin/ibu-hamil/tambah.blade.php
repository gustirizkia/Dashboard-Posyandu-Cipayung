@extends('layouts.dashboard')

@section('title')
Tambah Data Ibu Hamil
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('ibu-hamil-store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nama Ibu</label>
                    <input required type="text" class="form-control" name="nama_ibu">
                </div>
                <div class="col-md-4">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" class="form-control"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia">
                </div>
                <div class="col-md-4">
                    <label for="">Hamil Ke</label>
                    <input required type="number" class="form-control" name="hamil_ke">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Daftar</label>
                    <input required type="date" class="form-control" name="tanggal_daftar">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Bersalin</label>
                    <input required type="date" class="form-control" name="tanggal_bersalin">
                </div>



                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
