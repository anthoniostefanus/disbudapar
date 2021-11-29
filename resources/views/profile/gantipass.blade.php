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
            <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <div class="form-group">
                        <label for="level">Level</label>
                        <select name="level" class="form-control @error('level') is-invalid @enderror">
                            @error('level') <span class="text-danger">{{$message}}</span> @enderror>
                            <option {{ ($user->level) == 'User' ? "selected" : ""}} value="User">User</option>
                            <option {{ ($user->level) == 'Admin' ? "selected" : ""}} value="Admin">Admin</option>
                            <option {{ ($user->level) == 'Bri' ? "selected" : ""}} value="Bri">Bri</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{$user->name ?? old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">No telepon</label>
                        <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="exampleInputNo_tlp" placeholder="No Telepon" name="no_tlp" value="{{$user->no_tlp ?? old('no_tlp')}}">
                        @error('no_tlp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$user->email ?? old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
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
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
    </form>

        </div>
    </div>
</div>

@include('footer.footer')