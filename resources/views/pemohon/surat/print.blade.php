@extends('layout.app')

@section('title', 'Berita - JDIH Kota Batu')

@section('content')
<section class="section">
    <section class="book_section" style="padding: 25px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <h4>
                         <span> <center>Print Surat Permohonan Anda Disini</center></span>
                        </h4>
                        <form method="post" class="card mb-10">
                            <div class="card-body">
                                @csrf
                                <div class="mb-1">
                                    <label for="" class="form-label fs-20">Email</label>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="masukkan email anda ...">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="button" class="btn" style="background-color: #00cba9"><a onclick="this.href='/cetak_surat/'+ document.getElementById('email').value" >Cetak Bantuan</a></button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
