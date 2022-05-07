<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Ibu Hamil {{ $date }}</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h4>Laporan Data Ibu Hamil</h4>
    <table class="table table-hover table-sm" style="font-size: 12px;">
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
</body>

</html>
