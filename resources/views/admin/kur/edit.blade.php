@extends('adminlte::page')
@section('title', 'Edit Kredit Usaha rakyat')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Kredit Usaha Rakyat</h1>
@stop
@section('content')
    <form action="{{route('kur.update', $kur)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="{{$kur->nama_lengkap ?? old('nama_lengkap')}}">
                        @error('nama_lengkap') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Nama Lengkap" name="nik" value="{{$kur->nik ?? old('nik')}}">
                        @error('nik') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="No_Telepon">No Telepon</label>
                        <input type="text" class="form-control @error('No_Telepon') is-invalid @enderror" id="No_Telepon" placeholder="Nama Lengkap" name="No_Telepon" value="{{$kur->No_Telepon ?? old('No_Telepon')}}">
                        @error('No_Telepon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Kelurahan">Kelurahan</label>
                        <input type="text" class="form-control @error('Kelurahan') is-invalid @enderror" id="Kelurahan" placeholder="Nama Lengkap" name="Kelurahan" value="{{$kur->Kelurahan ?? old('Kelurahan')}}">
                        @error('Kelurahan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Kecamatan">Kecamatan</label>
                        <input type="text" class="form-control @error('Kecamatan') is-invalid @enderror" id="Kecamatan" placeholder="Nama Lengkap" name="Kecamatan" value="{{$kur->Kecamatan ?? old('Kecamatan')}}">
                        @error('Kecamatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" placeholder="Nama Lengkap" name="rt" value="{{$kur->rt ?? old('rt')}}">
                        @error('rt') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" placeholder="Nama Lengkap" name="rw" value="{{$kur->rw ?? old('rw')}}">
                        @error('rw') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Nama Lengkap" name="address" value="{{$kur->address ?? old('address')}}">
                        @error('address') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="berkas">Foto Ktp</label>
                        </br>
                        <input type="file" name="berkas_ktp">
                    </div>
                    <div class="form-group">
                        <label for="berkas">Foto Ktp Pasangan</label>
                        </br>
                        <input type="file" name="berkas_ktp_pasangan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                        <input type="text" class="form-control @error('jumlah_pinjaman') is-invalid @enderror" id="jumlah_pinjaman" placeholder="Nama Lengkap" name="jumlah_pinjaman" value="{{$kur->jumlah_pinjaman ?? old('jumlah_pinjaman')}}">
                        @error('jumlah_pinjaman') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <label for="pinjaman">Pinjaman</label>
                    <select id="pinjaman" class="form-control @error('pinjaman') is-invalid @enderror" name="pinjaman" value="{{ old('pinjaman') }}" required autocomplete="pinjaman" autofocus>
                        <option value="" disabled selected>Pilih YA atau TIDAK</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <label for="survei">Survei </label>
                    <select id="survei" class="form-control @error('survei') is-invalid @enderror" name="survei" value="{{ old('survei') }}" required autocomplete="survei" autofocus>
                        <option value="" disabled selected>Pilih YA atau TIDAK</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                   </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pariwisata.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop