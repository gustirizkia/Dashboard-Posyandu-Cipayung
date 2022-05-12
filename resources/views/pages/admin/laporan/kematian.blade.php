<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Kematian {{ $date }}</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h4>Laporan Data Kematian</h4>
    <table class="table table-hover table-sm" style="font-size: 12px;">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID KEMATIAN</th>
                <th scope="col">NAMA ANAK</th>
                <th scope="col">USIA</th>
                <th scope="col">TANGGAL KEMATIAN</th>
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
                <td>{{ $item->anak->nama_anak }} Tahun</td>
                <td>{{ $item->usia }} Tahun</td>
                <td>{{ \Carbon\Carbon::parse($item->tgl_kematian)->translatedFormat('l, d F Y') }}</td>

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
