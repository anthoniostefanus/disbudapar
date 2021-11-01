<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simpel Pare</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    <body>
    <div class ="container-md">
      <!--Header-->
      <div class = "header-box-blu">
        <img class= "poin" src= "{{ ('/img/poin.png ') }}">
        <p class ="jl"> Jl. Diponegoro No.37, Salatiga </p>
        <img class= "fb" src= "{{ ('/img/fb.png ') }}">
        <img class= "ig" src= "{{ ('/img/ig.png ') }}">
      </div>
      <!--//Header-->

      <!--Navbar-->
      <div class="nav-box">
            <img class= "salatiga" src= "{{ ('/img/salatiga.png') }}">
            <div class="nav-box-menu">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="nav1">&emsp;Beranda&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Formulir&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kategori&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Berita&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Vidio&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kontak&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Kritik&Saran&emsp;</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Diskusi</a>
                  </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
      </div>
      <!--//Navbar-->
</br>
</br>
</br>
</br>
</br>

    <!--Profile-->
    <div class="container">
    <div class="row">
        <div class="col-12 p-0">
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-12 p-0 px-3 py-3 mb-3">
                    <div class="d-flex flex-column align-items-center"> 
                      </br>
                      <div class="form-input">
                        <div class="preview">
                        <img id="file-ip-1-preview" src= "{{ ('/img/avatar.jpg ') }}">
                        <p class="txt fw-bold h4 mt-3">Halo! {{ Auth::user()->name }}</p>
                      </div>
                      </div>
                        <div class="d-flex ">
                         <div class="upload-btn-wrapper">
                         <button class="btn btn-outline-primary message" for="file-ip-1">Edit Foto</button>
                         <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                        </div>
                            <div class="btn btn-outline-primary message">Edit Data Diri</div>
                        </div>
                        </br>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <div class="btn btn-outline-primary message">LOGOUT</div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 ps-md-4">
            <div class="row">
                <div class="profil col-12 bg-white px-3 mb-3 pb-3">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">Nama Lengkap</p>
                        <p class="py-2 text-muted"> {{ Auth::user()->name }}</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">Email</p>
                        <p class="py-2 text-muted"> {{ Auth::user()->email }}</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">No.Telepon</p>
                        <p class="py-2 text-muted">{{ Auth::user()->no_tlp }}</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="py-2">Alamat</p>
                        <p class="py-2 text-muted">blank</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="py-2">Tempat Tanggal Lahir</p>
                        <p class="py-2 text-muted"> blank</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>