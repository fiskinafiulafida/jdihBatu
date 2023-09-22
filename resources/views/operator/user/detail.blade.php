@extends('operator.index')

@section('title', 'User')

@section('container')
<div class="card shadow mb-4">
    <center>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail My User</h6>
        </div>
    </center>
    <div class="card-body">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <br>
                            <br>
                            <img src="{{ asset ('Admin/img/user.png')}}" class="rounded" style="width: 100px">
                        </div>
                        <div class=" col-md-8">
                            <div class="card-body p-4">
                                <center>
                                    <h6>Information Detail User</h6>
                                </center>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Name</h6>
                                        <p class="text-muted">{{ $detailuser->name }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{ $detailuser->email }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Jenis Kelamin</h6>
                                        <p class="text-muted">{{ $detailuser->jenisKelamin }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>NIK</h6>
                                        <p class="text-muted">{{ $detailuser->nik }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Usia</h6>
                                        <p class="text-muted">{{ $detailuser->usia }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Pekerjaan</h6>
                                        <p class="text-muted">{{ $detailuser->pekerjaan }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Pendidikan Terakhir</h6>
                                        <p class="text-muted">{{ $detailuser->pendidikanTerakhir }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>No Telephone</h6>
                                        <p class="text-muted">{{ $detailuser->noHp }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Alamat</h6>
                                        <p class="text-muted">{{ $detailuser->alamat }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Role</h6>
                                        <p class="text-muted">{{ $detailuser->role }}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Created Akun</h6>
                                        <p class="text-muted">{{ $detailuser->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection