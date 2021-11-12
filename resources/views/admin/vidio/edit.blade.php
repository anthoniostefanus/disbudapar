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
                        <label for="link1">Link1</label>
                        <input type="text" class="form-control @error('link1') is-invalid @enderror" id="link1" placeholder="Masukan Link vidio 1" name="link1" value="{{$vidio->link1 ?? old('link1')}}">
                        @error('link1') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link2">Link2</label>
                        <input type="text" class="form-control @error('link2') is-invalid @enderror" id="link2" placeholder="Masukan Link vidio 2" name="link2" value="{{$vidio->link2 ?? old('link2')}}">
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