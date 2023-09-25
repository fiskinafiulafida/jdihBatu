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
                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
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
                            <h4>
                                B. Formulir Hasil Konsultasi Hukum
                            </h4>
                            <div>
                                <label class="font-weight">Kawin/belum kawin/ Duda/janda : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('status_pemohon') is-invalid @enderror" name="status_pemohon" value="{{ old('status_pemohon') }}" placeholder="Status Pemohon" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('status_pemohon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kelurahan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{ old('kelurahan') }}" placeholder="Kelurahan Pemohon" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('kelurahan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kecamatan : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') }}" placeholder="Kecamatan Pemohon" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('kecamatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kabupaten : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" name="kabupaten" value="{{ old('kabupaten') }}" placeholder="Kabupaten Pemohon" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('kabupaten')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pelaksanaan Konsultasi hukum (tanggal/bulan/tahun) : </label>
                                <div class="col">
                                    <input type="date" class="form-control @error('pelaksanaan') is-invalid @enderror" name="pelaksanaan" value="{{ old('pelaksanaan') }}" placeholder="pelaksanaan" />
                                </div>
                            </div>
                            <div>
                                <label class="font-weight">Uraian singkat pokok masalah dan latar belakangnya : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('uraian') is-invalid @enderror" name="uraian" value="{{ old('uraian') }}" placeholder="Uraian" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('uraian')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Nasihat yang diberikan konsultan termasuk aspek yuridisnya : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nasihat') is-invalid @enderror" name="nasihat" value="{{ old('nasihat') }}" placeholder="Nasihat" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('nasihat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Hasil Akhir Konsultasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('hasilkonsultasi') is-invalid @enderror" name="hasilkonsultasi" value="{{ old('hasilkonsultasi') }}" placeholder="Hasil Konsultasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('hasilkonsultasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Kesan konsultan atas tingkat pengetahuan/kesadaran hukum pemohon : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kesanKonsultasi') is-invalid @enderror" name="kesanKonsultasi" value="{{ old('kesanKonsultasi') }}" placeholder="Kesan Konsultasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('kesanKonsultasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Nama Konsultan Hukum : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nama_konsultanhukum') is-invalid @enderror" name="nama_konsultanhukum" value="{{ old('nama_konsultanhukum') }}" placeholder="Nama Konsultan Hukum" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('nama_konsultanhukum')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tempat Bantuan Hukum : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tempat_bantuanhukum') is-invalid @enderror" name="tempat_bantuanhukum" value="{{ old('tempat_bantuanhukum') }}" placeholder="Tempat Bantuan Hukum" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('tempat_bantuanhukum')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanggal Bantuan Hukum : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tanggal_bantuanhukum') is-invalid @enderror" name="tanggal_bantuanhukum" value="{{ old('tanggal_bantuanhukum') }}" placeholder="Tanggal Bantuan Hukum" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('tanggal_bantuanhukum')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanda Tangan Pemberi Bantuan Hukum</label>
                                <input type="file" class="form-control @error('ttd_pemberibantuanhukum') is-invalid @enderror" name="ttd_pemberibantuanhukum">
                                <!-- error message untuk ttd_pemohon -->
                                @error('ttd_pemberibantuanhukum')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <h4>
                                C. Format Laporan Pelaksanaan Kegiatan Mediasi
                            </h4>
                            <div>
                                <label class="font-weight">Hari Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('hari_mediasi') is-invalid @enderror" name="hari_mediasi" value="{{ old('hari_mediasi') }}" placeholder="Hari Mediasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('hari_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanggal Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tanggal_mediasi') is-invalid @enderror" name="tanggal_mediasi" value="{{ old('tanggal_mediasi') }}" placeholder="Tanggal Mediasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('tanggal_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Bulan Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('bulan_mediasi') is-invalid @enderror" name="bulan_mediasi" value="{{ old('bulan_mediasi') }}" placeholder="Bulan Mediasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('bulan_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tahun Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tahun_mediasi') is-invalid @enderror" name="tahun_mediasi" value="{{ old('tahun_mediasi') }}" placeholder="Tahun Mediasi" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('tahun_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Dilaksanakan Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('dilaksanakan_mediasi') is-invalid @enderror" name="dilaksanakan_mediasi" value="{{ old('dilaksanakan_mediasi') }}" placeholder="Dilaksanakan Mediasi ......" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('dilaksanakan_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Alamat Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('alamat_mediasi') is-invalid @enderror" name="alamat_mediasi" value="{{ old('alamat_mediasi') }}" placeholder="beralamat di ......" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('alamat_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Pihak 1 : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('pihak1_mediasi') is-invalid @enderror" name="pihak1_mediasi" value="{{ old('pihak1_mediasi') }}" placeholder="nama pihak 1 ......" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('pihak1_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Alamat Pihak 1 : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('pihak1_alamat') is-invalid @enderror" name="pihak1_alamat" value="{{ old('pihak1_alamat') }}" placeholder="alamat pihak 1 ......" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('pihak1_alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Perkara : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('pihak1_perkara') is-invalid @enderror" name="pihak1_perkara" value="{{ old('pihak1_perkara') }}" placeholder="dalam perkara ....." />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('pihak1_perkara')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Hasil Mediasi : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('hasil_mediasi') is-invalid @enderror" name="hasil_mediasi" value="{{ old('hasil_mediasi') }}" placeholder="Adapun  butir-butir kesepakatan mediasi yang dihasilkan adalah sebagai berikut: ....." />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('hasil_mediasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanda Tangan Pihak 1</label>
                                <input type="file" class="form-control @error('ttd_pihak1') is-invalid @enderror" name="ttd_pihak1">
                                <!-- error message untuk ttd_pemohon -->
                                @error('ttd_pihak1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Nama Tanda Tangan Pihak 1 : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('namattd_pihak1') is-invalid @enderror" name="namattd_pihak1" value="{{ old('namattd_pihak1') }}" placeholder="Nama TTD pihak 1" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('namattd_pihak1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanda Tangan Pihak 2</label>
                                <input type="file" class="form-control @error('ttd_pihak2') is-invalid @enderror" name="ttd_pihak2">
                                <!-- error message untuk ttd_pemohon -->
                                @error('ttd_pihak2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Nama Tanda Tangan Pihak 2 : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('namattd_pihak2') is-invalid @enderror" name="namattd_pihak2" value="{{ old('namattd_pihak2') }}" placeholder="Nama TTD pihak 2" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('namattd_pihak2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Tanda Tangan Mediator</label>
                                <input type="file" class="form-control @error('ttd_mediator') is-invalid @enderror" name="ttd_mediator">
                                <!-- error message untuk ttd_pemohon -->
                                @error('ttd_mediator')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div>
                                <label class="font-weight">Nama Tanda Tangan Mediator : </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('namattd_mediator') is-invalid @enderror" name="namattd_mediator" value="{{ old('namattd_mediator') }}" placeholder="Nama Mediator" />
                                </div>
                                <!-- error message untuk status_pemohon -->
                                @error('namattd_mediator')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection