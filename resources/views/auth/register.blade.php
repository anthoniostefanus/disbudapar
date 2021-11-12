<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/regis-ek.css') }}">
        <title>Registrasi Akun | Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        @include('headline-blue.headline-blue')
        @include('navigation bar.main-navigation')

    <body>
        <div class="container main-container">
            <div class="row banner-ekraf">
                <div class="col-md-12 banner-title">
                    <!--Header Container // Orange-->
                    </br>
                    <h1 class="title-head">Registrasi Akun<br></h1>    
                    <!--End of Header Container-->
                </div>
            </div>

            <!--Main Content-->
            <div class="row">
                <div class="col-md-2">
                    <!--Blank Space-->
                </div>

                <div class="col-md-8">
                    <div class="container main-content">
                        <div class="row">
                            <div class="col-md-12">
                            <form method="POST" action="{{ route('register') }}">
                        @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

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

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Username</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

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

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>No Telepon</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

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

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Kata Sandi</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Kata Sandi">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        </br>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Konfirmasi</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Konfirmasi">
                                            </div>
                                        </div>
                                        </br>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <!--Blank Area-->
                                            </div>

                                            <div class="col-md-3">
                                                <!--Blank Area-->
                                            </div>

                                            <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                    Berikutnya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <!--Blank Space-->
                </div>

            </div>
            <!--End of Main Content-->
        </div>
    
    @include('component.js.main')
    @include('footer.main-footer')

</body>
