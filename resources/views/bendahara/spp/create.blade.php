@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-2 font-weight-bold text-primary">Tambah Data Santri</h1>
    
    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/bendahara/spp" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="santri_nis">Nama Santri</label>
                    <select name="santri_nis" id="santri_nis" class="form-control">
                        <option value> -- Pilih Santri --</option>
                        @foreach ($santris as $santri)
                            <option value="{{ $santri->nis }}">{{ $santri->nis }} | {{ $santri->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_tagihan">Kode Tagihan</label>
                    <input type="text" name="kode_tagihan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="total_tagihan">Total Tagihan</label>
                    <input type="text" name="total_tagihan" class="form-control">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/bendahara/spp" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection