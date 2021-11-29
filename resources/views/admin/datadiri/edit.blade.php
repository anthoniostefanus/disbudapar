@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="exampleInputnik" placeholder="NIK" name="nik" value="{{$user->nik ?? old('nik')}}">
                        @error('nik') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Depan</label>
                        <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="exampleInputnama_depan" placeholder="Nama Depan" name="nama_depan" value="{{$user->nama_depan ?? old('nama_depan')}}">
                        @error('nama_depan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Belakang</label>
                        <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" id="exampleInputnama_belakang" placeholder="Nama Belakang" name="nama_belakang" value="{{$user->nama_belakang ?? old('nama_belakang')}}">
                        @error('nama_belakang') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="exampleInputtempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" value="{{$user->tempat_lahir ?? old('tempat_lahir')}}">
                        @error('tempat_lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="exampleInputtanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{$user->tanggal_lahir ?? old('tanggal_lahir')}}">
                        @error('tanggal_lahir') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputalamat" placeholder="Alamat" name="alamat" value="{{$user->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Kecamatan</label>
                        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="exampleInputkecamatan" placeholder="kecamatan" name="kecamatan" value="{{$user->kecamatan ?? old('kecamatan')}}">
                        @error('kecamatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">kelurahan</label>
                        <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" id="exampleInputkecamatan" placeholder="kelurahan" name="kelurahan" value="{{$user->kelurahan ?? old('kelurahan')}}">
                        @error('kelurahan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">RT</label>
                        <input type="text" class="form-control @error('rt') is-invalid @enderror" id="exampleInputkecamatan" placeholder="RT" name="rt" value="{{$user->rt ?? old('rt')}}">
                        @error('rt') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">RW</label>
                        <input type="text" class="form-control @error('rw') is-invalid @enderror" id="exampleInputkecamatan" placeholder="RW" name="rw" value="{{$user->rw ?? old('rw')}}">
                        @error('rw') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Agama</label>
                        <select id="agama" class="form-control @error('agama') is-invalid @enderror" name="agama" id="exampleInputagama" value="{{ old('agama') }}" required autocomplete="agama" value="{{$user->agama ?? old('agama')}}">
                            <option value="religion" disabled selected>Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="khatolik">Katholik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindhu</option>
                            <option value="konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Perkawinan</label>
                        <select id="kwn" class="form-control @error('kwn') is-invalid @enderror" name="kwn" value="{{ old('kwn') }}" required autocomplete="kwn" autofocus>
                            <option value="status" disabled selected>Status Perkawinan</option>
                            <option value="belumkawin">Belum Kawin</option>
                            <option value="kawin-nih">Kawin</option>
                            <option value="cerai-hidup">Cerai Hidup</option>
                            <option value="cerai-mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="exampleInputkecamatan" placeholder="pekerjaan" name="pekerjaan" value="{{$user->pekerjaan ?? old('pekerjaan')}}">
                        @error('pekerjaan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Kewarganegaraan</label>
                        <select id="warga" class="form-control @error('warga') is-invalid @enderror" name="warga" value="{{ old('warga') }}" required autocomplete="warga" autofocus>
                            <option value="kaween" disabled selected>Kewarganegaraan</option>
                            <option value="wni">WNI</option>
                            <option value="wna">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Foto KTP</label>
                        <label class="fieldlabels">Masukan Foto KTP: </label>
                        <input type="file" name="berkas">
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
@stop