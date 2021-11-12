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
                    <div class="form-group">
                        <label for="judul_beritapariwisata">Judul Berita_pariwisata</label>
                        <input type="text" class="form-control @error('judul_beritapariwisata') is-invalid @enderror" id="judul_beritapariwisata" placeholder="Masukan Link Beritapariwisata" name="judul_beritapariwisata" value="{{$beritapariwisata->judul_beritapariwisata ?? old('judul_beritapariwisata')}}">
                        @error('judul_beritapariwisata') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritapariwisata">Isi Berita pariwisata</label>
                        <input type="text" class="form-control @error('isi_beritapariwisata') is-invalid @enderror" id="isi_beritapariwisata" placeholder="Masukan Link Beritapariwisata" name="isi_beritapariwisata" value="{{$beritapariwisata->isi_beritapariwisata ?? old('isi_beritapariwisata')}}">
                        @error('isi_beritapariwisata') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpariwisata">Link_pariwisata</label>
                        <input type="text" class="form-control @error('linkpariwisata') is-invalid @enderror" id="linkpariwisata" placeholder="Masukan Linkpariwisata Beritapariwisata" name="linkpariwisata" value="{{$beritapariwisata->linkpariwisata ?? old('linkpariwisata')}}">
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