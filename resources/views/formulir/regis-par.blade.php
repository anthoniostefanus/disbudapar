        <link rel="stylesheet" type="text/css" href="{{ asset('/css/regis-ek.css') }}">
        <title>Daftar Pariwisata | Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        @include('headline-blue.headline-blue')
        @include('navigation bar.main-navigation')

    <body>
        <div class="container main-container">
            <div class="row banner-ekraf">
                <div class="col-md-12 banner-title">
                    <!--Header Container // Orange-->
                    <h1 class="title-head">Pendaftaran<br>Pariwisata<br></h1>    
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
                            <form action="{{route('formulirpariwisata.store')}}" method="post" enctype="multipart/form-data">
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
                                            <input id="Tanggal_Mulai" type="date" class="form-control @error('nama-usaha') is-invalid @enderror" name="Tanggal_Mulai" value="{{ old('Tanggal_Mulai') }}" required autocomplete="Tanggal_Mulai" autofocus placeholder="Tanggal Mulai Usaha">
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
                                            <input id="nib" type="text" class="form-control @error('no-nib') is-invalid @enderror" name="nib" value="{{ old('nib') }}" required autocomplete="nib" autofocus placeholder="NIB">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    @include('footer.footer')    

</body>
