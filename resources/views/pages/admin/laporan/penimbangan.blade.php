<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Penimbangan {{ $date }}</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h4>Laporan Data Penimbangan</h4>
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
                    <td>{{ $item->usia }} Tahun</td>
                    <td>{{ $item->berat_badan }} Kg</td>
                    <td>{{ $item->lingkar_perut }} Cm</td>

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
</body>

</html>
