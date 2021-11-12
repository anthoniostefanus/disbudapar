<link rel="stylesheet" type="text/css" href="{{ asset('/css/general-layout.css') }}">
<title>Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif Salatiga</title>

@include('headline-blue.headline-blue')
@include('navigation bar.navigation-bar')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/pare.png ') }}" alt="First slide">
            </div>
        
            <div class="carousel-item" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/kota.png ') }}" alt="Second slide">
            </div>
        
            <div class="carousel-item" data-interval="1500">
                <img class="d-block w-100" src="{{asset ('img/ragil-gg.png ') }}" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container main-menu">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <a href="{{ route('login') }}"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/login.png ') }}"/>
                    <p class="label-menu">Masuk</p>
                </button></a>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <a href="{{ route('register') }}"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/regis.png ') }}">
                    <p class="label-menu">Mendaftar</p>
                </button></a>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <a href="kontak"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/kontak.png ') }}">
                    <p class="label-menu">Kontak</p>
                </button></a>
            </div>
        </div>

    </div>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollBerita" class="container container-news">
        <div class="row">
            <div class="col-md-12">
                <h2>Seputar Ekonomi Kreatif dan Pariwisata</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/pare.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelaku Ekonomi Kreatif</h5>
                        <p class="card-text">Ekonomi kreatif adalah salah satu sektor perekonomian yang menggunakan ide dan pengetahuan berkonsep ...</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">lanjutkan Membaca </button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pelaku Ekonomi Kreatif</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <h6>Definisi Ekonomi Kreatif</h6>
                            <p>Ekonomi kreatif adalah salah satu sektor perekonomian yang menggunakan ide dan pengetahuan berkonsep kreativitas 
                                dari manusia yang berperan sebagai faktor produksi utamanya.</p>
                            <p>Konsep perekonomian ini lebih mengutamakan kreativitas, ide, dan pengetahuan dari sumber daya manusianya.</p>
                            <h6>Ciri-ciri Ekonomi Kreatif</h6>
                            <p>Adapun ciri-ciri dari ekonomi kreatif yaitu :</p>
                            <p>1. Ide dan gagasan sebagai ide utama oleh pelaku ekonomi.</p>
                            <p>2. Adanya kreasi intelektual dalam sektor usahanya.</p>
                            <p>3. Kegiatan usahanya bersifat terbuka dan tidak terbatas.</p>
                            <p>4. Menghasilkan produk yang bernilai kreatif.</p>
                            <p>5. Adanya kerja sama dari berbagai pihak.</p>
                            <p>6. Memiliki konsep yang bersifat relatif dan mudah tergantikan.</p>
                            <h6>Faktor Pendorong Ekonomi Kreatif</h6>
                            <p>Ekonomi kreatif dapat terbentuk, tumbuh dan berkembang jika ada pendorongnya.
                                Apa saja faktor-faktor yang mendorong terbentuk, tumbuh, dan berkembangnya ekonomi kreatif?</p>
                            <h6>1. Kreativitas dalam Sektor Ekonomi</h6>
                            <p>Membahas tentang ekonomi kreatif, tentu saja kreativitas harus ada dalam pembahasanya termasuk sebagai faktor pendorongnya.</p>
                            <p>Kreativitas sendiri merupakan suatu proses mental seseorang dalam memunculkan ide dan gagasan yang sifatnya baru.</p>
                            <p>Kreativitas yang ada dalam perekonomian biasanya memiliki tujuan untuk meningkatkan pemasukan dan hasil perekonomian.</p>
                            <p>Objek dalam perekonomian ini umumnya berbentuk barang atau jasa kreatif hasil inovasi dan pemikiran manusia, sehingga perekonomian ini disebut sebagai ekonomi kreatif.</p>
                            <h6>2. Teknologi Maju</h6>
                            <p>Kemajuan teknologi adalah salah satu tumpuan dalam sektor perekonomian kreatif.</p>
                            <p>Kemudahan akses yang dapat kamu ambil dari kemajuan teknologi dapat membantu perekonomian ini semakin maju.</p>
                            <p>Jika dimanfaatkan dengan baik, teknologi dapat menekan kesulitan dan masalah yang ditemukan dalam proses perekonomian ini.</p>
                            <p>Beberapa negara maju juga menggunakan kemajuan teknologi untuk menjalankan mode ekonomi kreatif seperti Jepang dan Amerika Serikat.</p>
                            <h6>3. Tenaga Kerja</h6>
                            <p>Tenaga kerja menjadi faktor pendorong utama dalam ekonomi kreatif.</p>
                            <p>Hal ini dikarenakan manusia sebagai sumber daya yang menjadi penggerak perekonomian ini.</p>
                            <p>Jika tenaga kerja yang menjadi sumber daya manusianya memadai dan berkualitas, maka perekonomian yang dijalankan juga akan berjalan dengan baik.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="card card-center" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/pare.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body card-center">
                        <h5 class="card-title title-cent">Seputar Simpel Pare</h5>
                        <p class="card-text text-cent">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".simpel-example-modal-lg">lanjutkan Membaca </button>
                        <div class="modal fade simpel-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tentang Simpel Pare</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <h6>Definisi Simpel Pare</h6>
                            <p>Ekonomi kreatif adalah salah satu sektor perekonomian yang menggunakan ide dan pengetahuan berkonsep kreativitas 
                                dari manusia yang berperan sebagai faktor produksi utamanya.</p>
                            <p>Konsep perekonomian ini lebih mengutamakan kreativitas, ide, dan pengetahuan dari sumber daya manusianya.</p>
                            <h6>Ciri-ciri Ekonomi Kreatif</h6>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/pare.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pariwisata Salatiga</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".par-example-modal-lg">lanjutkan Membaca </button>
                        <div class="modal fade par-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Panduan Potensi Pembangunan Sektor Pariwisata dan Ekonomi Kreatif</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Kementerian Pariwisata dan Ekonomi Kreatif/Badan Pariwisata dan Ekonomi Kreatif (Kemenparekraf/Baparekraf) Republik Indonesia terus berupaya untuk mengoptimalkan pembangunan sektor pariwisata dan ekonomi kreatif di Indonesia.</p>
                            <p>Salah satu upaya yang dilakukan untuk pengembangan potensi sektor parekraf tersebut, adalah menyusun panduan perihal pembangunan pariwisata dan ekonomi kreatif di Indonesia.</p>
                            <p>Berikut ini panduan potensi pembangunan pariwisata dan ekonomi kreatif menurut Kemenparekraf/Baparekraf RI:</p>
                            <h6>Potensi Pembangunan Pariwisata</h6>
                            <p>Sektor pariwisata telah lama menjadi tulang punggung dari ekonomi kreatif di Indonesia. Dalam rangka pembangunan pariwisata dan ekonomi kreatif, Kemenparekraf/Baparekraf membagi potensi sektor pariwisata atas 4 sub-bab antara lain:</p>
                            <h6>1. Potensi pengembangan destinasi pariwisata</h6>
                            <p>Destinasi pariwisata merupakan inti utama dari pembangunan pariwisata. Dalam pengembangannya, daya tarik wisata sebaiknya dibangun secara sinergis dengan memerhatikan fasilitas wisata, fasilitas umum, aksesibilitas/sarana prasarana.</p>
                            <p>Tidak kalah penting, pembangunan pariwisata haruslah berbasis pemberdayaan masyarakat. Pemberdayaan ini harus mengadopsi sistem yang utuh dan berkelanjutan.</p>
                            <p>Indonesia memiliki sejumlah potensi pembangunan pariwisata. Potensi ini sekaligus dapat menjadi kekuatan bangsa dalam pembangunan pariwisata dan ekonomi kreatif. Ragam potensi pariwisata tersebut antara lain:</p>
                            <a href="https://kemenparekraf.go.id/ragam-pariwisata/Panduan-Potensi-Pembangunan-Sektor-Pariwisata-dan-Ekonomi-Kreatif" target="_blank"><button class="btn btn-primary">Lanjutkan</button></a>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollVidio" class="container video-box">
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
    </div>
    
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollKontak" class="container peta">
        <div class="row judul-peta">
            <h1>Kontak</h1>
        </div>
    </div>
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
    @include('footer.footer')

           