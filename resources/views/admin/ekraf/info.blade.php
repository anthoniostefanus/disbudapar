@extends('adminlte::page')

@section('title', 'Info Peraturan')

@section('content_header')
    <h1 class="m-0 text-dark">Info Peraturan</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama usaha</td>
                            <td>{{ $ekraf->nama_usaha}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>{{ $ekraf->tgl_mulai}}</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td>{{ $ekraf->nomor_nib}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $ekraf->address}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $ekraf->no_te}}</td>
                        </tr>
                        <tr>
                            <td>subjek Usaha</td>
                            <td>{{ $ekraf->subj_usaha}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Usaha</td>
                            <td>{{ $ekraf->desc}}</td>
                        </tr>
                        <tr>
                            <td>Omset</td>
                            <td>{{ $ekraf->omset}}</td>
                        </tr>
                        <tr>
                            <td>Aset</td>
                            <td>{{ $ekraf->aset}}</td>
                        </tr>
                        <tr>
                            <td>Alasan</td>
                            <td>{{ $ekraf->alasan}}</td>
                        </tr>
                        <tr>
                            <td>Prestasi</td>
                            <td>{{ $ekraf->prestasi}}</td>
                        </tr>

                        <tr><td>Gambar</td>
                        <td> <img class="d-block w-50" src = "{{ route('ekraf.download', $ekraf->berkas) }}"></td>
                          
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('ekraf.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop