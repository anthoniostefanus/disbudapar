<title>Profile Pengguna | Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">

@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

<div class="container">
    <div class="row profile-pict">
        <div class="col-md-3">

            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-input">
                <div class="col-md-12 avatar">
                    <img id="file-ip-1-preview" src= "{{ ('/img/avatar.jpg ') }}">
                    @foreach($profile as $key => $profile)
                    <img src ="{{ route('profile.download', $profile->berkas) }}">
                    @endforeach
                    <p>Selamat Datang {{ Auth::user()->name }}!  </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 edit-pict">
                    <div class="upload-btn-wrapper">
                         <button class="btn btn-outline-primary message" for="file-ip-1">Edit Foto</button>
                         <input type="file" name="berkas" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 edit-profile">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
            </form>

            <div class="row">
                <div class="col-md-12 edit-profile">
               <a  href="{{route('profile.edit', $user)}}" class="btn btn-warning">Ganti Kata Sandi</a>
            </div>
            </div>

            <div class="row">
                <div class="col-md-12 edit-profile">
                <input  class="btn btn-secondary" type="button" value="Kembali" onclick="history.back(-1)" />
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="container cont-data">
                <div class="row">
                    <h3> Data User {{ Auth::user()->name }}</h3>
                    <div class="profil col-md-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama Lengkap</p>
                            <p class="py-2 text-muted">{{ Auth::user()->name }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Email</p>
                            <p class="py-2 text-muted">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">No.Telepon</p>
                            <p class="py-2 text-muted">{{ Auth::user()->No_Telepon }}</p>
                        </div>
                    </div>
                    <h3> Data KTP {{ Auth::user()->name }}</h3>
                    <div class="profil col-md-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">NIK</p>
                            <p class="py-2 text-muted">{{ Auth::user()->nik }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama Depan</p>
                            <p class="py-2 text-muted">{{ Auth::user()->nama_depan }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama Belakang</p>
                            <p class="py-2 text-muted">{{ Auth::user()->nama_belakang }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Tempat Lahir</p>
                            <p class="py-2 text-muted">{{ Auth::user()->tempat_lahir }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Tanggal Lahir</p>
                            <p class="py-2 text-muted">{{ Auth::user()->tanggal_lahir }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alamat</p>
                            <p class="py-2 text-muted">{{ Auth::user()->alamat }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Kecamatan</p>
                            <p class="py-2 text-muted">{{ Auth::user()->kecamatan }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Kelurahan</p>
                            <p class="py-2 text-muted">{{ Auth::user()->kelurahan }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">RT</p>
                            <p class="py-2 text-muted">{{ Auth::user()->rt }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">RW</p>
                            <p class="py-2 text-muted">{{ Auth::user()->rw }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Agama</p>
                            <p class="py-2 text-muted">{{ Auth::user()->agama }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Status Perkawinan </p>
                            <p class="py-2 text-muted">{{ Auth::user()->kwn }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Pekerjaan </p>
                            <p class="py-2 text-muted">{{ Auth::user()->pekerjaan }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Kewarganegaraan </p>
                            <p class="py-2 text-muted">{{ Auth::user()->warga }}</p>
                        </div>
                    </div>
                    <h3> Data Ekonomi Kreatif</h3>
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
                                <td>{{$ekraf->Nama_Usaha}}</td>
                                <td>
                                <a href="{{route('profile-liat-EKRAF.show', $ekraf)}}" class="btn btn-primary btn-xs">
                                        info
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3> Data Pariwisata</h3>
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
                        @foreach($pariwisata as $key => $pariwisata)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$pariwisata->nib}}</td>
                                <td>{{$pariwisata->Nama_Usaha}}</td>
                                <td>
                                <a href="{{route('profile-liat-PAR.show', $pariwisata)}}" class="btn btn-primary btn-xs">
                                        info
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <h3> Data Kredit Usaha Rakyat</h3>
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
                        @foreach($kur as $key => $kur)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$kur->nik}}</td>
                                <td>{{$kur->nama_lengkap}}</td>
                                <td>
                                <a href="{{route('profile-liat-KUR.show', $kur)}}" class="btn btn-primary btn-xs">
                                        info
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                       
                        </tbody>
                    </table>
                    
                   
                    </div>
                </div>
            </div>
        <div>
    </div>
    
    <script type="text/javascript">
  function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>

</div>