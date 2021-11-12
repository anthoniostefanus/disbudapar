<link rel="stylesheet" type="text/css" href="{{ asset('/css/general-layout.css') }}">
<title>Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif Salatiga</title>

@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/2k2k2k.png ') }}" alt="First slide">
            </div>
        
            <div class="carousel-item" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/pare.png ') }}" alt="Second slide">
            </div>
        
            <div class="carousel-item" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/ragil-gg.png ') }}" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container main-menu">
        <div  class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <a href="profile"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/login.png ') }}"/>
                    <p class="label-menu">Profil</p>
                </button></a>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <a href="formulir"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/regis.png ') }}">
                    <p class="label-menu">Formulir</p>
                </button></a>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <a><button class="main-button">
                    <img class="back-img" src="{{asset ('img/kontak.png ') }}">
                    <p class="label-menu">Kontak</p>
                </button></a>
            </div>
        </div>
    </div>

    <div class="container container-category">
        <div class="row title-category">
            <div class="col-md-12">
                <h1 class="category-title">Jenis Kategori dalam Ekonomi KReatif</h1>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Aplikasi.png ') }}">
                        <p class="label-category">Aplikasi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Seni-Kria.png ') }}">
                        <p class="label-category">Seni Kria</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                </a>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Aplikasi.png ') }}">
                        <p class="label-category">Aplikasi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Seni-Kria.png ') }}">
                        <p class="label-category">Seni Kria</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                </a>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Aplikasi.png ') }}">
                        <p class="label-category">Aplikasi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Seni-Kria.png ') }}">
                        <p class="label-category">Seni Kria</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="category-model">
                        <img class="img-logo" src="{{asset ('img/icon/Fotografi.png ') }}">
                        <p class="label-category">Lainnya</p>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="container container-news">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita Ekonomi Kreatif dan Pariwisata</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelaku Ekonomi Kreatif</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Lanjutkan Membaca</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="card card-center" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body card-center">
                        <h5 class="card-title title-cent">Seputar Simpel Pare</h5>
                        <p class="card-text text-cent">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary btn-cent">Lanjutkan Membaca</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/icon/Tv.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pariwisata Salatiga</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-warning">Lanjutkan Membaca</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="scrollvidio" class="container video-box">
        <div class="row title-video-section">
            <div class="col-md-12">
                <h1 class="video-title">Seputar Ekonomi Kreatif dan Pariwisata</h1>
            </div>
        </div>

        <div class="row d-flex ref-video">
           <div class="col-lg-6 justify-content-center">
                
                 @foreach($vidio as $vidio)
                 <iframe width="100%" height="300px" src="{{$vidio->link1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      
            </div>

            <div class="col-lg-6 justify-content-center">
                 <iframe width="100%" height="300px" src="{{$vidio->link2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 @endforeach
            </div>
        </div>
    </div>
    
    <div class="container peta">
        <div class="row judul-peta">
            <h1>Kontak</h1>
        </div>

        <div class="row peta-disbudpar">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3211860858582!2d110.49956982916581!3d-7.321878569500311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7957460b7479%3A0x1fa65a28b6d6968d!2sDisbudpar%20Salatiga!5e0!3m2!1sen!2sid!4v1635752000462!5m2!1sen!2sid" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy">
                    Dinas Kebudayaan dan Pariwisata Salatiga
                </iframe>
            </div>
        </div>
    </div>

    @include('component.js.main')
    @include('footer.main-footer')
           