@extends('adminlte::page')
@section('title', 'Tambah Berita pariwisata')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berita pariwisata</h1>
@stop
@section('content')
    <form action="{{route('beritapariwisata.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4> Berita Pariwisata 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata1">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata1') is-invalid @enderror" id="judul_beritapariwisata1" placeholder="Masukan judul_beritapariwisata1" name="judul_beritapariwisata1" value="{{old('judul_beritapariwisata1')}}">
                        @error('judul_beritapariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata1">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata1') is-invalid @enderror" id="isi_beritapariwisata1" placeholder="Masukkan Isi Berita" name="isi_beritapariwisata1" value="{{old('isi_beritapariwisata1')}}">
                        @error('isi_beritapariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata1">Linkpariwisata1</label>
                        <input type="text" class="form-control @error('linkpariwisata1') is-invalid @enderror" id="linkpariwisata1" placeholder="Masukkan linkpariwisata1 Beritapariwisata" name="linkpariwisata1" value="{{old('linkpariwisata1')}}">
                        @error('linkpariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Pariwisata 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata2">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata2') is-invalid @enderror" id="judul_beritapariwisata2" placeholder="Masukan judul_beritapariwisata2" name="judul_beritapariwisata2" value="{{old('judul_beritapariwisata2')}}">
                        @error('judul_beritapariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata2">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata2') is-invalid @enderror" id="isi_beritapariwisata2" placeholder="Masukkan Isi Berita" name="isi_beritapariwisata2" value="{{old('isi_beritapariwisata2')}}">
                        @error('isi_beritapariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata2">Linkpariwisata2</label>
                        <input type="text" class="form-control @error('linkpariwisata2') is-invalid @enderror" id="linkpariwisata2" placeholder="Masukkan linkpariwisata2 Beritapariwisata" name="linkpariwisata2" value="{{old('linkpariwisata2')}}">
                        @error('linkpariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Pariwisata 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata3">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata3') is-invalid @enderror" id="judul_beritapariwisata3" placeholder="Masukan judul_beritapariwisata3" name="judul_beritapariwisata3" value="{{old('judul_beritapariwisata3')}}">
                        @error('judul_beritapariwisata3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata3">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata3') is-invalid @enderror" id="isi_beritapariwisata3" placeholder="Masukkan Isi Berita" name="isi_beritapariwisata3" value="{{old('isi_beritapariwisata3')}}">
                        @error('isi_beritapariwisata3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata3">Linkpariwisata3</label>
                        <input type="text" class="form-control @error('linkpariwisata3') is-invalid @enderror" id="linkpariwisata3" placeholder="Masukkan linkpariwisata3 Beritapariwisata" name="linkpariwisata3" value="{{old('linkpariwisata3')}}">
                        @error('linkpariwisata3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('beritapariwisata.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop