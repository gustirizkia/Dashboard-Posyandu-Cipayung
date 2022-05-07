@extends('layouts.dashboard')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <a href="{{ route('balita-tambah-data') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="col">
                <form action="{{ route('balita-index') }}" method="get">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Cari data balita" name="q"
                            value="{{ $q }}">
                        <button class="btn btn-info" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID ANAK</th>
                    <th scope="col">Nama Anak</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
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
                    <td>{{ $item->nama_anak }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_lahir)->translatedFormat('l, d F Y') }}</td>
                    <td class="text-left">
                        <a href="{{ route('balita-edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('balita-destroy', $item->id) }}"
                            onclick="return confirm('Yakin hapus data ini ?')" class="btn btn-danger btn-sm">Hapus</a>
                        <a href="{{ route('balita-show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    </td>
                </tr>
                @php
                $no++;
                @endphp
                @empty
                <td colspan="6" class="text-center">
                    <h6>Data Tidak Ada</h6>
                </td>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex">
            {!! $items->links() !!}
        </div>

    </div>
</div>
@endsection
