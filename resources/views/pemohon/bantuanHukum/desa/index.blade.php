@extends('layout.app')

@section('title', 'Bantuan Hukum Desa/SKPD')

@section('content')
<!-- contact section -->
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
                            <label class="font-weight">SKPD / Desa</label>
                            <div class="form-group">
                                <input type="text" placeholder="Nama SKPD (Untuk ASN)" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Jenis Perkara</label>
                            <div class="form-group">
                                <select name="" class="form-control wide" id="inputDoctorName">
                                    <option value="Tanah ">Tanah </option>
                                    <option value="Waris">Waris </option>
                                    <option value="Utang Piutang ">Utang Piutang </option>
                                    <option value="Jual Beli">Jual Beli</option>
                                    <option value="Administrasi Pemerintahan">Administrasi Pemerintahan</option>
                                    <option value="Yang Lain...">Yang Lain ... </option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">Uraian Permasalahan</label>
                            <div class="form-group">
                                <input type="text" placeholder="Uraian Permasalahan" />
                            </div>
                        </div>
                        <div>
                            <label class="font-weight">SKK</label>
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