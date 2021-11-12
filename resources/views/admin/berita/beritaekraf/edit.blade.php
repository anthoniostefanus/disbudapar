@extends('adminlte::page')
@section('title', 'Edit Berita Ekraf')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Berita Ekraf</h1>
@stop
@section('content')
    <form action="{{route('beritaekraf.update', $beritaekraf)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_beritaekraf">Judul Berita_ekraf</label>
                        <input type="text" class="form-control @error('judul_beritaekraf') is-invalid @enderror" id="judul_beritaekraf" placeholder="Masukan Link Beritaekraf" name="judul_beritaekraf" value="{{$beritaekraf->judul_beritaekraf ?? old('judul_beritaekraf')}}">
                        @error('judul_beritaekraf') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf">Isi Berita ekraf</label>
                        <input type="text" class="form-control @error('isi_beritaekraf') is-invalid @enderror" id="isi_beritaekraf" placeholder="Masukan Link Beritaekraf" name="isi_beritaekraf" value="{{$beritaekraf->isi_beritaekraf ?? old('isi_beritaekraf')}}">
                        @error('isi_beritaekraf') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf">Link_ekraf</label>
                        <input type="text" class="form-control @error('linkekraf') is-invalid @enderror" id="linkekraf" placeholder="Masukan Linkekraf Beritaekraf" name="linkekraf" value="{{$beritaekraf->linkekraf ?? old('linkekraf')}}">
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