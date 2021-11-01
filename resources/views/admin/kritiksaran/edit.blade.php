@extends('adminlte::page')
@section('title', 'Edit kritiksaran')
@section('content_header')
    <h1 class="m-0 text-dark">Edit kritiksaran</h1>
@stop
@section('content')
    <form action="{{route('kritiksaran.update', $kritiksaran)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_kritiksaran">Judul kritiksaran</label>
                        <input type="text" class="form-control @error('judul_kritiksaran') is-invalid @enderror" id="judul_kritiksaran" placeholder="Masukan isi_kritiksaran kritiksaran" name="judul_kritiksaran" value="{{$kritiksaran->judul_kritiksaran ?? old('judul_kritiksaran')}}">
                        @error('judul_kritiksaran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Isi kritiksaran</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan isi_kritiksaran kritiksaran" name="nama" value="{{$kritiksaran->nama ?? old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi_kritiksaran">isi_kritiksaran</label>
                        <input type="text" class="form-control @error('isi_kritiksaran') is-invalid @enderror" id="isi_kritiksaran" placeholder="Masukan isi_kritiksaran kritiksaran" name="isi_kritiksaran" value="{{$kritiksaran->isi_kritiksaran ?? old('isi_kritiksaran')}}">
                        @error('isi_kritiksaran') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('kritiksaran.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop