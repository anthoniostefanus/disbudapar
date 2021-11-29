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
            <form action="{{route('profile.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</br>

        </div>
    </div>
</div>

@include('footer.footer')