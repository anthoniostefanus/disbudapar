@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>NIK</td>
                            <td>{{$user->nik}}</td>
                        </tr>
                        <tr>
                            <td>Nama Depan</td>
                            <td>{{$user->nama_depan }}</td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td>{{$user->nama_belakang }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>{{$user->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{$user->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{$user->alamat }}</td>
                        </tr>
                       <tr>
                            <td>Kecamatan</td>
                            <td>{{$user->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{$user->kelurahan }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{$user->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{$user->rw }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{$user->agama }}</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>{{$user->kwn }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{$user->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{$user->warga }}</td>
                        </tr>
                        <tr>
                            <td>Foto KTP</td>
                            <td> <img class="d-block w-50" src = "{{ route('datadiri.download', $user->berkas) }}"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop