@extends('layout.app')

@section('title', 'JDIH Kota Batu')

@section('content')
<div class="hero_area">
    <section class="book_section" style="padding: 25px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                            <span>Cari Produk Hukum</span>
                        </h4>
                        <div class="form-row ">
                            <div class="form-group col-lg-12">
                                <label for="inputPatientName">Judul </label>
                                <input type="text" class="form-control" id="inputJudul" placeholder="Contoh: Peraturan Pemerintah">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="inputDoctorName">Tipe Dokumen</label>
                                <select name="" class="form-control wide" id="inputTipeDokumen">
                                    <option value="Normal distribution ">Peraturan Perundang-undangan </option>
                                    <option value="Normal distribution ">Monografi Hukum </option>
                                    <option value="Normal distribution ">Artikel Hukum </option>
                                    <option value="Normal distribution ">Putusan Pengadilan </option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="inputDepartmentName">Jenis Dokumen</label>
                                <select name="" class="form-control wide" id="inputJenisDokumen">
                                    <option value="Normal distribution ">Undang-Undang Dasar </option>
                                    <option value="Normal distribution ">Undang-Undang Darurat </option>
                                    <option value="Normal distribution ">Ketetapan MPR </option>
                                    <option value="Normal distribution ">Peraturan Presiden </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-lg-4">
                                <label for="inputPhone">Tahun</label>
                                <input type="number" class="form-control" id="inputTahun" placeholder="2023">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputSymptoms">Nomor</label>
                                <input type="text" class="form-control" id="inputNomor" placeholder="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="inputDate">Status </label>
                                <select name="" class="form-control wide" id="inputStatus">
                                    <option value="Normal distribution ">Berlaku </option>
                                    <option value="Normal distribution ">Tidak Berlaku </option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="btn ">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="about_section" style="padding: 15px">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset ('Jdih/images/jdihn.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tentang <span>JDIH Kota Batu</span>
                            </h2>
                        </div>
                        <p>
                            JDIH Kota Batu merupakan suatu sistem pendayagunaan bersama peraturan perundang-undangan
                            untuk meningkatkan pelayanan kepada masyarakat atas kebutuhan dokumentasi dan informasi hukum
                            secara lengkap, akurat, mudah dan cepat.
                        </p>
                        <a href="/profiljdih" style="text-decoration: none">
                            Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <!-- Page content -->
        <div class="container" style="margin-top: 10px">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card card-body bg-light has-bg-image summary-box shadow">
                        <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                            <div class="col">
                                <center>
                                    <div>
                                        <img src="{{asset('icon/peraturan.png')}}" style="width: 40px">
                                    </div>
                                    <div class="media-body font-weight-semibold text-dark">
                                        <span>Peraturan Hukum</span>
                                        <h3 class="mb-0 number-style">0</h3>
                                    </div>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-body bg-light has-bg-image summary-box shadow">
                        <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                            <div class="col ">
                                <center>
                                    <div>
                                        <img src="{{asset('icon/monografi.png')}}" style="width: 40px">
                                    </div>
                                    <div class="media-body font-weight-semibold text-dark">
                                        <span>Monografi Hukum</span>
                                        <h3 class="mb-0 number-style">0</h3>
                                    </div>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-body bg-light has-bg-image summary-box shadow">
                        <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                            <div class="col">
                                <center>
                                    <div>
                                        <img src="{{asset('icon/artikel.png')}}" style="width: 40px">
                                    </div>
                                    <div class="media-body font-weight-semibold text-dark">
                                        <span>Artikel Hukum</span>
                                        <h3 class="mb-0 number-style">0</h3>
                                    </div>

                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-body bg-light has-bg-image summary-box shadow">
                        <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                            <div class="col">
                                <center>
                                    <div>
                                        <img src="{{asset('icon/putusan.png')}}" style="width: 40px">
                                    </div>
                                    <div class="media-body font-weight-semibold text-dark">
                                        <span>Putusan Pengadilan</span>
                                        <h3 class="mb-0 number-style">0</h3>
                                    </div>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection