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
                                <form method="POST">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Nama Usaha</label>
                                            </div>

                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>

                                            <div class="col-md-8">
                                            <input id="nama-usaha" type="text" class="form-control @error('nama-usaha') is-invalid @enderror" name="nama-usaha" value="{{ old('nama-usaha') }}" required autocomplete="nama-usaha" autofocus placeholder="Nama Usaha">
                                            @error('nama-usaha')
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
                                                <input id="tgl-mulai" class="tanggalan" placeholder="Nama Usaha" type="date">
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
                                                <input id="nomor-nib" class="nib" placeholder="Nomor Ijin Berusaha" type="text">
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
                                                <input id="address" class="addr-usaha" placeholder="Alamat Usaha" type="text">
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
                                                <input id="no-te" class="nomor-telepon" placeholder="Nomor Telepon" type="text">
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
                                                <textarea id="desc" class="desc-proc" placeholder="Deskripsi Produk" type="text" rows="7" cols="50"></textarea>
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
                                                <input id="omset" class="dapet-brp" placeholder="Omset" type="text">
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
                                                <input id="aset" class="harta" placeholder="Aset" type="text">
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
                                                <textarea id="reason" class="alasan" placeholder="Alasan Mendaftar" type="text" rows="7" cols="50"></textarea>
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
                                                <input id="prestasi" class="proficiat" placeholder="Prestasi Usaha" type="text">
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
                                                <input id="foto" class="photo" placeholder="Foto" type="file" accept=".jpg,.gif,.png" >
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
                                                <button type="button" id="submit" class="daftar">
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
