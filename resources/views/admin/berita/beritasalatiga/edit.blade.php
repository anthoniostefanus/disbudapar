@extends('adminlte::page')
@section('title', 'Edit Berita salatiga')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Berita salatiga</h1>
@stop
@section('content')
    <form action="{{route('beritasalatiga.update', $beritasalatiga)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_beritasalatiga">Judul Berita_salatiga</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga') is-invalid @enderror" id="judul_beritasalatiga" placeholder="Masukan Link Beritasalatiga" name="judul_beritasalatiga" value="{{$beritasalatiga->judul_beritasalatiga ?? old('judul_beritasalatiga')}}">
                        @error('judul_beritasalatiga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga">Isi Berita salatiga</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga') is-invalid @enderror" id="isi_beritasalatiga" placeholder="Masukan Link Beritasalatiga" name="isi_beritasalatiga" value="{{$beritasalatiga->isi_beritasalatiga ?? old('isi_beritasalatiga')}}">
                        @error('isi_beritasalatiga') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga">Link_salatiga</label>
                        <input type="text" class="form-control @error('linksalatiga') is-invalid @enderror" id="linksalatiga" placeholder="Masukan Linksalatiga Beritasalatiga" name="linksalatiga" value="{{$beritasalatiga->linksalatiga ?? old('linksalatiga')}}">
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