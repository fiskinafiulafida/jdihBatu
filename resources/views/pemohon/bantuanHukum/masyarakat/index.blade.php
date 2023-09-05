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
                    <form action="">
                        <div>
                            <label class="font-weight">Nama SKPD (Untuk ASN)</label>
                            <div class="form-group">
                                <input type="text" placeholder="Nama SKPD (Untuk ASN)" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Langkah - Langkah yang Pernah dilakukan</label>
                            <div class="form-group">
                                <input type="text" placeholder="Langkah - Langkah yang Pernah dilakukan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Uraian Permasalahan</label>
                            <div class="form-group">
                                <input type="text" placeholder="Uraian Permasalahan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Harapan dari User</label>
                            <div class="form-group">
                                <input type="text" placeholder="Harapan dari User" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Tanggapan / Jawaban atas Permasalahan</label>
                            <div class="form-group">
                                <input type="text" placeholder="Tanggapan / Jawaban atas Permasalahan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">KTP</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="gambar_berita">
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">From Permohonan</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="gambar_berita">
                            </div>
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