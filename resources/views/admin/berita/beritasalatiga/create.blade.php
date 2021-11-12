@extends('adminlte::page')
@section('title', 'Tambah Berita salatiga')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berita salatiga</h1>
@stop
@section('content')
    <form action="{{route('beritasalatiga.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_beritasalatiga">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga') is-invalid @enderror" id="judul_beritasalatiga" placeholder="Masukan judul_beritasalatiga" name="judul_beritasalatiga" value="{{old('judul_beritasalatiga')}}">
                        @error('judul_beritasalatiga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga') is-invalid @enderror" id="isi_beritasalatiga" placeholder="Masukkan Isi Berita" name="isi_beritasalatiga" value="{{old('isi_beritasalatiga')}}">
                        @error('isi_beritasalatiga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga">Linksalatiga</label>
                        <input type="text" class="form-control @error('linksalatiga') is-invalid @enderror" id="linksalatiga" placeholder="Masukkan linksalatiga Beritasalatiga" name="linksalatiga" value="{{old('linksalatiga')}}">
                        @error('linksalatiga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('beritasalatiga.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop