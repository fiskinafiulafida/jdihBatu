@extends('operator.index')

@section('title', 'Edit Berita')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Berita</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('berita.update', $beritum->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="font-weight-bold">Judul Berita</label>
                <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita', $beritum->judul_berita) }}" placeholder="Masukkan Judul Berita">

                <!-- error message untuk title -->
                @error('judul_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Isi Berita</label>
                <input type="text" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" value="{{ old('isi_berita', $beritum->isi_berita) }}" placeholder="Masukkan Isi Berita">

                <!-- error message untuk title -->
                @error('isi_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $beritum->keterangan) }}" placeholder="Masukkan Keterangan">

                <!-- error message untuk title -->
                @error('keterangan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Gambar Berita</label>
                <br>
                <img src="{{ Storage::url('public/image/'.$beritum->gambar_berita) }}" class="rounded" style="width: 100px">
                <input type="file" class="form-control" name="gambar_berita">
            </div>

            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </form>

        </body>
    </div>
</div>
@endsection