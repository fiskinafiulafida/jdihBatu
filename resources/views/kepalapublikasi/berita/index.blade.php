@extends('kepalapublikasi.index')

@section('title', 'Berita Kepala Publikasi')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>

<!-- Content -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Berita</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Publish</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Publish</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Katerangan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($berita as $berita)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->isi_berita }}</td>
                        <td>{{ $berita->created_at }}</td>
                        <td class="text-center">
                            <img src="{{ Storage::url('public/image/'.$berita->gambar_berita) }}" class="rounded" style="width: 100px">
                        </td>
                        <td>{{ $berita->status }}</td>
                        <td>{{ $berita->keterangan }}</td>
                        <td class="text-center">
                            <a href="{{ route('kepalapublikasiberita.edit', $berita->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Berita belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection