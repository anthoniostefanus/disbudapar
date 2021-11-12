@extends('adminlte::page')
@section('title', 'Tambah Vidio')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Vidio</h1>
@stop
@section('content')
    <form action="{{route('vidio.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="link1">Link 1</label>
                        <input type="text" class="form-control @error('link1') is-invalid @enderror" id="link1" placeholder="Masukkan link Vidio" name="link1" value="{{old('link1')}}">
                        @error('link1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link2">Link 2</label>
                        <input type="text" class="form-control @error('link2') is-invalid @enderror" id="link2" placeholder="Masukkan link Vidio" name="link2" value="{{old('link2')}}">
                        @error('link2') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('vidio.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop