@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class=" mb-2 font-weight-bold text-primary">Tambah Data Santri</h1>
    
    <!-- Form -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="/santri" method="post">
                {{ csrf_field() }}
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
                <label for="nis">NIS</label>
                <input type="text" name="nis" class="form-control">
                <div class="mt-2">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/santri" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection