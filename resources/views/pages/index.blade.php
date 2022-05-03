@extends('layouts.dashboard')

@section('content')
<div class="row">

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Users</h6>
                <h6 class="font-extrabold mb-0">{{ $userCount }}</h6>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Balita</h6>
                <h6 class="font-extrabold mb-0">{{ $balita }}</h6>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="text-muted font-semibold">Jumlah Data Ibu Hamil</h6>
                <h6 class="font-extrabold mb-0">{{ $ibu_hamil }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection
