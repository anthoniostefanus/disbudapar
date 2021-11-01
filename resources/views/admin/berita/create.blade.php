@extends('adminlte::page')
@section('title', 'Tambah Berita')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berita</h1>
@stop
@section('content')
    <form action="{{route('berita.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" id="judul_berita" placeholder="Masukan Judul Berita" name="judul_berita" value="{{old('judul_berita')}}">
                        @error('judul_berita') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_berita">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_berita') is-invalid @enderror" id="isi_berita" placeholder="Masukkan Isi Berita" name="isi_berita" value="{{old('isi_berita')}}">
                        @error('isi_berita') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Masukkan link Berita" name="link" value="{{old('link')}}">
                        @error('link') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('berita.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop