@extends('adminlte::page')
@section('title', 'List Ekonomi Kreaatif')
@section('content_header')
    <h1 class="m-0 text-dark">List Ekonomi Kreatif</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIB</th>
                            <th>Nama Usaha</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ekraf as $key => $ekraf)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$ekraf->nib}}</td>
                                <td>{{$ekraf->nama_usaha}}</td>
                                <td>
                                    <a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('users.destroy', $user)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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