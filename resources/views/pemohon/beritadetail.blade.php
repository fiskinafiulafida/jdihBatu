@extends('layout.app')

@section('title', 'Berita - JDIH Kota Batu')

@section('content')
<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item"><a href="beritajdih">Berita</a></li>
                            <li class="breadcrumb-item active">{{ $detailberita->judul_berita }}</li>
                        </ol>

                        <h3>{{ $detailberita->judul_berita }}</h3>

                        <div class="blog-meta big-meta">
                            <i class="fa fa-calendar" aria-hidden="true">
                                <small> {{ $detailberita->created_at }}</small>
                            </i>
                            <i class="fa fa-user" aria-hidden="true">
                                <small> JDIH Kota Batu</small>
                            </i>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $detailberita->status }}</a></small>
                        </div>

                        <div class="single-post-media">
                            <img src="{{ Storage::url('public/image/'.$detailberita->gambar_berita) }}" alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">
                                <p>{{ $detailberita->isi_berita }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection