@extends('layout.app')

@section('title', 'Laporan Kegiatan Mediasi')

@section('content')
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>
                C. Formulir Hasil Konsultasi Hukum
            </h2>
        </div>

        <div class="row">
            <div class="col-md-7">
                <h4>
                    BERITA ACARA MEDIASI
                </h4>
                <div class="form_container">
                    <form action="{{ route('suratPermohonan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="font-weight">Pada Hari Ini : </label>
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Hari" />
                            </div>
                            <div class="col">
                                <label for="font-weight">Tanggal : </label>
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal" />
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <label for="font-weight">Telah Dilaksanakan Mediasi : </label>
                                <input type="date" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Hari" />
                            </div>
                            <div class="col">
                                <label for="font-weight">Beralamat di : </label>
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal" />
                            </div>
                        </div>
                        <div>
                            <label for="font-weight">yang selanjutnya disebut dengan PIHAK 1, dengan : </label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Hari" />
                        </div>
                        <div>
                            <label for="font-weight">yang beralamat di : </label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Hari" />
                        </div>
                        <div>
                            <label for="font-weight">yang selanjutnya disebut dengan PIHAK 1, dalam perkara : </label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Hari" />
                        </div>
                        <div>
                            <label class="font-weight">Adapun butir-butir kesepakatan mediasi yang dihasilkan adalah sebagai berikut :</label>
                            <div>
                                <input type="text" class="message-box" class="form-control @error('keterangan_1') is-invalid @enderror" name="keterangan_1" value="{{ old('keterangan_1') }}" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">TTD Pihak Pertama</label>
                            <input type="file" class="form-control @error('ttd_pemohon') is-invalid @enderror" name="ttd_pemohon">
                            <!-- error message untuk ttd_pemohon -->
                            @error('ttd_pemohon')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight">TTD Pihak Kedua</label>
                            <input type="file" class="form-control @error('ttd_pemohon') is-invalid @enderror" name="ttd_pemohon">
                            <!-- error message untuk ttd_pemohon -->
                            @error('ttd_pemohon')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight">TTD Mediator</label>
                            <input type="file" class="form-control @error('ttd_pemohon') is-invalid @enderror" name="ttd_pemohon">
                            <!-- error message untuk ttd_pemohon -->
                            @error('ttd_pemohon')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection