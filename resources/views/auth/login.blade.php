@extends('layouts.appuser')
@extends('layouts.headeruser')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/loginuser.css') }}">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-5">
            <div class = "bg-login"> 
            <img src="{{ ('img/pare.png ') }}" class="img-fluid rounded-start" alt="...">
            </div>
            </div>
            
            <div class="col-md-7">
              <div class="card-body">
              <div class="offset-md-2 ">
                  <h3 class="h3-txt" > Selamat Datang Kembali ! </h3>
                    <div class="offset-md-1 ">
                    <h5 class="h5-txt"> Gabung Untuk Melanjutkan</h5>
                    <br/>
                    </div>
                </div>
              <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                        
                            <label for="email" class="col-md-1 col-form-label offset-2" >
                            <img class ="login-login" src="{{ ('img/login.png ') }}">
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required oninvalid="this.setCustomValidity('Masukkan Username')" oninput="setCustomValidity('')">

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/>

                        <div class="form-group row">
                            <label for="password" class="col-md-1 col-form-label offset-2">
                            <img class ="login-login" src="{{ ('img/padlock.png ') }}">
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required oninvalid="this.setCustomValidity('Masukkan Kata Sandi')" oninput="setCustomValidity('')">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/>
                        <br/>

                        <div class="row justify-content-between">
                            <div class="btn-login col-4  offset-2">
                            <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                    <span class="fas fa-sign-in-alt"></span>
                    {{ __('adminlte::adminlte.sign_in') }}
                </button>
                            </div>

                            <div class="col-5">
                                @if (Route::has('password.request'))
                                    <a class="btn-password btn-link"style="text-decoration:none;" href="{{ route('password.request') }}">
                                        {{ __('Lupa Kata Sandi?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
             


@endsection
