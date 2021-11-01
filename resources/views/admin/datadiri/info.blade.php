@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>NIK</td>
                            <td>{{ $datadiri->nik}}</td>
                        </tr>
                        <tr>
                            <td>Nama Depan</td>
                            <td>{{ $datadiri->nama_depan}}</td>
                        </tr>
                        <tr>
                            <td>Nama Belakang</td>
                            <td>{{ $datadiri->nama_belakang}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>{{ $datadiri->tempat_tanggal_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $datadiri->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $datadiri->alamat}}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $datadiri->rt}}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $datadiri->RW}}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $datadiri->kelurahan}}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $datadiri->kecamatan}}</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>{{ $datadiri->kota}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ $datadiri->agama}}</td>
                        </tr>
                        <tr>
                            <td>Status Perkawinan</td>
                            <td>{{ $datadiri->status_perkawinan}}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{ $datadiri->kewarganegaraan}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $datadiri->pekerjaan}}</td>
                        </tr>
                        <tr>
                            <td>Username User</td>
                            <td>{{ $datadiri->username_user}}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $datadiri->password}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $datadiri->email}}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu Kandung</td>
                            <td>{{ $datadiri->nama_ibu_kandung}}</td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td>{{ $datadiri->no_handphone}}</td>
                        </tr>
                        <tr><td>File Peraturan</td>
                            <td>
                                <a href = "{{ route('produk.download', $produk->berkas) }}">{{ $produk->berkas }}</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('produk.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop