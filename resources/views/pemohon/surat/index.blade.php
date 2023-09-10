@extends('layout.app')

@section('title', 'Surat Permohonan Bantuan Hukum')

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
                    A. Format Permohonan Bantuan Hukum
                </h4>
                <div class="form_container">
                    <form action="{{ route('suratPermohonan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="form-row">
                                <div class="col-7">
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" placeholder="Kota / Kab" />
                                </div>,
                                <div class="col">
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal" />
                                </div>
                            </div>
                            <div>
                                <label class="font-weight">Nomor : </label>
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
                                <label class="font-weight">Perihal : Permohonan Bantuan Hukum </label>
                            </div>
                            <div>
                                <label class="font-weight">Kepada Yth. </label>
                            </div>
                            <div>
                                <label class="font-weight">Nama Organisasi Bantuan Hukum </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nama_organisasi') is-invalid @enderror" name="nama_organisasi" value="{{ old('nama_organisasi') }}" placeholder="Nama Organisasi" />
                                </div>
                                <!-- error message untuk nama_organisasi -->
                                @error('nama_organisasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Di</label>
                            </div>
                            <div>
                                <label class="font-weight"> tempat</label>
                            </div>
                            <div>
                                <label class="font-weight"> Dengan hormat,</label>
                            </div>
                            <div>
                                <label for="font-weight">Saya Yang bertanda tangan dibawah ini : </label>
                            </div>
                            <div>
                                <label class="font-weight">Nama : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror" name="nama_pemohon" value="{{ old('nama_pemohon') }}" placeholder="Nama Pemohon" />
                                </div>
                                <!-- error message untuk nama_pemohon -->
                                @error('nama_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Jenis Kelamin :</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('jenis_kelamin_pemohon') is-invalid @enderror" name="jenis_kelamin_pemohon" value="{{ old('jenis_kelamin_pemohon') }}" placeholder="Jenis Kelamin" />
                                </div>
                                <!-- error message untuk jenis_kelamin_pemohon -->
                                @error('jenis_kelamin_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tempat/Tanggal lahir :</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tanggal_lahir_pemohon') is-invalid @enderror" name="tanggal_lahir_pemohon" value="{{ old('tanggal_lahir_pemohon') }}" placeholder="Tanggal Lahir" />
                                </div>
                                <!-- error message untuk tanggal_lahir_pemohon -->
                                @error('tanggal_lahir_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Agama : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('agama_pemohon') is-invalid @enderror" name="agama_pemohon" value="{{ old('agama_pemohon') }}" placeholder="Agama Pemohon" />
                                </div>
                                <!-- error message untuk agama_pemohon -->
                                @error('agama_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pendidikan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('pendidikan_pemohon') is-invalid @enderror" name="pendidikan_pemohon" value="{{ old('pendidikan_pemohon') }}" placeholder="Pendidikan Pemohon" />
                                </div>
                                <!-- error message untuk pendidikan_pemohon -->
                                @error('pendidikan_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Golongan Darah : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('golongan_darah_pemohon') is-invalid @enderror" name="golongan_darah_pemohon" value="{{ old('golongan_darah_pemohon') }}" placeholder="Golongan Darah " />
                                </div>
                                <!-- error message untuk golongan_darah_pemohon -->
                                @error('golongan_darah_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Alamat/Telepon/HP : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('alamat_pemohon') is-invalid @enderror" name="alamat_pemohon" value="{{ old('alamat_pemohon') }}" placeholder="Alamat Pemohon" />
                                </div>
                                <!-- error message untuk alamat_pemohon -->
                                @error('alamat_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pekerjaan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('pekerjaan_pemohon') is-invalid @enderror" name="pekerjaan_pemohon" value="{{ old('pekerjaan_pemohon') }}" placeholder="Pekerjaan Pemohon" />
                                </div>
                                <!-- error message untuk pekerjaan_pemohon -->
                                @error('pekerjaan_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Keterangan Miskin : </label>
                                <div class="form-group">
                                    <select class="custom-select" id="keteranganmiskin_pemohon">
                                        <option selected> </option>
                                        <option value="1">SKTM</option>
                                        <option value="2">JAMKESMAS</option>
                                        <option value="3">GAKIN</option>
                                        <option value="4">Terlampir</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="font-weight">Bersama ini mengajukan permohonan bantuan hukum dengan uraian singkat pokok permasalahan sebagai berikut : </label>
                                <div>
                                    <input type="text" class="message-box" class="form-control @error('keterangan_1') is-invalid @enderror" name="keterangan_1" value="{{ old('keterangan_1') }}" />
                                </div>
                            </div>
                            <div>
                                <label class="font-weight">Demikian permohonan ini kami ajukan untuk disetujui</label>
                            </div>
                            <div>
                                <label class="font-weight">Tanda Tangan Pemohon</label>
                                <input type="file" class="form-control @error('ttd_pemohon') is-invalid @enderror" name="ttd_pemohon">
                                <!-- error message untuk ttd_pemohon -->
                                @error('ttd_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="btn_box">
                                <button>
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection