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
                    <h4> Berita Salatiga 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga1">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga1') is-invalid @enderror" id="judul_beritasalatiga1" placeholder="Masukan judul_beritasalatiga1" name="judul_beritasalatiga1" value="{{old('judul_beritasalatiga1')}}">
                        @error('judul_beritasalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga1">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga1') is-invalid @enderror" id="isi_beritasalatiga1" placeholder="Masukkan Isi Berita" name="isi_beritasalatiga1" value="{{old('isi_beritasalatiga1')}}">
                        @error('isi_beritasalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga1">Linksalatiga1</label>
                        <input type="text" class="form-control @error('linksalatiga1') is-invalid @enderror" id="linksalatiga1" placeholder="Masukkan linksalatiga1 Beritasalatiga" name="linksalatiga1" value="{{old('linksalatiga1')}}">
                        @error('linksalatiga1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Salatiga 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga2">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga2') is-invalid @enderror" id="judul_beritasalatiga2" placeholder="Masukan judul_beritasalatiga2" name="judul_beritasalatiga2" value="{{old('judul_beritasalatiga2')}}">
                        @error('judul_beritasalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga2">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga2') is-invalid @enderror" id="isi_beritasalatiga2" placeholder="Masukkan Isi Berita" name="isi_beritasalatiga2" value="{{old('isi_beritasalatiga2')}}">
                        @error('isi_beritasalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga2">Linksalatiga2</label>
                        <input type="text" class="form-control @error('linksalatiga2') is-invalid @enderror" id="linksalatiga2" placeholder="Masukkan linksalatiga2 Beritasalatiga" name="linksalatiga2" value="{{old('linksalatiga2')}}">
                        @error('linksalatiga2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Salatiga 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritasalatiga3">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritasalatiga3') is-invalid @enderror" id="judul_beritasalatiga3" placeholder="Masukan judul_beritasalatiga3" name="judul_beritasalatiga3" value="{{old('judul_beritasalatiga3')}}">
                        @error('judul_beritasalatiga3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritasalatiga3">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritasalatiga3') is-invalid @enderror" id="isi_beritasalatiga3" placeholder="Masukkan Isi Berita" name="isi_beritasalatiga3" value="{{old('isi_beritasalatiga3')}}">
                        @error('isi_beritasalatiga3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linksalatiga3">Linksalatiga3</label>
                        <input type="text" class="form-control @error('linksalatiga3') is-invalid @enderror" id="linksalatiga3" placeholder="Masukkan linksalatiga3 Beritasalatiga" name="linksalatiga3" value="{{old('linksalatiga3')}}">
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