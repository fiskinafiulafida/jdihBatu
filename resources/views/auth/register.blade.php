@extends('layout.logreg')

@section('title', 'Register')

@section('main')
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="register" method="POST" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="name" />
                    </div>
                    <div class="form-group">
                        <label for="nik"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="nik" id="nik" placeholder="NIK" />
                    </div>
                    <div class="form-group">
                        <label for="noHp"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="noHp" id="noHp" placeholder="No Telephone" />
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="zmdi zmdi-email material-icons-name"></i></label>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="usia"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="usia" id="usia" placeholder="Usia" />
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" />
                    </div>
                    <div class="form-group">
                        <div><i class="zmdi zmdi-account material-icons-name"></i>
                            Jenis Kelamin
                        </div>
                        <input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenisKelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                        <div><i class="zmdi zmdi-account material-icons-name"></i>
                            Pendidikan Terakhir
                        </div>
                        <input type="radio" name="pendidikanTerakhir" value="Tidak Sekolah">Tidak Sekolah
                        <input type="radio" name="pendidikanTerakhir" value="SD/MI /Sederajat">SD/MI /Sederajat
                        <input type="radio" name="pendidikanTerakhir" value="SMP/MTs/Sederajat">SMP/MTs/Sederajat
                        <input type="radio" name="pendidikanTerakhir" value="SMA/MA/SMK/Sederajat">SMA/MA/SMK/Sederajat
                        <input type="radio" name="pendidikanTerakhir" value="D-III/Sederajat">D-III/Sederajat
                        <input type="radio" name="pendidikanTerakhir" value="S1 / D-VI / Sederajat">S1 / D-VI / Sederajat
                        <input type="radio" name="pendidikanTerakhir" value="S2">S2
                        <input type="radio" name="pendidikanTerakhir" value="S3">S3
                        <input type="radio" name="pendidikanTerakhir" value="Yang Lainnya ...">Yang Lainnya ...
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <div><i class="zmdi zmdi-account material-icons-name"></i>
                            Role User
                            <select name="role" id="role">
                                <option value=""></option>
                                <option value="operator">Operator </option>
                                <option value="pengelolahbantuanhukum">Pengelolah Bantuan Hukum</option>
                                <option value="analisishukum">Analisis Hukum </option>
                                <option value="obh">OBH</option>
                                <option value="kabag">Kabag</option>
                                <option value="kuasahukumpemkot">Kuasa Hukum PEMKOT</option>
                                <option value="staffdokumentasi">Staff Dokumentasi</option>
                                <option value="kasubaghukum">Kasubag Hukum</option>
                                <option value="kepalapublikasi">Kepala Publikasi</option>
                                <option value="staffhukum">Staff Hukum</option>
                                <option value="pemohon">Pemohon</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset ('LogRegis/images/jdih.png')}}" alt="sing up image"></figure>
                <a href="/" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection
