@extends('layouts.dashboard')

@section('title')
Edit Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('vitamin.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nama Anak</label>
                    <select name="id_anak" id="" class="form-select" required>
                        <option value="">Pilih Anak</option>
                        @foreach ($anak as $itemAnak)
                        <option value="{{ $itemAnak->id }}" {{ $itemAnak->id === $item->id_anak ? 'selected' : '' }}>{{
                            $itemAnak->nama_anak }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Jenis Vitamin</label>
                    <select name="jenis_vitamin" id="" class="form-select" required>
                        <option value="Vitamin A" {{ 'Vitamin A'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin A
                        </option>
                        <option value="Vitamin B" {{ 'Vitamin B'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin B
                        </option>
                        <option value="Vitamin C" {{ 'Vitamin C'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin C
                        </option>
                        <option value="Vitamin D" {{ 'Vitamin D'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin D
                        </option>
                        <option value="Vitamin E" {{ 'Vitamin E'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin E
                        </option>
                        <option value="Vitamin K" {{ 'Vitamin K'===$item->jenis_vitamin ? 'selected' : '' }}>Vitamin K
                        </option>

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia" value="{{ $item->usia }}">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Pemberian Vitamin</label>
                    <input required type="date" class="form-control" name="tgl" value="{{ $item->tgl }}">
                </div>

                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
