@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>NIK</td>
                            <td>{{ Auth::user()->nik }}</td>
                        </tr>
                        <tr>
                            <td>Nama Depan</td>
                            <td>{{ Auth::user()->nama_depan }}</td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td>{{ Auth::user()->nama_belakang }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>{{ Auth::user()->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ Auth::user()->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ Auth::user()->alamat }}</td>
                        </tr>
                       <tr>
                            <td>Kecamatan</td>
                            <td>{{ Auth::user()->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ Auth::user()->kelurahan }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ Auth::user()->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ Auth::user()->rw }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ Auth::user()->agama }}</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>{{ Auth::user()->kwn }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ Auth::user()->pekerjaan }}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{ Auth::user()->warga }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop