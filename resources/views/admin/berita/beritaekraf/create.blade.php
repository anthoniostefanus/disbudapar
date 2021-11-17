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
                    <h4> Berita Ekraf 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf1">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritaekraf1') is-invalid @enderror" id="judul_beritaekraf1" placeholder="Masukan judul berita ekraf 1" name="judul_beritaekraf1" value="{{old('judul_beritaekraf1')}}">
                        @error('judul_beritaekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf1">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritaekraf1') is-invalid @enderror" id="isi_beritaekraf1" placeholder="Masukkan Isi Berita" name="isi_beritaekraf1" value="{{old('isi_beritaekraf1')}}">
                        @error('isi_beritaekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf1">Linkekraf1</label>
                        <input type="text" class="form-control @error('linkekraf1') is-invalid @enderror" id="linkekraf1" placeholder="Masukkan linkekraf1 Beritaekraf" name="linkekraf1" value="{{old('linkekraf1')}}">
                        @error('linkekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Ekraf 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf2">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritaekraf2') is-invalid @enderror" id="judul_beritaekraf2" placeholder="Masukan judul_beritaekraf2" name="judul_beritaekraf2" value="{{old('judul_beritaekraf2')}}">
                        @error('judul_beritaekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf2">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritaekraf2') is-invalid @enderror" id="isi_beritaekraf2" placeholder="Masukkan Isi Berita" name="isi_beritaekraf2" value="{{old('isi_beritaekraf2')}}">
                        @error('isi_beritaekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf2">Linkekraf2</label>
                        <input type="text" class="form-control @error('linkekraf2') is-invalid @enderror" id="linkekraf2" placeholder="Masukkan linkekraf2 Beritaekraf" name="linkekraf2" value="{{old('linkekraf2')}}">
                        @error('linkekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Ekraf 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf3">Judul Berita</label>
                        <input type="text" class="form-control @error('judul_beritaekraf3') is-invalid @enderror" id="judul_beritaekraf3" placeholder="Masukan judul_beritaekraf3" name="judul_beritaekraf3" value="{{old('judul_beritaekraf3')}}">
                        @error('judul_beritaekraf3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf3">Isi Berita</label>
                        <input type="text" class="form-control @error('isi_beritaekraf3') is-invalid @enderror" id="isi_beritaekraf3" placeholder="Masukkan Isi Berita" name="isi_beritaekraf3" value="{{old('isi_beritaekraf3')}}">
                        @error('isi_beritaekraf3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf3">Linkekraf3</label>
                        <input type="text" class="form-control @error('linkekraf3') is-invalid @enderror" id="linkekraf3" placeholder="Masukkan linkekraf3 Beritaekraf" name="linkekraf3" value="{{old('linkekraf3')}}">
                        @error('linkekraf3') <span class="text-danger">{{$message}}</span> @enderror
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