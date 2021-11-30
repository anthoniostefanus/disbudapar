<link rel="stylesheet" type="text/css" href="{{ asset('/css/pinjaman-kur-bri.css') }}">
<title>Pinjaman KUR</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

<div class="container kur-formulir">
    <div class="row row-cover">
        <div class="col-md-5 backdrop">
            <!--Isi disini ya mas buat sebelah kirinya-->
        </div>

        <div class="col-md-7 data-diri-kur">
        <form action="{{route('pinjaman-kur.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                <div class="row input-data-kur">
                    <div class="col-md-12">
                        <h1>Pinjaman KUR</h1>
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-12 data-kur">
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus placeholder="Nama lengkap">
                    @error('nama_lengkap')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-6 data-kur">
                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="NIK">
                    @error('nik')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-6 data-kur">
                    <input id="No_Telepon" type="text" class="form-control @error('No_Telepon') is-invalid @enderror" name="No_Telepon" value="{{ old('No_Telepon') }}" required autocomplete="No_Telepon" autofocus placeholder="No Telepon">
                    @error('No_Telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-4 data-kur">
                    <input id="Kelurahan" type="text" class="form-control @error('Kelurahan') is-invalid @enderror" name="Kelurahan" value="{{ old('Kelurahan') }}" required autocomplete="Kelurahan" autofocus placeholder="Kelurahan">
                    @error('Kelurahan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-4 data-kur">
                    <input id="Kecamatan" type="text" class="form-control @error('Kecamatan') is-invalid @enderror" name="Kecamatan" value="{{ old('Kecamatan') }}" required autocomplete="Kecamatan" autofocus placeholder="Kecamatan">
                    @error('Kecamatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-2 data-kur">
                    <input id="rt" type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" value="{{ old('rt') }}" required autocomplete="rt" autofocus placeholder="RT">
                    @error('rt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="col-2 data-kur">
                    <input id="rw" type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" value="{{ old('rw') }}" required autocomplete="rw" autofocus placeholder="RW">
                    @error('rw')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-12 data-kur">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Alamat Rumah">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                    @enderror
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-4 data-kur">
                        <p>Masukan KTP</p>
                    </div>

                    <div class="col-md-1 data-kur">
                        <p>:</p>
                    </div>

                    <div class="col-md-7 data-kur">
                    <input type="file" name="berkas_ktp">
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-4 data-kur">
                        <p>Masukan KTP Pasangan</p>
                    </div>

                    <div class="col-md-1 data-kur">
                        <p>:</p>
                    </div>

                    <div class="col-md-7 data-kur">
                    <input type="file" name="berkas_ktp_pasangan">
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-12 data-kur">
                    <input id="jumlah_pinjaman" type="text" class="form-control @error('jumlah_pinjaman') is-invalid @enderror" name="jumlah_pinjaman" value="{{ old('jumlah_pinjaman') }}" required autocomplete="jumlah_pinjaman" autofocus placeholder="Masukan Jumlah Pinjaman">
                        @error('jumlah_pinjaman')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                    @enderror
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-12 data-kur">
                    <h2>Apakah anda sedang ada pinjaman di bank?</h2>
                     <div class="col-4 data-kur">
                        <select id="pinjaman" class="form-control @error('pinjaman') is-invalid @enderror" name="pinjaman" value="{{ old('pinjaman') }}" required autocomplete="pinjaman" autofocus>
                        <option value="" disabled selected>Pilih YA atau TIDAK</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    </div>
                    </div>
                </div>

                <div class="row input-data-kur">
                    <div class="col-md-12 data-kur">
                        <h2>Dengan ini saya bersedia disurvey oleh pihak bank</h2>
                        <div class="col-4 data-kur">
                        <select id="survei" class="form-control @error('survei') is-invalid @enderror" name="survei" value="{{ old('survei') }}" required autocomplete="survei" autofocus>
                        <option value="" disabled selected>Pilih YA atau TIDAK</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    </div>
                    </div>
                </div>
                <div class="col-md-8">
                <button type="submit" class="btn btn-primary">
                Daftar
                </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('footer.main-footer')