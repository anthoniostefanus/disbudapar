@extends('adminlte::page')
@section('title', 'Edit Vidio')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Vidio</h1>
@stop
@section('content')
    <form action="{{route('vidio.update', $vidio)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Masukan Link vidio" name="link" value="{{$vidio->link ?? old('link')}}">
                        @error('link') <span class="text-danger">{{$message}}</span> @enderror
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