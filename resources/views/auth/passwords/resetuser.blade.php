@extends('layouts.app')
@extends('layouts.header1')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                <img  class= "email" style="display:block; margin:auto;"  src="{{ ('/img/pare2.png ') }}">
                </br>
                <p class="verifikasi" style="text-align:center"> Reset Kata Sandi </p>
</br>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                <p class="txt-reset"> Email </p>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                            <p class="txt-reset"> Kata Sandi </p>
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            <p class="txt-reset"> Konfirmasi Kata Sandi </p>
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        </br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="text-decoration:none; ">
                                <p class="txt-resetpas"> Reset Kata Sandi </p>
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
