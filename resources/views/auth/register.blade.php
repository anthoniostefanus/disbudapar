<title>Selamat Datang di Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/registeruser.css') }}">
@include('headline-blue.headline-blue')
@include('navigation bar.navigation-bar')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css ">

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form method="POST" action="{{ route('register') }}" id="msform" enctype="multipart/form-data">
                @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Registrasi Akun</strong></li>
                        <li id="personal"><strong>Isi Data KTP</strong></li>
                        <li id="payment"><strong>Masukan Nama Ibu</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Account Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Username: </label> 
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username"/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Email: </label> 
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">No telepon: </label> 
                            <input id="No_Telepon" type="text" class="form-control @error('No_Telepon') is-invalid @enderror" name="No_Telepon" value="{{ old('No_Telepon') }}" required autocomplete="No_Telepon" autofocus  placeholder="No Telepon">
                            @error('No_Telepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Kata Sandi: </label> 
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Kata Sandi">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">konfirmasi kata Sandi</label> 
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Konfirmasi">
                        </div> <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">NIK: </label> 
                            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus  placeholder="NIK">
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Nama Depan: </label> 
                            <input id="nama_depan" type="text" class="form-control @error('nama_depan') is-invalid @enderror" name="nama_depan" value="{{ old('nama_depan') }}" required autocomplete="nama_depan" autofocus  placeholder="Nama Depan">
                            @error('nama_depan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Nama Belakang: </label> 
                            <input id="nama_belakang" type="text" class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang" value="{{ old('nama_belakang') }}" required autocomplete="nama_belakang" autofocus  placeholder="Nama Belakang">
                            @error('nama_belakang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Tempat Lahir: </label> 
                            <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus  placeholder="Tempat Lahir">
                            @error('tempat_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Tanggal Lahir: </label> 
                            <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus  placeholder="Tanggal Lahir">
                            @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Alamat: </label> 
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus  placeholder="Alamat">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">kecamatan: </label> 
                            <input id="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ old('kecamatan') }}" required autocomplete="kecamatan" autofocus  placeholder="Kecamatan">
                            @error('kecamatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">kelurahan: </label> 
                            <input id="kelurahan" type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{ old('kelurahan') }}" required autocomplete="kelurahan" autofocus  placeholder="Kelurahan">
                            @error('kelurahan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">RT: </label> 
                            <input id="rt" type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" value="{{ old('rt') }}" required autocomplete="rt" autofocus  placeholder="RT">
                            @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">RW: </label> 
                            <input id="rw" type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" value="{{ old('rw') }}" required autocomplete="rw" autofocus  placeholder="RW">
                            @error('rw')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Agama: </label> 
                            <select id="agama" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>
                                <option value="religion" disabled selected>Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="khatolik">Katholik</option>
                                <option value="budha">Budha</option>
                                <option value="hindu">Hindhu</option>
                                <option value="konghuchu">Konghuchu</option>
                            </select>
                            <label class="fieldlabels">Pekawinan: </label> 
                            <select id="kwn" class="form-control @error('kwn') is-invalid @enderror" name="kwn" value="{{ old('kwn') }}" required autocomplete="kwn" autofocus>
                                <option value="status" disabled selected>Status Perkawinan</option>
                                <option value="belumkawin">Belum Kawin</option>
                                <option value="kawin-nih">Kawin</option>
                                <option value="cerai-hidup">Cerai Hidup</option>
                                <option value="cerai-mati">Cerai Mati</option>
                            </select>
                            <label class="fieldlabels">pekerjaan: </label> 
                            <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') }}" required autocomplete="pekerjaan" autofocus  placeholder="pekerjaan">
                            @error('pekerjaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="fieldlabels">Kewarganegaraan: </label> 
                            <select id="warga" class="form-control @error('warga') is-invalid @enderror" name="warga" value="{{ old('warga') }}" required autocomplete="warga" autofocus>
                                <option value="kaween" disabled selected>Kewarganegaraan</option>
                                <option value="wni">WNI</option>
                                <option value="wna">WNA</option>
                            </select>
                            <label class="fieldlabels">Masukan Foto KTP: </label>
                            <input type="file" name="berkas">
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Image Upload:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 4</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Nama Ibu Kandung: </label> 
                            <input id="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ old('nama_ibu') }}" required autocomplete="nama_ibu" autofocus  placeholder="nama_ibu">
                            @error('nama_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div> <button type="submit" class="btn btn-primary">
                                 Registrasi
                                </button>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>

@include('footer.footer')