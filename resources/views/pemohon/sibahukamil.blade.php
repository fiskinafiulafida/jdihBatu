@extends('layout.app')

@section('title', 'Berita - JDIH Kota Batu')

@section('content')
<section class="section">
    <section>
        <div class="container">
            <div style="margin-top: 20px">
                <center>
                    <h1 style="color: #00cba9">
                        SIBAHUKAMIL
                    </h1>
                    <p style="font-family: ">Sistem  Informasi Bantuan Hukum Konsultasi, Advokasi, Mediasi, Informasi, dan Litigasi</p>
                    </center>
            </div>
        </div>
    </section>
    <section style="margin-top: 50px">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,192L20,192C40,192,80,192,120,176C160,160,200,128,240,112C280,96,320,96,360,122.7C400,149,440,203,480,229.3C520,256,560,256,600,229.3C640,203,680,149,720,133.3C760,117,800,139,840,138.7C880,139,920,117,960,96C1000,75,1040,53,1080,64C1120,75,1160,117,1200,138.7C1240,160,1280,160,1320,154.7C1360,149,1400,139,1420,133.3L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
        <div style="background-color: #00cba9">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3>SIBAHUKAMIL</h3>
                        <p><b>Berdasar: <br>
                        - Peraturan Menteri Dalam Negeri Nomor 12 Tahun 2014 <br>
                        - Perda Nomor 1 Tahun 2020 dan Peraturan Wali Kota Nomor 39 Tahun 2020 <br></b>
                        </p>
                        <div class="col">
                            <div>
                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                                  </svg> Pengertian</h4>
                            </div>
                            <div class="media-body font-weight-semibold text-dark">
                                <span>Bantuan Hukum adalah jasa hukum yang diberikan oleh Pemberi Bantuan
                                    Hukum secara cuma-cuma kepada Penerima Bantuan Hukum
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <h4><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                    <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  </svg> Sasaran</h4>
                            </div>
                            <div class="media-body font-weight-semibold text-dark">
                                <span>Penerima Bantuan Hukum adalah: 1. Orang atau kelompok orang miskin
                                    dengan menunjukkan Surat Keterangan Tidak Mampu (SKTM). 2. SKPD atau Pemerintah Desa
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img src="{{ asset ('img/sibahukamil.png')}}" class="rounded" style="width: 520px">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,192L20,192C40,192,80,192,120,176C160,160,200,128,240,112C280,96,320,96,360,122.7C400,149,440,203,480,229.3C520,256,560,256,600,229.3C640,203,680,149,720,133.3C760,117,800,139,840,138.7C880,139,920,117,960,96C1000,75,1040,53,1080,64C1120,75,1160,117,1200,138.7C1240,160,1280,160,1320,154.7C1360,149,1400,139,1420,133.3L1440,128L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
    </section>
    <section class="book_section" style="padding: 25px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                         <span> <center>FORM PENGAJUAN BANTUAN</center></span>
                        </h4>
                        {{-- <div class="form-row ">
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
                        </div> --}}
                        <div class="btn-box">
                            <a href="/bantuanMasyarakat" class="btn btn-info" role="button">Masyarakat</a>
                            <a href="/bantuanSKPD" class="btn btn-info" role="button">SKPD</a>
                            <a href="/suratPermohonan" class="btn btn-info" role="button">Surat Permohonan</a>
                            <a href="/surat" class="btn btn-info" role="button">Print Surat Permohonan</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
