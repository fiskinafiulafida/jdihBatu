@extends('operator.index')

@section('title', 'Create Berita')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Berita</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Data Berita</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="font-weight-bold">Judul Berita</label>
                <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita') }}" placeholder="Masukkan Judul Berita">
                <!-- error message untuk judul_berita -->
                @error('judul_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Isi Berita</label>
                <textarea type="text" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" value="{{ old('isi_berita') }}" placeholder="Masukkan Isi Berita">
                </textarea>
                <!-- error message untuk isi_berita -->
                @error('isi_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Keterangan</label>
                <textarea type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan">
                </textarea>
                <!-- error message untuk Keterangan -->
                @error('keterangan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="radio" name="status" value="Pengajuan"> Pengajuan
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Gambar Berita </label>
                <input type="file" class="form-control @error('gambar_berita') is-invalid @enderror" name="gambar_berita">
                <!-- error message untuk gambar_berita -->
                @error('gambar_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </form>
    </div>
</div>

@endsection