@extends('layouts.dashboard')

@section('title')
Edit Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('penimbangan.update', $item->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nama Anak</label>
                    <select name="id_anak" id="" class="form-select" required>
                        <option value="">Pilih Anak</option>
                        @foreach ($anak as $itemAnak)
                        <option value="{{ $itemAnak->id }}" {{ $itemAnak->id === $item->id_anak ? "selected" :"" }}>{{
                            $itemAnak->nama_anak }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Penimbangan</label>
                    <input type="date" class="form-control" name="tanggal_penimbangan"
                        value="{{ $item->tanggal_penimbangan }}">
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia" value="{{ $item->usia }}">
                </div>
                <div class="col-md-4">
                    <label for="">Berat Badan</label>
                    <input required type="number" class="form-control" name="berat_badan"
                        value="{{ $item->berat_badan }}">
                </div>
                <div class="col-md-4">
                    <label for="">Lingkar Perut</label>
                    <input required type="number" class="form-control" name="lingkar_perut"
                        value="{{ $item->lingkar_perut }}">
                </div>
                <div class="col-md-4">
                    <label for="">Saran</label>
                    <input required type="text" class="form-control" name="saran" value="{{ $item->saran }}">
                </div>


                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
