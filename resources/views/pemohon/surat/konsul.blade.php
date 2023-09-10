@extends('layout.app')

@section('title', 'Hasil Konsultasi Hukum')

@section('content')
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>
                FORM PERMOHONAN BANTUAN HUKUM
            </h2>
        </div>

        <div class="row">
            <div class="col-md-7">
                <h4>
                    B. FORMULIR HASIL KONSULTASI HUKUM
                </h4>

                <div class="form_container">
                    <form action="{{ route('konsultasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="font-weight"> I. DATA PEMOHON / CLIENT : </label>
                            <div>
                                <label class="font-weight">Nama : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tempat / Tanggal Lahir : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Status : </label>
                                <div class="form-group">
                                    <select class="custom-select" id="keteranganmiskin_pemohon">
                                        <option selected> </option>
                                        <option value="1">Kawin</option>
                                        <option value="2">Belum Kawin</option>
                                        <option value="3">Janda</option>
                                        <option value="4">Duda</option>
                                    </select>
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kelurahan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kecamatan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kabupaten : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pendidikan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pekerjaan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Nomor" />
                                </div>
                                <!-- error message untuk nomor -->
                                @error('nomor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="font-weight"> II. Pelaksanaan Konsultasi Hukum : </label>
                            <div class="form-group">
                                <textarea class="form-control" class="message-box" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight"> III. Uraian singkat pokok masalah dan latar belakangnya : </label>
                            <div class="form-group">
                                <textarea class="form-control" class="message-box" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight"> IV. Nasihat yang diberikan konsultan termasuk aspek yuridisnya : </label>
                            <div class="form-group">
                                <textarea class="form-control" class="message-box" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight"> V. Hasil Akhir Konsultasi : </label>
                            <div class="form-group">
                                <textarea class="form-control" class="message-box" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight"> VI. Kesan konsultan atas tingkat pengetahuan/kesadaran hukum pemohon : </label>
                            <div class="form-group">
                                <textarea class="form-control" class="message-box" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" value="{{ old('nomor') }}" placeholder="Tempat , " />
                            </div>
                            <div class="col">
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">TTD Pemberi Bantuan Hukum</label>
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
</section>
@endsection