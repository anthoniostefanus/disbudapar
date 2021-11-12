<title>Selamat Datang di Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
@include('headline-blue.headline-blue')
@include('navigation bar.navigation-bar')

<div class="container main-login">
    <div class="row login-box">
        <div class="col-md-2">
            <!--Blank Area-->
        </div>

        <div class="col-md-8 main-form-login">
            <div class="row">
                <div class="col-md-12">
                </br>
                <img class= "pare2" src= "{{ ('/img/pare2.png') }}">
                <h1>Reset Kata Sandi</h1>
                </div>
            </div>
            </br>
            <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                <p class="txt-reset" style="color:#FFFFFF;"> Email </p>
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                            <p class="txt-reset" style="color:#FFFFFF;"> Kata Sandi </p>
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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            <p class="txt-reset" style="color:#FFFFFF;"> Konfirmasi Kata Sandi </p>
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            Reset Kata Sandi
                            </button>
                            </div>
                        </div>
                        </br>
                    </form>

        </div>
    </div>
</div>

@include('footer.footer')