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
                                <img src="{{ Storage::url('public/image/{{ Auth::user()->gambarProfile') }}" class="rounded" style="width: 100px">
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
                                        <!-- <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
                                            <div class="col-md-10">
                                                <input id="profile" type="file" class="form-control @error('profile') is-invalid @enderror" name="profile" value="{{ old('profile', $profile->profile) }}" autocomplete="profile" autofocus>
                                                @error('profile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div> -->
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