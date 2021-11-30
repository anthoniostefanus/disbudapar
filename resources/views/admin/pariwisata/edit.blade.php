@extends('adminlte::page')
@section('title', 'Edit Pariwisata')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Pariwisata</h1>
@stop
@section('content')
    <form action="{{route('pariwisata.update', $pariwisata)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="Nama_Usaha">Nama usaha</label>
                        <input type="text" class="form-control @error('Nama_Usaha') is-invalid @enderror" id="Nama_Usaha" placeholder="Nama Usaha" name="Nama_Usaha" value="{{$pariwisata->Nama_Usaha ?? old('Nama_Usaha')}}">
                        @error('Nama_Usaha') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Tanggal_Mulai">Tanggal Berdiri</label>
                        <input type="date" class="form-control @error('Tanggal_Mulai') is-invalid @enderror" id="Tanggal_Mulai" placeholder="Tanggal Mulai Usaha" name="Tanggal_Mulai" value="{{$pariwisata->Tanggal_Mulai ?? old('Tanggal_Mulai')}}">
                        @error('Tanggal_Mulai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nib">NIB</label>
                        <input type="text" class="form-control @error('nib') is-invalid @enderror" id="nib" placeholder="NIB" name="nib" value="{{$pariwisata->nib ?? old('nib')}}">
                        @error('nib') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" placeholder="Alamat" name="Alamat" value="{{$pariwisata->Alamat ?? old('Alamat')}}">
                        @error('Alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="No_Telepon">No telepon</label>
                        <input type="text" class="form-control @error('No_Telepon') is-invalid @enderror" id="No_Telepon" placeholder="No Telepon" name="No_Telepon" value="{{$pariwisata->No_Telepon ?? old('No_Telepon')}}">
                        @error('No_Telepon') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi Usaha</label>
                        <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" placeholder="Deskripsi" name="desc" value="{{$pariwisata->desc ?? old('desc')}}">
                        @error('desc') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="omset">Omset</label>
                        <input type="text" class="form-control @error('omset') is-invalid @enderror" id="omset" placeholder="Omset" name="omset" value="{{$pariwisata->omset ?? old('omset')}}">
                        @error('omset') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="aset">Aset</label>
                        <input type="text" class="form-control @error('aset') is-invalid @enderror" id="aset" placeholder="Aset" name="aset" value="{{$pariwisata->aset ?? old('aset')}}">
                        @error('aset') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alasan">Alasan</label>
                        <input type="text" class="form-control @error('alasan') is-invalid @enderror" id="alasan" placeholder="Alasan Mendaftar" name="alasan" value="{{$pariwisata->alasan ?? old('alasan')}}">
                        @error('alasan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <input type="text" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" placeholder="Prestasi" name="prestasi" value="{{$pariwisata->prestasi ?? old('prestasi')}}">
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
                    <a href="{{route('pariwisata.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop