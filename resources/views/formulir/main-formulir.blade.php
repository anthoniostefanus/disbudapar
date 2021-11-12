<title>Formulir | Simpel Pare</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/formulir.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

<div class="container container-news">
    <div class="row">
        <div class="col-md-12">
            <h1>Pendaftaran Sektor usaha Ekonomi Kreatif dan Pariwisata serta Peminjaman KUR</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: fit-content;">
                <div class="ctr-image">
                    <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Formulir Ekonomi Kreatif</h5>
                    <p class="card-text">Sektor usaha yang bergerak dibidang ekonomi kreatif</p>
                    <a href="{{route('formulirekraf.create')}}" class="btn btn-primary mb-2">
                        Ayo Mendaftar
                    </a>
</div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card card-center" style="width: fit-content;">
                <div class="ctr-image">
                    <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                </div>
                <div class="card-body card-center">
                    <h5 class="card-title title-cent">Formulir Pariwisata</h5>
                    <p class="card-text text-cent">Sektor usaha yang bergerak dibidang pariwisata Salatiga</p>
                    <a href="formulirpar" class="btn btn-primary btn-cent">Ayo Mandaftar!</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: fit-content;">
                <div class="ctr-image">
                    <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pinjaman Dana KUR</h5>
                    <p class="card-text">Pinjaman Dana Kredit Usaha Rakyat untuk menunjang usaha Masyarakat</p>
                    <a href="#" class="btn btn-warning">Ayo Mandaftar!</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer.main-footer')