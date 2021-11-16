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

                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Alamat</p>
                            <p class="py-2 text-muted">Blank</p>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">Tempat Tanggal Lahir</p>
                            <p class="py-2 text-muted">Blank</p>
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