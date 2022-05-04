@extends('layouts.dashboard')

@section('title')
Tambah Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('vitamin.store') }}" method="post">
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
                    <label for="">Jenis Vitamin</label>
                    <select name="jenis_vitamin" id="" class="form-select" required>
                        <option value="">Pilih Jenis Vitamin</option>
                        <option value="Vitamin A">Vitamin A</option>
                        <option value="Vitamin B">Vitamin B</option>
                        <option value="Vitamin C">Vitamin C</option>
                        <option value="Vitamin D">Vitamin D</option>
                        <option value="Vitamin E">Vitamin E</option>
                        <option value="Vitamin K">Vitamin K</option>

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Pemberian Vitamin</label>
                    <input required type="date" class="form-control" name="tgl">
                </div>

                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
