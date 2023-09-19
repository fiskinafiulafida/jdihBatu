@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                    <div class="signup-image">
                        <figure><img src="{{ asset ('LogRegis/images/jdih.png')}}" alt="sing up image"></figure>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="nik" class="form-control" name="nik" required autocomplete="nik">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="noHp" class="col-md-4 col-form-label text-md-end">{{ __('No Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="noHp" type="noHp" class="form-control" name="noHp" required autocomplete="noHp">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="alamat" class="form-control" name="alamat" required autocomplete="alamat">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="usia" class="col-md-4 col-form-label text-md-end">{{ __('Usia') }}</label>

                            <div class="col-md-6">
                                <input id="usia" type="nik" class="form-control" name="usia" required autocomplete="usia">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-end">{{ __('Pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan" type="pekerjaan" class="form-control" name="pekerjaan" required autocomplete="pekerjaan">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jenisKelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="jenisKelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenisKelamin" value="Perempuan"> Perempuan
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pendidikanTerakhir" class="col-md-4 col-form-label text-md-end">{{ __('Pendidikan Terakhir') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="pendidikanTerakhir" value="Tidak Sekolah"> Tidak Sekolah </br>
                                <input type="radio" name="pendidikanTerakhir" value="SD/MI /Sederajat"> SD/MI /Sederajat </br>
                                <input type="radio" name="pendidikanTerakhir" value="SMP/MTs/Sederajat"> SMP/MTs/Sederajat </br>
                                <input type="radio" name="pendidikanTerakhir" value="SMA/MA/SMK/Sederajat"> SMA/MA/SMK/Sederajat </br>
                                <input type="radio" name="pendidikanTerakhir" value="D-III/Sederajat"> D-III/Sederajat </br>
                                <input type="radio" name="pendidikanTerakhir" value="S1 / D-VI / Sederajat"> S1 / D-VI / Sederajat </br>
                                <input type="radio" name="pendidikanTerakhir" value="S2"> S2 </br>
                                <input type="radio" name="pendidikanTerakhir" value="S3"> S3 </br>
                                <input type="radio" name="pendidikanTerakhir" value="Yang Lainnya ..."> Yang Lainnya ... </br>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Role User') }}</label>

                            <div class="col-md-6">
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


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection