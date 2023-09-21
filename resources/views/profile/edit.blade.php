@extends('operator.index')

@section('title', 'Profile User')

@section('container')
<div class="card shadow mb-4">
    <center>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hallo, {{ Auth::user()->name }}</h6>
        </div>
    </center>
    <div class="card-body">
        <form method="POST" action="{{ route('profile.update', $profile->id) }}">
            @csrf
            @method('PUT')
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <center>
                                    <img src="{{ asset ('Admin/img/download.png')}}" class="rounded" style="width: 80px; padding-top: 200px">
                                </center>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information User</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-12">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $profile->name) }}" autocomplete="name" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                            <div class="col-md-12">
                                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $profile->email) }}" autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pendidikanTerakhir" class="col-md-4 col-form-label text-md-right">{{ __('Pendidikan Terakhir') }}</label>

                                            <div class="col-md-8">
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
                                        <div class="form-group row">
                                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>
                                            <div class="col-md-12">
                                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik', $profile->nik) }}" autocomplete="nik" autofocus>
                                                @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="usia" class="col-md-4 col-form-label text-md-right">{{ __('Usia') }}</label>
                                            <div class="col-md-5">
                                                <input id="usia" type="text" class="form-control @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia', $profile->usia) }}" autocomplete="usia" autofocus>
                                                @error('usia')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div></br> <br>
                                        <div class="form-group row">
                                            <label for="usia" class="col-md-10 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>
                                            <div class="col-md-8">
                                                <input type="radio" name="jenisKelamin" value="Perempuan"> Perempuan </br>
                                                <input type="radio" name="jenisKelamin" value="Laki - Laki"> Laki - Laki </br>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>
                                            <div class="col-md-12">
                                                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan', $profile->pekerjaan) }}" autocomplete="pekerjaan" autofocus>
                                                @error('pekerjaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="noHp" class="col-md-4 col-form-label text-md-right">{{ __('No Telephone') }}</label>
                                            <div class="col-md-12">
                                                <input id="noHp" type="text" class="form-control @error('noHp') is-invalid @enderror" name="noHp" value="{{ old('noHp', $profile->noHp) }}" autocomplete="noHp" autofocus>
                                                @error('noHp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                                            <div class="col-md-12">
                                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $profile->alamat) }}" autocomplete="alamat" autofocus>
                                                @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection