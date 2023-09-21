@extends('layout.app')

@section('title', 'Edit Profile Pemohon')

@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('profilePemohon.update', Auth::user()->id) }}">
        @csrf
        @method('PUT')
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class=" col-md-12">
                            <div class="card-body p-4">
                                <center>
                                    <h6>Information User</h6>
                                </center>
                                <hr class="mt-0 mb-4">
                                <div class="row py-1">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Name</h6>
                                            <p class="text-muted">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $profilePemohon->name) }}" autocomplete="name" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', $profilePemohon->email) }}" autocomplete="email" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Jenis Kelamin</h6>
                                            <p class="text-muted">
                                                <input id="jenisKelamin" type="text" class="form-control" name="jenisKelamin" value="{{ old('jenisKelamin', $profilePemohon->jenisKelamin) }}" autocomplete="jenisKelamin" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>NIK</h6>
                                            <p class="text-muted">
                                                <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik', $profilePemohon->nik) }}" autocomplete="nik" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Usia</h6>
                                            <p class="text-muted">
                                                <input id="usia" type="text" class="form-control" name="usia" value="{{ old('usia', $profilePemohon->usia) }}" autocomplete="usia" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Pekerjaan</h6>
                                            <p class="text-muted">
                                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ old('pekerjaan', $profilePemohon->pekerjaan) }}" autocomplete="pekerjaan" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Pendidikan Terakhir</h6>
                                            <p class="text-muted">
                                                <input id="pendidikanTerakhir" type="text" class="form-control" name="pendidikanTerakhir" value="{{ old('pendidikanTerakhir', $profilePemohon->pendidikanTerakhir) }}" autocomplete="pendidikanTerakhir" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>No Telephone</h6>
                                            <p class="text-muted">
                                                <input id="noHp" type="text" class="form-control" name="noHp" value="{{ old('noHp', $profilePemohon->noHp) }}" autocomplete="noHp" autofocus>

                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Alamat</h6>
                                            <p class="text-muted">
                                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat', $profilePemohon->alamat) }}" autocomplete="alamat" autofocus>

                                            </p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection