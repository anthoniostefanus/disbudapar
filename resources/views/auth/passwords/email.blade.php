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
                <h1>Temukan Akun Anda</h1>
                </div>
            </div>
            </br>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email anda">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            Selanjutnya
                            </button>
                
                            </div>
                        </div>
                        </br>
                    </form>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        </div>
    </div>
</div>

@include('footer.footer')