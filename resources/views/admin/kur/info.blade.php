@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama lengkap</td>
                            <td>{{ $kur->nama_lengkap}}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>{{ $kur->nik}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $kur->No_Telepon}}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>{{ $kur->Kelurahan}}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $kur->Kecamatan}}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $kur->rt}}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $kur->rw}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $kur->address}}</td>
                        </tr>
                        <tr><td>Berkas KTP</td>
                        <td> <img class="d-block w-50" src = "{{ route('kur.download', $kur->berkas_ktp) }}"></td>
                        </tr>
                        <tr><td>Berkas KTP Pasangan</td>
                        <td> <img class="d-block w-50" src = "{{ route('kur.download1', $kur->berkas_ktp_pasangan) }}"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pinjaman</td>
                            <td>Rp.{{ $kur->address}}</td>
                        </tr>
                        <tr>
                            <td>Sedang Ada Pinjaman di Bank?</td>
                            <td>{{ $kur->pinjaman}}</td>
                        </tr>
                        <tr>
                            <td>Dengan ini saya bersedia disurvey oleh pihak bank</td>
                            <td>{{ $kur->survei}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('kur.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop