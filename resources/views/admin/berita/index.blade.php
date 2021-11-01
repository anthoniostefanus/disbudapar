@extends('adminlte::page')
@section('title', 'List Berita')
@section('content_header')
    <h1 class="m-0 text-dark">List Berita</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('berita.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($berita as $key => $berita)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$berita->judul_berita}}</td>
                                <td>{{$berita->isi_berita}}</td>
                                <td>{{$berita->link}}</td>
                                <td>
                                    <a href="{{route('berita.edit', $berita)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('berita.destroy', $berita)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
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
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush