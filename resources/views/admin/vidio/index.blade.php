@extends('adminlte::page')
@section('title', 'List Vidio')
@section('content_header')
    <h1 class="m-0 text-dark">List Vidio</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <a href="{{route('vidio.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Link1</th>
                            <th>Link2</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vidio as $key => $vidio)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$vidio->link1}}</td>
                                <td>{{$vidio->link2}}</td>
                                <td>
                                    <a href="{{route('vidio.edit', $vidio)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
