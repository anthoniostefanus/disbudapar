<title>Profile Pengguna | Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">

@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

<div class="container">
    <div class="row profile-pict">
        <div class="col-md-3">

            <div class="row form-input">
                <div class="col-md-12 avatar">
                    <img id="file-ip-1-preview" src= "{{ ('/img/avatar.jpg ') }}">
                    <p>Selamat Datang {{ Auth::user()->name }}!  </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 edit-pict">
                    <div class="upload-btn-wrapper">
                         <button class="btn btn-outline-primary message" for="file-ip-1">Edit Foto</button>
                         <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 edit-profile">
                    <a href="#" class="btn btn-primary">Ubah Profile</a>
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
                            <p class="py-2 text-muted">{{ Auth::user()->no_tlp }}</p>
                        </div>
                    </div>
                    <h3> Data Ekonomi Kreatif</h3>
                    <div class="profil col-md-12 bg-white px-3 mb-3 pb-3">
                    @foreach($ekraf as $key => $ekraf)
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama usaha</p>
                            <p class="py-2 text-muted">{{$ekraf->nama_usaha}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Tanggal Berdiri</p>
                            <p class="py-2 text-muted">{{$ekraf->tgl_mulai}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">NIB</p>
                            <p class="py-2 text-muted">{{$ekraf->nomor_nib}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alamat Usaha</p>
                            <p class="py-2 text-muted">{{$ekraf->address}}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nomer telepon</p>
                            <p class="py-2 text-muted">{{$ekraf->no_te}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Subjektor Usaha</p>
                            <p class="py-2 text-muted">{{$ekraf->subj_usaha}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Deskripsi Produk</p>
                            <p class="py-2 text-muted">{{$ekraf->desc}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Omset</p>
                            <p class="py-2 text-muted">{{$ekraf->omset}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Aset</p>
                            <p class="py-2 text-muted">{{$ekraf->aset}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alasan Mendaftar</p>
                            <p class="py-2 text-muted">{{$ekraf->alasan}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Prestasi Usaha</p>
                            <p class="py-2 text-muted">{{$ekraf->prestasi}}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Foto Usaha </p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        @endforeach
                    </div>
                    <h3> Data Pariwisata</h3>
                    <div class="profil col-md-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama Usaha</p>
                            <p class="py-2 text-muted">{{ Auth::user()->name }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">tanggal Berdiri</p>
                            <p class="py-2 text-muted">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">NIB</p>
                            <p class="py-2 text-muted">{{ Auth::user()->no_tlp }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alamat Usaha</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nomor telepon</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Deskripsi Produk</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Omset</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Aset</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                       
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alasan Mendaftar</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Prestasi Usaha</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Foto usaha</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                    </div>
                    <h3> Data Kredit Usaha Rakyat</h3>
                    <div class="profil col-md-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nama Lengkap</p>
                            <p class="py-2 text-muted">{{ Auth::user()->name }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">NIK</p>
                            <p class="py-2 text-muted">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Nomor Telepon</p>
                            <p class="py-2 text-muted">{{ Auth::user()->no_tlp }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Kelurahan</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">Kecamatan</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">RT</p>
                            <p class="py-2 text-muted">{{ Auth::user()->name }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">RW</p>
                            <p class="py-2 text-muted">{{ Auth::user()->email }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">alamat Rumah</p>
                            <p class="py-2 text-muted">{{ Auth::user()->no_tlp }}</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Foto KTP</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">Foto KTP Pasangan</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Jumlah Pinjaman</p>
                            <p class="py-2 text-muted">{{ Auth::user()->name }}</p>
                        </div>
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