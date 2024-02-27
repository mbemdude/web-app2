@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Halaman Utama Bendahara</h1>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    SPP
                    <div class="text-white-50 small">Kelola pembayaran SPP</div>
                    <a href="{{ route('spp.index') }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    Uang Saku
                    <div class="text-white-50 small">Kelola pengeluaran uang saku</div>
                    <a href="{{ route('uang-saku.index') }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
@endsection