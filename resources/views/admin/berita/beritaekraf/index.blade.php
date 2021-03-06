@extends('adminlte::page')
@section('title', 'List Berita Ekraf')
@section('content_header')
    <h1 class="m-0 text-dark">List Berita Ekraf</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('beritaekraf.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita Ekraf</th>
                            <th>Isi Berita Ekraf</th>
                            <th>Link Ekraf</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($beritaekraf as $key => $beritaekraf)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$beritaekraf->judul_beritaekraf1}}</td>
                                <td>{{$beritaekraf->isi_beritaekraf1}}</td>
                                <td>{{$beritaekraf->linkekraf1}}</td>
                                <td>
                                    <a href="{{route('beritaekraf.edit', $beritaekraf)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('beritaekraf.destroy', $beritaekraf)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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