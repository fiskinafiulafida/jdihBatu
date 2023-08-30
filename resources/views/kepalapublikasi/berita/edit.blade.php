@extends('operator.index')

@section('title', 'Edit Berita Kepala Publikasi')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Berita</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('kepalapublikasiberita.update', $kepalapublikasiberitum->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="radio" name="status" value="Verifikasi"> Verifikasi
                    <input type="radio" name="status" value="Revisi"> Revisi
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $kepalapublikasiberitum->keterangan) }}">

                <!-- error message untuk title -->
                @error('keterangan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </form>

        </body>
    </div>
</div>
@endsection