@extends('adminlte::page')
@section('title', 'List kritiksaran')
@section('content_header')
    <h1 class="m-0 text-dark">List Kritik & Saran</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('kritiksaran.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul kritiksaran</th>
                            <th>Nama</th>
                            <th>Isi Kritik & saran</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kritiksaran as $key => $kritiksaran)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$kritiksaran->judul_kritiksaran}}</td>
                                <td>{{$kritiksaran->nama}}</td>
                                <td>{{$kritiksaran->isi_kritiksaran}}</td>
                                <td>
                                    <a href="{{route('kritiksaran.edit', $kritiksaran)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('kritiksaran.destroy', $kritiksaran)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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