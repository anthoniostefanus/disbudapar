@extends('adminlte::page')
@section('title', 'Edit Ekraf')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Ekraf</h1>
@stop
@section('content')
    <form action="{{route('ekraf.update', $ekraf)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_usaha">Nama usaha</label>
                        <input type="text" class="form-control @error('Nama_Usaha') is-invalid @enderror" id="Nama_Usaha" placeholder="Nama Usaha" name="Nama_Usaha" value="{{$ekraf->Nama_Usaha ?? old('Nama_Usaha')}}">
                        @error('Nama_Usaha') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Tanggal_Mulai">Tanggal Mulai usaha</label>
                        <input type="date" class="form-control @error('Tanggal_Mulai') is-invalid @enderror" id="Tanggal_Mulai" placeholder="Tanggal Mulai Usaha" name="Tanggal_Mulai" value="{{$ekraf->Tanggal_Mulai ?? old('Tanggal_Mulai')}}">
                        @error('Tanggal_Mulai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nib">NIB</label>
                        <input type="text" class="form-control @error('nib') is-invalid @enderror" id="nib" placeholder="NIB" name="nib" value="{{$ekraf->nib ?? old('nib')}}">
                        @error('nib') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" placeholder="Alamat" name="Alamat" value="{{$ekraf->Alamat ?? old('Alamat')}}">
                        @error('Alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="No_Telepon">No telepon</label>
                        <input type="text" class="form-control @error('No_Telepon') is-invalid @enderror" id="No_Telepon" placeholder="No Telepon" name="No_Telepon" value="{{$ekraf->No_Telepon ?? old('No_Telepon')}}">
                        @error('No_Telepon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="subj_usaha">Subjek Usaha</label>
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
                    <div class="form-group">
                        <label for="desc">Deskripsi Usaha</label>
                        <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Deskripsi" name="desc" value="{{$ekraf->desc ?? old('desc')}}">
                        @error('desc') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="omset">Omset</label>
                        <input type="text" class="form-control @error('omset') is-invalid @enderror" id="omset" placeholder="Omset" name="omset" value="{{$ekraf->omset ?? old('omset')}}">
                        @error('omset') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="aset">Aset</label>
                        <input type="text" class="form-control @error('aset') is-invalid @enderror" id="aset" placeholder="Aset" name="aset" value="{{$ekraf->aset ?? old('aset')}}">
                        @error('aset') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alasan">Alasan</label>
                        <input type="text" class="form-control @error('alasan') is-invalid @enderror" id="alasan" placeholder="Alasan Mendaftar" name="alasan" value="{{$ekraf->alasan ?? old('alasan')}}">
                        @error('alasan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <input type="text" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" name="prestasi" value="{{$ekraf->prestasi ?? old('prestasi')}}">
                        @error('prestasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="berkas">Foto Usaha</label>
                        </br>
                        <input type="file" name="berkas">
                    </div>
                   </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('ekraf.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop