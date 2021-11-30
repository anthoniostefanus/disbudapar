@foreach($ekraf as $key => $ekraf)
<table class='table table-striped table-hover'>

                        <tr>
                            <td>Nama usaha</td>
                            <td>{{ $ekraf->Nama_Usaha}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Mulai</td>
                            <td>{{ $ekraf->Tanggal_Mulai}}</td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td>{{ $ekraf->nib}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $ekraf->Alamat}}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $ekraf->No_Telepon}}</td>
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
                        <td> <img class="d-block w-50" src = "{{ route('profile-liat-EKRAF.download', $ekraf->berkas) }}"></td>
                          
                        </tr>
                          
                        </tr>
                    </table>
                    <div class="card-footer">
                    <a href="{{route('profile.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
                        @endforeach