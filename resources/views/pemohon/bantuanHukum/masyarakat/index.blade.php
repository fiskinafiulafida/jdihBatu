@extends('layout.app')

@section('title', 'Bantuan Hukum Masyarakat')

@section('content')
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>
                FORM PELAYANAN PENGAJUAN BANTUAN HUKUM (SIBAHU KAMIL)
            </h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form_container">
                    <form action="{{ route('bantuanMasyarakat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="font-weight">Nama SKPD (Untuk ASN)</label>
                            <div class="form-group">
                                <input type="text" class="form-control @error('skpd') is-invalid @enderror" name="skpd" value="{{ old('skpd') }}" placeholder="Nama SKPD (Untuk ASN)" />
                            </div>
                            <!-- error message untuk nama -->
                            @error('skpd')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label class="font-weight">Langkah - Langkah yang Pernah dilakukan</label>
                            <div class="form-group">
                                <input type="text" class="form-control @error('langkahlangkah') is-invalid @enderror" name="langkahlangkah" value="{{ old('langkahlangkah') }}" placeholder="Langkah - Langkah yang Pernah dilakukan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Uraian Permasalahan</label>
                            <div class="form-group">
                                <input type="text" class="form-control @error('uraian') is-invalid @enderror" name="uraian" value="{{ old('uraian') }}" placeholder="Uraian Permasalahan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Harapan dari User</label>
                            <div class="form-group">
                                <input type="text" class="form-control @error('harapan') is-invalid @enderror" name="harapan" value="{{ old('harapan') }}" placeholder="Harapan dari User" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Tanggapan / Jawaban atas Permasalahan</label>
                            <div class="form-group">
                                <input type="text" class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" value="{{ old('tanggapan') }}" placeholder="Tanggapan / Jawaban atas Permasalahan" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">KTP</label>
                            <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp">

                            <!-- error message untuk ktp -->
                            @error('ktp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Permohonan</label>
                            <input type="file" class="form-control @error('permohonan') is-invalid @enderror" name="permohonan">

                            <!-- error message untuk permohonan -->
                            @error('permohonan')
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
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="img-box">
                    <img src="images/contact-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection