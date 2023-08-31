@extends('layout.app')

@section('title', 'JDIH Kota Batu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
    </div>
</div>
@endsection
