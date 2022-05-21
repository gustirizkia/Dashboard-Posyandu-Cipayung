@extends('layouts.dashboard')

@section('title')
Modernisasi Posyandu, Keluarga Berkualitas, Posyandu Sahabat Masyarakat.
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Balita</h6>
                <h6 class="font-extrabold ">{{ $balita }}</h6>
                {{-- <a href="{{ route('laporan-balita') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Ibu Hamil</h6>
                <h6 class="font-extrabold">{{ $ibu_hamil }}</h6>
                {{-- <a href="{{ route('laporan-ibu-hamil') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Imunisasi</h6>
                <h6 class="font-extrabold">{{ $imunisasi }}</h6>
                {{-- <a href="{{ route('laporan-imunisasi') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Vitamin</h6>
                <h6 class="font-extrabold">{{ $imunisasi }}</h6>
                {{-- <a href="{{ route('laporan-vitamin') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Kematian</h6>
                <h6 class="font-extrabold">{{ $kematian }}</h6>
                {{-- <a href="{{ route('laporan-kematian') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Penimbangan</h6>
                <h6 class="font-extrabold">{{ $penimbangan }}</h6>
                {{-- <a href="{{ route('laporan-kematian') }}" class="mb-0 text-primary">Print</a> --}}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Line Chart</h4>
            </div>
            <div class="card-body">
                <canvas id="line"></canvas>
            </div>
        </div>
    </div>
</div>
<div>
    {{-- {{ $grafik }} --}}
</div>

@push('script')
<script src="{{ asset('dashboard/chart.min.js') }}"></script>
<script>
    console.log("Hello");

    let labels = [
        @foreach($grafik as $index => $item)
            {{ $index }},
        @endforeach
    ];

    let data = [
        @foreach($grafik as $index => $item)
        {{ count($item) }},
        @endforeach
    ];

    labelKematian = [
        @foreach($grafik2 as $index => $item)
            {{ $index }},
        @endforeach
    ];

    let dataKematian = [
        @foreach($grafik2 as $index => $item)
            {{ count($item) }},
        @endforeach
    ]


    console.log(labels, data);

    var myline = new Chart(line, {
    type: 'line',
    data: {
    labels: labels.sort(),
    datasets: [{
    label: 'Kelahiran',
    data: data,
    backgroundColor: "rgba(50, 69, 209,.6)",
    borderWidth: 3,
    borderColor: 'rgba(63,82,227,1)',
    pointBorderWidth: 0,
    pointBorderColor: 'transparent',
    pointRadius: 3,
    pointBackgroundColor: 'transparent',
    pointHoverBackgroundColor: 'rgba(63,82,227,1)',
    }, {
    label: 'Kematian',
    data: dataKematian,
    backgroundColor: "rgba(253, 183, 90,.6)",
    borderWidth: 3,
    borderColor: 'rgba(253, 183, 90,.6)',
    pointBorderWidth: 0,
    pointBorderColor: 'transparent',
    pointRadius: 3,
    pointBackgroundColor: 'transparent',
    pointHoverBackgroundColor: 'rgba(63,82,227,1)',
    }]
    },
    options: {
    responsive: true,
    layout: {
    padding: {
    top: 10,
    },
    },
    tooltips: {
    intersect: false,
    titleFontFamily: 'Helvetica',
    titleMarginBottom: 10,
    xPadding: 10,
    yPadding: 10,
    cornerRadius: 3,
    },
    legend: {
    display: true,
    },
    scales: {
    yAxes: [
    {
    gridLines: {
    display: true,
    drawBorder: true,
    },
    ticks: {
    display: true,
    },
    },
    ],
    xAxes: [
    {
    gridLines: {
    drawBorder: false,
    display: false,
    },
    ticks: {
    display: false,
    },
    },
    ],
    },
    }
    });
</script>
@endpush
@endsection
