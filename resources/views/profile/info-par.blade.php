@foreach($pariwisata as $key => $pariwisata)
<table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama usaha</td>
                            <td>{{ $pariwisata->Nama_Usaha}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>{{ $pariwisata->Tanggal_Mulai}}</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td>{{ $pariwisata->nib}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $pariwisata->Alamat}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $pariwisata->No_Telepon}}</td>
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