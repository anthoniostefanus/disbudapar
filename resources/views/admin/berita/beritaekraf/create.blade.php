@extends('adminlte::page')
@section('title', 'Tambah Berita Ekraf')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Berita ekraf</h1>
@stop
@section('content')
    <form action="{{route('beritaekraf.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_beritaekraf">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritaekraf') is-invalid @enderror" id="judul_beritaekraf" placeholder="Masukan judul_beritaekraf" name="judul_beritaekraf" value="{{old('judul_beritaekraf')}}">
                        @error('judul_beritaekraf') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritaekraf') is-invalid @enderror" id="isi_beritaekraf" placeholder="Masukkan Isi Berita" name="isi_beritaekraf" value="{{old('isi_beritaekraf')}}">
                        @error('isi_beritaekraf') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf">Linkekraf</label>
                        <input type="text" class="form-control @error('linkekraf') is-invalid @enderror" id="linkekraf" placeholder="Masukkan linkekraf Beritaekraf" name="linkekraf" value="{{old('linkekraf')}}">
                        @error('linkekraf') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('beritaekraf.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop