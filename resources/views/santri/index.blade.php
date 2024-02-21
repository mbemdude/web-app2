@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class=" mb-2 font-weight-bold text-primary">Data Santri</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($santris as $santri)
                        <tr>
                            <td>{{ $santri->nama }}</td>
                            <td>{{ $santri->nis }}</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="/santri/delete" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="/santri/delete" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection