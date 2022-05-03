@extends('layouts.dashboard')

@section('title')
Tambah Data Penimbangan
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('penimbangan.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nama Anak</label>
                    <select name="id_anak" id="" class="form-select" required>
                        <option value="">Pilih Anak</option>
                        @foreach ($anak as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_anak }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Penimbangan</label>
                    <input type="date" class="form-control" name="tanggal_penimbangan">
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia">
                </div>
                <div class="col-md-4">
                    <label for="">Berat Badan</label>
                    <input required type="number" class="form-control" name="berat_badan">
                </div>
                <div class="col-md-4">
                    <label for="">Lingkar Perut</label>
                    <input required type="number" class="form-control" name="lingkar_perut">
                </div>
                <div class="col-md-4">
                    <label for="">Saran</label>
                    <input required type="text" class="form-control" name="saran">
                </div>


                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
