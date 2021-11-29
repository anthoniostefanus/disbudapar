        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/regis-ek.css') }}">
        <title>Daftar Ekonomi Kreatif | Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        @include('headline-blue.headline-blue')
        @include('navigation bar.main-navigation')

    <body>
        <div class="container main-container">
            <div class="row banner-ekraf">
                <div class="col-md-12 banner-title">
                    <!--Header Container // Orange-->
                    <h1 class="title-head">Pendaftaran<br>Ekonomi Kreatif<br></h1>    
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
                            <form action="{{route('formulirekraf.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                      
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Nama Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="Nama_Usaha" type="text" class="form-control @error('Nama_Usaha') is-invalid @enderror" name="Nama_Usaha" value="{{ old('Nama_Usaha') }}" required autocomplete="Nama_Usaha" autofocus placeholder="Nama Usaha">
                                            @error('Nama_Usaha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Tanggal Berdiri</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="Tanggal_Mulai" type="date" class="form-control @error('Tanggal_Mulai') is-invalid @enderror" name="Tanggal_Mulai" value="{{ old('Tanggal_Mulai') }}" required autocomplete="Tanggal_Mulai" autofocus placeholder="Tanggal Mulai Usaha">
                                            @error('Tanggal_Mulai')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>NIB</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="nib" type="text" class="form-control @error('nib') is-invalid @enderror" name="nib" value="{{ old('nib') }}" required autocomplete="nib" autofocus placeholder="NIB">
                                            @error('nib')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Alamat Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="Alamat" type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" value="{{ old('Alamat') }}" required autocomplete="Alamat" autofocus placeholder="Alamat Usaha">
                                            @error('Alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Nomor Telepon</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="No_Telepon" type="text" class="form-control @error('No_Telepon') is-invalid @enderror" name="No_Telepon" value="{{ old('No_Telepon') }}" required autocomplete="No_Telepon" autofocus placeholder="No Telepone">
                                            @error('No_Telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Subjektor Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <select id="subj_usaha" class="form-control @error('subj_usaha') is-invalid @enderror" name="subj_usaha" value="{{ old('subj_usaha') }}" required autocomplete="subj_usaha" autofocus>
                                                <option value="" disabled selected>Subjektor Usaha</option>
                                                <option value="Aplikasi">Aplikasi</option>
                                                <option value="Arsitektur">Arsitektur</option>
                                                <option value="Desain Interior">Desain Interior</option>
                                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                                <option value="Desain Produk">Desain Produk</option>
                                                <option value="Fashion">Fashion/Pakaian</option>
                                                <option value="Film dan Animasi">Film dan Animasi</option>
                                                <option value="Fotografi">Fotografi</option>
                                                <option value="Game">Game</option>
                                                <option value="Iklan">Iklan</option>
                                                <option value="Kuliner">Kuliner</option>
                                                <option value="Penerbitan">Penerbitan</option>
                                                <option value="Seni-Kriya">Seni Kria</option>
                                                <option value="Seni Musik">Seni Musik</option>
                                                <option value="Seni Pertunjukan">Seni Pertunjukan</option>
                                                <option value="Seni Rupa">Seni Rupa</option>
                                                <option value="TV dan Radio">Tv dan Radio</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Deskripsi Produk</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <textarea id="desc" class="desc-proc" placeholder="Deskripsi Produk" type="text" name="desc" rows="7" cols="50"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Omset</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="omset" type="text" class="form-control @error('omset') is-invalid @enderror" name="omset" value="{{ old('omset') }}" required autocomplete="omset" autofocus placeholder="Omset">
                                            @error('omset')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Aset</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="aset" type="text" class="form-control @error('aset') is-invalid @enderror" name="aset" value="{{ old('aset') }}" required autocomplete="aset" autofocus placeholder="Aset">
                                            @error('aset')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Alasan Mendaftar</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="alasan" type="text" class="form-control @error('alasan') is-invalid @enderror" name="alasan" value="{{ old('alasan') }}" required autocomplete="alasan" autofocus placeholder="Alasan Mendaftar">
                                            @error('alasan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Prestasi Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                                <input id="prestasi" type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi" value="{{ old('prestasi') }}" required autocomplete="prestasi" autofocus placeholder="Prestasi Usaha (jika tidak ada ketik tidak)">
                                            @error('prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Unggah Foto Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                            <input type="file" name="berkas">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <!--Blank Area-->
                                            </div>

                                            <div class="col-md-1">
                                                <!--Blank Area-->
                                            </div>

                                            <div class="col-md-8">
                                            <button type="submit" class="btn btn-primary">
                                                    Registrasi
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