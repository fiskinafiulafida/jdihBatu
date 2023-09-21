@extends('layout.app')

@section('title', 'Profile Pemohon JDIH Kota Batu')

@section('content')
<div class="card-body">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <br>
                        <br>
                        <img src="{{ asset ('Admin/img/download.png')}}" class="rounded" style="width: 100px">
                    </div>
                    <div class=" col-md-8">
                        <div class="card-body p-4">
                            <h6>Information User</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Name</h6>
                                    <p class="text-muted">{{ Auth::user()->name }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Email</h6>
                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Jenis Kelamin</h6>
                                    <p class="text-muted">{{ Auth::user()->jenisKelamin }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>NIK</h6>
                                    <p class="text-muted">{{ Auth::user()->nik }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Usia</h6>
                                    <p class="text-muted">{{ Auth::user()->usia }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Pekerjaan</h6>
                                    <p class="text-muted">{{ Auth::user()->pekerjaan }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Pendidikan Terakhir</h6>
                                    <p class="text-muted">{{ Auth::user()->pendidikanTerakhir }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>No Telephone</h6>
                                    <p class="text-muted">{{ Auth::user()->noHp }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Alamat</h6>
                                    <p class="text-muted">{{ Auth::user()->alamat }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Role User</h6>
                                    <p class="text-muted">{{ Auth::user()->role }}</p>
                                </div>
                            </div>
                            <a href="{{ route('profilePemohon.edit', Auth::user()->id) }}" class="fa fa-edit" style="font-size:20px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection