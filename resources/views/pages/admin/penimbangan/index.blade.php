@extends('layouts.dashboard')


@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <a href="{{ route('penimbangan.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="col">
                <form action="{{ route('penimbangan.index') }}" method="get">
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
            <table class="table table-hover table-sm" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID PENIMBANGAN</th>
                        <th scope="col">NAMA ANAK</th>
                        {{-- <th scope="col">ALAMAT</th> --}}
                        <th scope="col">TANGGAL PENIMBANGAN</th>
                        <th scope="col">USIA</th>
                        <th scope="col">BERAT BADAN</th>
                        <th scope="col">LINGKAR PERUT</th>
                        <th scope="col">SARAN</th>
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
                        <td>{{ $item->anak->nama_anak }}</td>
                        {{-- <td>{{ $item->alamat }}</td> --}}
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_penimbangan)->translatedFormat('l, d F Y') }}</td>
                        <td>{{ $item->usia }}</td>
                        <td>{{ $item->berat_badan }}</td>
                        <td>{{ $item->lingkar_perut }}</td>
                        <td>{{ $item->saran }}</td>
                        <td class="text-left d-flex justify-content-between" style="">
                            <a href="{{ route('penimbangan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('penimbangan.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus data ini ?')"
                                    class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            <a href="{{ route('penimbangan.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
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
