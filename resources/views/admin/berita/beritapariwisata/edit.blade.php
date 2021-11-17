@extends('adminlte::page')
@section('title', 'Edit Berita pariwisata')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Berita pariwisata</h1>
@stop
@section('content')
    <form action="{{route('beritapariwisata.update', $beritapariwisata)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4> Berita Pariwisata 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata1">Judul Berita_pariwisata</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata1') is-invalid @enderror" id="judul_beritapariwisata1" placeholder="Masukan Link Beritapariwisata" name="judul_beritapariwisata1" value="{{$beritapariwisata->judul_beritapariwisata1 ?? old('judul_beritapariwisata1')}}">
                        @error('judul_beritapariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata1">Isi Berita pariwisata</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata1') is-invalid @enderror" id="isi_beritapariwisata1" placeholder="Masukan Link Beritapariwisata" name="isi_beritapariwisata1" value="{{$beritapariwisata->isi_beritapariwisata1 ?? old('isi_beritapariwisata1')}}">
                        @error('isi_beritapariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata1">Link_pariwisata</label>
                        <input type="text" class="form-control @error('linkpariwisata1') is-invalid @enderror" id="linkpariwisata1" placeholder="Masukan Linkpariwisata1 Beritapariwisata" name="linkpariwisata1" value="{{$beritapariwisata->linkpariwisata1 ?? old('linkpariwisata1')}}">
                        @error('linkpariwisata1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Pariwisata 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata2">Judul Berita_pariwisata</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata2') is-invalid @enderror" id="judul_beritapariwisata2" placeholder="Masukan Link Beritapariwisata" name="judul_beritapariwisata2" value="{{$beritapariwisata->judul_beritapariwisata2 ?? old('judul_beritapariwisata2')}}">
                        @error('judul_beritapariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata2">Isi Berita pariwisata</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata2') is-invalid @enderror" id="isi_beritapariwisata2" placeholder="Masukan Link Beritapariwisata" name="isi_beritapariwisata2" value="{{$beritapariwisata->isi_beritapariwisata2 ?? old('isi_beritapariwisata2')}}">
                        @error('isi_beritapariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata2">Link_pariwisata</label>
                        <input type="text" class="form-control @error('linkpariwisata2') is-invalid @enderror" id="linkpariwisata2" placeholder="Masukan Linkpariwisata2 Beritapariwisata" name="linkpariwisata2" value="{{$beritapariwisata->linkpariwisata2 ?? old('linkpariwisata2')}}">
                        @error('linkpariwisata2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Pariwisata 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritapariwisata3">Judul Berita_pariwisata</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata3') is-invalid @enderror" id="judul_beritapariwisata3" placeholder="Masukan Link Beritapariwisata" name="judul_beritapariwisata3" value="{{$beritapariwisata->judul_beritapariwisata3 ?? old('judul_beritapariwisata3')}}">
                        @error('judul_beritapariwisata3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata3">Isi Berita pariwisata</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata3') is-invalid @enderror" id="isi_beritapariwisata3" placeholder="Masukan Link Beritapariwisata" name="isi_beritapariwisata3" value="{{$beritapariwisata->isi_beritapariwisata3 ?? old('isi_beritapariwisata3')}}">
                        @error('isi_beritapariwisata3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata3">Link_pariwisata</label>
                        <input type="text" class="form-control @error('linkpariwisata3') is-invalid @enderror" id="linkpariwisata3" placeholder="Masukan Linkpariwisata3 Beritapariwisata" name="linkpariwisata3" value="{{$beritapariwisata->linkpariwisata3 ?? old('linkpariwisata3')}}">
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