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
                <h4> Berita Ekraf 1 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf1">Judul Berita_ekraf</label>
                        <input type="text" class="form-control @error('judul_beritaekraf1') is-invalid @enderror" id="judul_beritaekraf1" placeholder="Masukan Link Beritaekraf" name="judul_beritaekraf1" value="{{$beritaekraf->judul_beritaekraf1 ?? old('judul_beritaekraf1')}}">
                        @error('judul_beritaekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf1">Isi Berita ekraf</label>
                        <input type="text" class="form-control @error('isi_beritaekraf1') is-invalid @enderror" id="isi_beritaekraf1" placeholder="Masukan Link Beritaekraf" name="isi_beritaekraf1" value="{{$beritaekraf->isi_beritaekraf1 ?? old('isi_beritaekraf1')}}">
                        @error('isi_beritaekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf1">Link_ekraf</label>
                        <input type="text" class="form-control @error('linkekraf1') is-invalid @enderror" id="linkekraf1" placeholder="Masukan Linkekraf1 Beritaekraf" name="linkekraf1" value="{{$beritaekraf->linkekraf1 ?? old('linkekraf1')}}">
                        @error('linkekraf1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Ekraf 2 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf2">Judul Berita_ekraf</label>
                        <input type="text" class="form-control @error('judul_beritaekraf2') is-invalid @enderror" id="judul_beritaekraf2" placeholder="Masukan Link Beritaekraf" name="judul_beritaekraf2" value="{{$beritaekraf->judul_beritaekraf2 ?? old('judul_beritaekraf2')}}">
                        @error('judul_beritaekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf2">Isi Berita ekraf</label>
                        <input type="text" class="form-control @error('isi_beritaekraf2') is-invalid @enderror" id="isi_beritaekraf2" placeholder="Masukan Link Beritaekraf" name="isi_beritaekraf2" value="{{$beritaekraf->isi_beritaekraf2 ?? old('isi_beritaekraf2')}}">
                        @error('isi_beritaekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf2">Link_ekraf</label>
                        <input type="text" class="form-control @error('linkekraf2') is-invalid @enderror" id="linkekraf2" placeholder="Masukan Linkekraf2 Beritaekraf" name="linkekraf2" value="{{$beritaekraf->linkekraf2 ?? old('linkekraf2')}}">
                        @error('linkekraf2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </br>
                    <h4> Berita Ekraf 3 <h4>
                    <div class="form-group">
                        <label for="judul_beritaekraf3">Judul Berita_ekraf</label>
                        <input type="text" class="form-control @error('judul_beritaekraf3') is-invalid @enderror" id="judul_beritaekraf3" placeholder="Masukan Link Beritaekraf" name="judul_beritaekraf3" value="{{$beritaekraf->judul_beritaekraf3 ?? old('judul_beritaekraf3')}}">
                        @error('judul_beritaekraf3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_beritaekraf3">Isi Berita ekraf</label>
                        <input type="text" class="form-control @error('isi_beritaekraf3') is-invalid @enderror" id="isi_beritaekraf3" placeholder="Masukan Link Beritaekraf" name="isi_beritaekraf3" value="{{$beritaekraf->isi_beritaekraf3 ?? old('isi_beritaekraf3')}}">
                        @error('isi_beritaekraf3') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkekraf3">Link_ekraf</label>
                        <input type="text" class="form-control @error('linkekraf3') is-invalid @enderror" id="linkekraf3" placeholder="Masukan Linkekraf3 Beritaekraf" name="linkekraf3" value="{{$beritaekraf->linkekraf3 ?? old('linkekraf3')}}">
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