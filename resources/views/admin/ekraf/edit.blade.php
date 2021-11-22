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
                        <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror" id="nama_usaha" placeholder="Nama Usaha" name="nama_usaha" value="{{$ekraf->nama_usaha ?? old('nama_usaha')}}">
                        @error('nama_usaha') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai usaha</label>
                        <input type="date" class="form-control @error('tgl_mulai') is-invalid @enderror" id="tgl_mulai" placeholder="Tanggal Mulai Usaha" name="tgl_mulai" value="{{$ekraf->tgl_mulai ?? old('tgl_mulai')}}">
                        @error('tgl_mulai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_nib">NIB</label>
                        <input type="text" class="form-control @error('nomor_nib') is-invalid @enderror" id="nomor_nib" placeholder="NIB" name="nomor_nib" value="{{$ekraf->nomor_nib ?? old('nomor_nib')}}">
                        @error('nomor_nib') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat" name="address" value="{{$ekraf->address ?? old('address')}}">
                        @error('address') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_te">No telepon</label>
                        <input type="text" class="form-control @error('no_te') is-invalid @enderror" id="no_te" placeholder="No Telepon" name="no_te" value="{{$ekraf->no_te ?? old('no_te')}}">
                        @error('no_te') <span class="text-danger">{{$message}}</span> @enderror
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