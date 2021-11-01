@extends('layouts.appuser')
@section('content')
@extends('layouts.headeruser')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/registeruser.css') }}">
<div class="container">
   <div class="row justify-content-end">
        <div class="col-md-7">
            <div class="card">
                <img  class= "pare" src="{{ ('img/pare.png ') }}">
                <div class="txt-header">Buat Akun Ekraf</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label"></label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label "></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>
                        <div class="form-group row">
                            <label for="no_tlp" class="col-md-3 col-form-label text-md-right">{{ __('no_tlp') }}</label>

                            <div class="col-md-8">
                                <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" required autocomplete="no_tlp" autofocus>

                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>

                        
                        

                        <div class="row justify-content">
                            <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Kata Sandi">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Konfirmasi">
                            </div>
                        </div>
                        </br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
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
