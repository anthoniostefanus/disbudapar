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
                    <h4> Berita Salatiga 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga1">Judul Berita_salatiga</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga1') is-invalid @enderror" id="judul_beritasalatiga1" placeholder="Masukan Link Beritasalatiga" name="judul_beritasalatiga1" value="{{$beritasalatiga->judul_beritasalatiga1 ?? old('judul_beritasalatiga1')}}">
                        @error('judul_beritasalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga1">Isi Berita salatiga</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga1') is-invalid @enderror" id="isi_beritasalatiga1" placeholder="Masukan Link Beritasalatiga" name="isi_beritasalatiga1" value="{{$beritasalatiga->isi_beritasalatiga1 ?? old('isi_beritasalatiga1')}}">
                        @error('isi_beritasalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga1">Link_salatiga</label>
                        <input type="text" class="form-control @error('linksalatiga1') is-invalid @enderror" id="linksalatiga1" placeholder="Masukan Linksalatiga1 Beritasalatiga" name="linksalatiga1" value="{{$beritasalatiga->linksalatiga1 ?? old('linksalatiga1')}}">
                        @error('linksalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Salatiga 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga2">Judul Berita_salatiga</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga2') is-invalid @enderror" id="judul_beritasalatiga2" placeholder="Masukan Link Beritasalatiga" name="judul_beritasalatiga2" value="{{$beritasalatiga->judul_beritasalatiga2 ?? old('judul_beritasalatiga2')}}">
                        @error('judul_beritasalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga2">Isi Berita salatiga</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga2') is-invalid @enderror" id="isi_beritasalatiga2" placeholder="Masukan Link Beritasalatiga" name="isi_beritasalatiga2" value="{{$beritasalatiga->isi_beritasalatiga2 ?? old('isi_beritasalatiga2')}}">
                        @error('isi_beritasalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga2">Link_salatiga</label>
                        <input type="text" class="form-control @error('linksalatiga2') is-invalid @enderror" id="linksalatiga2" placeholder="Masukan Linksalatiga2 Beritasalatiga" name="linksalatiga2" value="{{$beritasalatiga->linksalatiga2 ?? old('linksalatiga2')}}">
                        @error('linksalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Salatiga 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga3">Judul Berita_salatiga</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga3') is-invalid @enderror" id="judul_beritasalatiga3" placeholder="Masukan Link Beritasalatiga" name="judul_beritasalatiga3" value="{{$beritasalatiga->judul_beritasalatiga3 ?? old('judul_beritasalatiga3')}}">
                        @error('judul_beritasalatiga3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga3">Isi Berita salatiga</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga3') is-invalid @enderror" id="isi_beritasalatiga3" placeholder="Masukan Link Beritasalatiga" name="isi_beritasalatiga3" value="{{$beritasalatiga->isi_beritasalatiga3 ?? old('isi_beritasalatiga3')}}">
                        @error('isi_beritasalatiga3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga3">Link_salatiga</label>
                        <input type="text" class="form-control @error('linksalatiga3') is-invalid @enderror" id="linksalatiga3" placeholder="Masukan Linksalatiga3 Beritasalatiga" name="linksalatiga3" value="{{$beritasalatiga->linksalatiga3 ?? old('linksalatiga3')}}">
                        @error('linksalatiga3') <span class="text-danger">{{$message}}</span> @enderror
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