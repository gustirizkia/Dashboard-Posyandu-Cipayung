@extends('layouts.dashboard')


@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <a href="{{ route('ibu-hamil-tambah-data') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="col">
                <form action="{{ route('ibu-hamil-index') }}" method="get">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Cari data" name="q" value="{{ $q }}">
                        <button class="btn btn-info" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-sm" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID BUMIL</th>
                        <th scope="col">NAMA IBU</th>
                        {{-- <th scope="col">ALAMAT</th> --}}
                        <th scope="col">USIA</th>
                        <th scope="col">HAMIL KE</th>
                        <th scope="col">TANGGAL DAFTAR</th>
                        <th scope="col">TANGGAL BERSALIN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                $no = 1;
                @endphp
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_ibu }}</td>
                        {{-- <td>{{ $item->alamat }}</td> --}}
                        <td>{{ $item->usia }}</td>
                        <td>{{ $item->hamil_ke }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_daftar)->translatedFormat('l, d F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_bersalin)->translatedFormat('l, d F Y') }}</td>
                        <td class="text-left" style="">
                            <a href="{{ route('ibu-hamil-edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('ibu-hamil-hapus', $item->id) }}"
                                onclick="return confirm('Yakin hapus data ini ?')"
                                class="btn btn-danger btn-sm">Hapus</a>
                            <a href="{{ route('ibu-hamil-detail', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        </td>
                    </tr>
                    @php
                    $no++;
                    @endphp
                    @empty
                    <td colspan="10" class="text-center">
                        <h6>Data Tidak Ada</h6>
                    </td>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex">
            {!! $items->links() !!}
        </div>

    </div>
</div>
@endsection

@push('style')
<style>
    .btn-sm {
        font-size: .775rem !important;
    }
</style>
@endpush
