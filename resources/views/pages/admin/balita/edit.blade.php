@extends('layouts.dashboard')

@section('title')
Edit Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('balita-update', $item->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nama Anak</label>
                    <input required type="text" class="form-control" name="nama_anak" value="{{ $item->nama_anak }}">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Lahir </label>
                    <input required type="date" class="form-control" name="tanggal_lahir"
                        value="{{ $item->tanggal_lahir }}">
                </div>
                <div class="col-md-4">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-select">
                        <option value="Laki-laki" {{ $item->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="Prempuan" {{ $item->jenis_kelamin === 'Prempuan' ? 'selected' : '' }}>Prempuan
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Nama Ibu</label>
                    <input required type="text" class="form-control" name="nama_ibu" value="{{ $item->nama_ibu }}">
                </div>
                <div class="col-md-4">
                    <label for="">Nama Ayah</label>
                    <input required type="text" class="form-control" name="nama_ayah" value="{{ $item->nama_ayah }}">
                </div>
                <div class="col-md-4">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" class="form-control">{{ $item->alamat }}</textarea>
                </div>
                <div class="col-md-4">
                    <label for="">Tinggi Badan</label>
                    <input required type="number" class="form-control" name="tinggi_badan"
                        value="{{ $item->tinggi_badan }}">
                </div>
                <div class="col-md-4">
                    <label for="">Berat Badan</label>
                    <input required type="number" class="form-control" name="berat_badan"
                        value="{{ $item->berat_badan }}">
                </div>
                <div class="col-md-4">
                    <label for="">Lingkar Kepala</label>
                    <input required type="number" class="form-control" name="lingkar_kepala"
                        value="{{ $item->lingkar_kepala }}">
                </div>
                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
