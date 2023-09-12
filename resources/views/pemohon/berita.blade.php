@extends('layout.app')

@section('title', 'Berita - JDIH Kota Batu')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Berita JDIH Kota Batu <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div>
                    @forelse ($beritajdih as $berita)
                    <div class="blog-list clearfix">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="{{ Storage::url('public/image/'.$berita->gambar_berita) }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="blog-meta big-meta col-md-8">
                                <h4>{{ $berita->judul_berita }}</h4>

                                <a href="{{ route('detailberita.show', $berita->id) }}">
                                    <button type="button" class="btn btn-primary">Read More
                                    </button>
                                </a>
                                <br><br>
                                <i class="fa fa-calendar" aria-hidden="true">
                                    <small>{{ $berita->created_at }}</small>
                                </i>
                                <i class="fa fa-user" aria-hidden="true">
                                    <small>JDIH Kota Batu</small>
                                </i>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $berita->status }}</a></small>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection