@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <h1 class=" mb-2 font-weight-bold text-primary"">Data Uang Saku</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/bendahara/uang-saku/create" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Saldo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uangsakus as $uangsaku)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $uangsaku->santri->nis }}</td>
                                <td>{{ $uangsaku->santri->nama }}</td>
                                <td>{{ $uangsaku->saldo }}</td>
                                <td>
                                    <a href="{{ route('uang-saku.edit', $uangsaku->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $uangsaku->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $uangsaku->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $uangsaku->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $uangsaku->id }}">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data uang saku ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form id="delete-uang-saku-{{ $uangsaku->id }}" action="{{ route('uang-saku.destroy', $uangsaku->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection