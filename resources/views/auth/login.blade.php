<title>Selamat Datang di Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
@include('headline-blue.headline-blue')
@include('navigation bar.navigation-bar')

<div class="container main-login">
    <div class="row login-box">
        <div class="col-md-5">
            <img class="pict-main-login" src="{{asset ('img/pare.png ') }}" alt="Simpel Pare">
        </div>

        <div class="col-md-7 main-form-login">
            <div class="row">
                <div class="col-12">
</br>
                <h3 class="h3-txt" > Selamat Datang Kembali ! </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <h5 class="h5-txt"> Gabung Untuk Melanjutkan</h5>
                </div>
            </div>
</br>

            <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="row row-username">
                    <div class="col-12">
                       <div class="form-group row">
                        <div class="col-3">
                            <img class="side-input-field" src="{{ ('img/login.png ') }}">
                        </div>
                        <div class="col-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email" required oninvalid="this.setCustomValidity('Masukkan Username')" oninput="setCustomValidity('') ">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row row-password">
                    <div class="col-12">
                        
                        <div class="form-group row">
                        <div class="col-3">
                            <img class="side-input-field" src="{{ ('img/padlock.png ') }}">
                        </div>
                      

                        <div class="col-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Kata Sandi" required oninvalid="this.setCustomValidity('Masukkan Kata Sandi')" oninput="setCustomValidity('')">
                         @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-between">
                    <div class="btn-login col-4  offset-2">
                         <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                            <span class="fas fa-sign-in-alt"></span>
                            Masuk
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

@include('footer.footer')