@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class=" mb-2 font-weight-bold text-primary">Edit Data Santri</h1>
    
    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/santri/{{ $santri->nis }}" method="post">
                @csrf
                @method('PUT')
                <label for="nis">NIS</label>
                <input type="text" name="nis" value="{{ $santri->nis }}" class="form-control" readonly>
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{ $santri->nama }}" class="form-control">
                <div class="mt-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/santri" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection