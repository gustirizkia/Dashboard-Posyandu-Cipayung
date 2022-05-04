@extends('layouts.dashboard')

@section('title')
Tambah Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('kematian.store') }}" method="post">
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
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Kematian</label>
                    <input required type="date" class="form-control" name="tgl_kematian">
                </div>
                <div class="col-md-4">
                    <label for="">Keterangan</label>
                    <textarea name="ket" id="" cols="30" required class="form-control"></textarea>
                </div>

                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
