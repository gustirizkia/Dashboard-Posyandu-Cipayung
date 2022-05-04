@extends('layouts.dashboard')

@section('title')
Edit Data
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('imunisasi.update', $item->id) }}" method="post">
            @csrf
            @method('PUT')
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
                    <label for="">Jenis Imunisasi</label>
                    <select name="jenis_imunisasi" id="" class="form-select" required>
                        <option value="">Pilih Jenis Imunisasi</option>
                        <option value="Hepatitis B" {{ 'Hepatitis B'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>Hepatitis B</option>
                        <option value="Polio" {{ 'Polio'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>Polio</option>
                        <option value="BCG" {{ 'BCG'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>BCG</option>
                        <option value="DPT" {{ 'DPT'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>DPT</option>
                        <option value="Hib" {{ 'Hib'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>Hib</option>
                        <option value="Campak" {{ 'Campak'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>Campak</option>
                        <option value="MMR" {{ 'MMR'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>MMR</option>
                        <option value="PCV" {{ 'PCV'===$item->jenis_imunisasi ? 'selected' :
                            ''}}>PCV</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Usia</label>
                    <input required type="number" class="form-control" name="usia" value="{{ $item->usia }}">
                </div>
                <div class="col-md-4">
                    <label for="">Tanggal Pemberian Imunisasi</label>
                    <input required type="date" class="form-control" name="tanggal_imunisasi"
                        value="{{ $item->tanggal_imunisasi }}">
                </div>

                <div class="col-12 mt-4">
                    <button required type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
