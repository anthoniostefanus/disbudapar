@foreach($pariwisata as $key => $pariwisata)
<table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama usaha</td>
                            <td>{{ $pariwisata->nama_usaha}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>{{ $pariwisata->tgl_mulai}}</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td>{{ $pariwisata->nomor_nib}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $pariwisata->address}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $pariwisata->no_te}}</td>
                        </tr>
                        <tr>
                            <td>subjek Usaha</td>
                            <td>{{ $pariwisata->desc}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Usaha</td>
                            <td>{{ $pariwisata->omset}}</td>
                        </tr>
                        <tr>
                            <td>Omset</td>
                            <td>{{ $pariwisata->aset}}</td>
                        </tr>
                        <tr>
                            <td>Aset</td>
                            <td>{{ $pariwisata->alasan}}</td>
                        </tr>
                        <tr>
                            <td>Alasan</td>
                            <td>{{ $pariwisata->prestasi}}</td>
                        </tr>

                        <tr><td>Gambar</td>
                        <td> <img class="d-block w-50" src = "{{ route('profile-liat-PAR.download', $pariwisata->berkas) }}"></td>
                          
                        </tr>
                    </table>
                    <div class="card-footer">
                    <a href="{{route('profile.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
                        @endforeach