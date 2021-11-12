<DOCTYPE! html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/pinjaman.css') }}">
        <title>Pinjaman Dana KUR | Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <!--Main Form-->
                <div class="col-md-8 main-form-kur">
                    <form method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>Profil Anda</h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Nama Lengkap</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="nama-legkap" class="full-name" type="text" placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>NIK</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="nik-ktp" class="full-nik" type="text" placeholder="Nomor Induk Kependudukan">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>No Telepon</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="nomor-call" class="telpun" type="text" placeholder="Nomor Telepon">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Alamat</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-4">
                                    <input id="alamat-lengkap" class="full-addr" type="text" placeholder="Alamat Lengkap">
                                </div>

                                <div class="col-md-2">
                                    <input id="rt-addr" class="nort-addr" type="text" placeholder="RT">
                                </div>

                                <div class="col-md-2">
                                    <input id="rw-addr" class="norw-addr" type="text" placeholder="RW">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label><!--Blank Space--></label>
                                </div>

                                <div class="col-md-1">
                                    <label><!--Blank Space--></label>
                                </div>

                                <div class="col-md-3">
                                    <select name="city" class="city-user" required>
                                        <option value="" disabled selected>Kota</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <select name="Kecamatan" class="land-user" required>
                                        <option value="" disabled selected>Kecamatan</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <select name="vil-age" class="village-user" required>
                                        <option value="" disabled selected>Kelurahan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Unggah Foto KTP</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="e-ktp" class="pri-ktp" type="file" accept=".jpg,.gif,.png" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>Unggah Foto KTP Suami/Istri</label>
                                </div>

                                <div class="col-md-1">
                                    <label>:</label>
                                </div>

                                <div class="col-md-8">
                                    <input id="e-ktp2" class="pri-ktp2" type="file" accept=".jpg,.gif,.png" >
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <!--End of Main Form-->

                <div class="col-md-4">
                    <h1>Bantuan Permodalan</h1>
                    <button>Berikutnya</button>
                </div>
            </div>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    </body>
</html>