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
                    <div class="form-group">
                        <label for="judul_beritapariwisata">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata') is-invalid @enderror" id="judul_beritapariwisata" placeholder="Masukan judul_beritapariwisata" name="judul_beritapariwisata" value="{{old('judul_beritapariwisata')}}">
                        @error('judul_beritapariwisata') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata') is-invalid @enderror" id="isi_beritapariwisata" placeholder="Masukkan Isi Berita" name="isi_beritapariwisata" value="{{old('isi_beritapariwisata')}}">
                        @error('isi_beritapariwisata') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata">Linkpariwisata</label>
                        <input type="text" class="form-control @error('linkpariwisata') is-invalid @enderror" id="linkpariwisata" placeholder="Masukkan linkpariwisata Beritapariwisata" name="linkpariwisata" value="{{old('linkpariwisata')}}">
                        @error('linkpariwisata') <span class="text-danger">{{$message}}</span> @enderror
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