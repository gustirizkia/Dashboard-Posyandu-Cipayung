@extends('layouts.dashboard')

@section('title')
Tambah Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('imunisasi.store') }}" method="post">
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
                    <label for="">Jenis Imunisasi</label>
                    <select name="jenis_imunisasi" id="" class="form-select" required>
                        <option value="">Pilih Jenis Imunisasi</option>
                        <option value="Hepatitis B">Hepatitis B</option>
                        <option value="Polio">Polio</option>
                        <option value="BCG">BCG</option>
                        <option value="DPT">DPT</option>
                        <option value="Hib">Hib</option>
                        <option value="Campak">Campak</option>
                        <option value="MMR">MMR</option>
                        <option value="PCV">PCV</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Pemberian Imunisasi</label>
                    <input required type="date" class="form-control" name="tanggal_imunisasi">
                </div>

                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
