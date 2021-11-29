<link rel="stylesheet" type="text/css" href="{{ asset('/css/general-layout.css') }}">
<title>Sistem Informasi Pelayanan Pariwisata dan Ekonomi Kreatif Salatiga</title>

@include('headline-blue.headline-blue')
@include('navigation bar.main-navigation')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="7500">
                <img class="d-block w-100" src="{{asset ('img/pare.png ') }}" alt="First slide">
            </div>
        
            <div class="carousel-item" data-interval="7500">
                <img class="d-block w-100" src="{{asset ('img/sal.png ') }}" alt="Second slide">
            </div>
        
            <div class="carousel-item" data-interval="7500">
                <img class="d-block w-100" src="{{asset ('img/dis.png ') }}" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="container main-menu">
        <div  class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <a href="{{route('profile.index')}}"><button class="main-button">
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
                <a href="kontak"><button class="main-button">
                    <img class="back-img" src="{{asset ('img/kontak.png ') }}">
                    <p class="label-menu">Kontak</p>
                </button></a>
            </div>
        </div>
    </div>

    <!-- kategori -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollKategori" class="container container-category">
        <div class="row title-category">
            <div class="col-md-12">
                <h1 class="category-title">Jenis Kategori dalam Ekonomi Kreatif</h1>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                    <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".aplikasi-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/Aplikasi.png ') }}">
                        <p class="label-category">Aplikasi</p>
                    </button>
                    <div class="modal fade aplikasi-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Aplikasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Meningkatnya penetrasi pemanfaatan gawai oleh masyarakat tak lepas dari peran aplikasi yang tertanam di dalamnya. Masyarakat sudah fasih menggunakan berbagai jenis aplikasi digital seperti peta atau navigasi, media sosial, berita, bisnis, musik, penerjemah, permainan dan lain sebagainya. Berbagai aplikasi tersebut didesain supaya mempermudah pengguna dalam melakukan aktivitas sehari-hari. Maka tak heran jika potensi sub sektor aplikasi dan sangat besar.</p>
                            <p>Di lain pihak, sub sektor ini masih menghadapi berbagai tantangan. Beberapa di antaranya adalah keterbatasan sumber daya manusia (SDM) baik secara kuantitas atau kualitas, sedikitnya minat investor pada industri ini, dan belum adanya kebijakan proteksi yang memihak pada kepentingan developer domestik. Situasi inilah yang menyebabkan ekosistem sub sektor ini belum terbangun secara maksimal, sehingga Kemenparekraf akan berfokus menyelesaikan berbagai tantangan tersebut.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".senikriya-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/Seni-Kria.png ') }}">
                        <p class="label-category">Kria</p>
                    </button>
                    <div class="modal fade senikriya-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Kriya</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Dilihat dari materialnya, kriya meliputi segala kerajinan yang berbahan kayu, logam, kulit, kaca, keramik, dan tekstil. Ketersediaan bahan baku material yang berlimpah dan kreativitas para pelaku industri menjadi faktor utama majunya sub sektor ini.</p>
                            <p>Indonesia memiliki banyak pelaku seni kriya yang kreatif dan piawai dalam berbisnis. Bisnis kriyanya pun beragam. Banyak dari mereka berhasil memasarkan produknya sampai ke pasar luar negeri. Produk- produk kriya Indonesia terkenal karena konsep hand made-nya, dan memanfaatkan hal tersebut sebagai nilai tambah sehingga bisa dipasarkan dengan harga yang lebih tinggi.</p>
                            <p>Sebagai lembaga pemerintah, Kemenparekraf mempunyai tanggung jawab untuk mengelola sub sektor ini dengan menyediakan berbagai fasilitasi yang relevan. Kemenparekraf menyediakan fasilitasi kerja sama antara desainer, UKM, dan manufaktur sehingga terbentuk kolaborasi antar pelaku sub sektor. Promosi produk-produk kriya di dalam dan luar negeri, serta membuka akses permodalan juga menjadi program-program utama Kemenparekraf untuk sub sektor ini.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".foto-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/fotografi.png ') }}">
                        <p class="label-category">Fotografi</p>
                    </button>
                    <div class="modal fade foto-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Fotografi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Perkembangan sub sektor fotografi yang cukup pesat tak lepas dari banyaknya generasi muda yang sangat antusias belajar fotografi. Tak sedikit pula dari mereka yang kemudian memutuskan terjun di bidang ini sebagai profesional. Masyarakat pun memberikan apresiasi yang positif terhadap dunia fotografi.</p>
                            <p>Beberapa pelaku memberikan pendapatnya tentang apa yang masih harus digarap dalam bidang fotografi ini. Pertama, belum adanya perlindungan HKI terutama untuk hak penggunaan karya fotografi. Kedua, belum adanya pengarsipan karya-karya fotografi Indonesia. Dan ketiga, Kemenparekraf diharapkan bisa membantu para fotografer Indonesia mendapatkan perhatian internasional.</p>
                            <p>Salah satu program yang dilakukan oleh Kemenparekraf adalah sertifikasi terhadap para fotografer. Dengan adanya sertifikasi ini diharapkan ada standar yang jelas terhadap profesi fotografer. Kemenparekraf juga akan memfasilitasi perlindungan HKI terhadap karya-karya fotografi, dan meningkatkan eksposur fotografer lokal ke kancah internasional.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".kuliner-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/kuliner.png ') }}">
                        <p class="label-category">Kuliner</p>
                    </button>
                    <div class="modal fade kuliner-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Kuliner</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Sub sektor kuliner memberikan kontribusi yang cukup besar, yaitu 30% dari total pendapatan sektor pariwisata dan ekonomi kreatif. Industri kuliner mempunyai potensi yang sangat kuat untuk berkembang, oleh karena itu pemerintah akan mendukung sub sektor ini supaya lebih maju.</p>
                            <p>Beberapa pelaku industri kuliner melihat ada beberapa hal yang harus diperbaiki dan dikelola secara lebih serius. Salah satu di antaranya adalah perlunya akses perizinan usaha melalui satu pintu sehingga lebih mudah dan efektif. Para pebisnis kuliner baru sebaiknya mendapatkan panduan dari pemerintah, mulai dari pelatihan bisnis, informasi perizinan, sampai pada pendampingan hukum dalam proses pendirian usaha.</p>
                            <p>Sebagai wakil dari pemerintah Kemenparekraf berperan serta dalam mendampingi sub sektor kuliner ini. Kemenparekraf menyediakan fasilitasi seperti pelatihan bisnis, akses permodalan, dan pendampingan pendirian usaha. Kemenparekraf juga akan berpartisipasi dalam mempromosikan kuliner Indonesia yang sangat beraneka ragam ini di pasar domestik dan luar negeri.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".arsitek-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/arsitektur.png ') }}">
                        <p class="label-category">Aritektur</p>
                    </button>
                    <div class="modal fade arsitek-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Arsitektur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Peran arsitektur di Indonesia sangat penting. Dalam hal budaya, keanekaragaman arsitektur lokal dan daerah menunjukkan karakter Bangsa Indonesia yang mempunyai beraneka ragam budaya. Sedangkan dalam hal pembangunan, arsitektur juga berperan dalam merancang dasar pembangunan sebuah kota. Karena potensinya yang sangat besar, Kemenparekraf memasukkan arsitektur sebagai salah satu sub sektor yang layak untuk dikelola secara lebih serius.</p>
                            <p>Saat ini, sub sektor arsitektur menghadapi berbagai macam tantangan. Salah satu di antaranya adalah kekurangan arsitek di Indonesia. Menurut data anggota Ikatan Arsitek Indonesia (IAI), jumlah arsitek di Indonesia hanya 15 ribu orang, sangat kurang jika dibandingkan dengan 250 juta penduduk Indonesia. Sedangkan tantangan lain adalah para pengembang besar lebih banyak menggunakan jasa arsitek asing daripada arsitek lokal.</p>
                            <p>Meski begitu, pembangunan sarana dan prasarana di Indonesia masih sangat membutuhkan peran arsitek. Arsitektur menjadi bagian penting dari pengembangan industri nasional yang sedang bergeser dari raw- based economy menjadi knowledge-based economy. Para arsitek pun saat ini mulai memunculkan inovasi produk arsitektur yang menyiratkan karakter budaya dan kearifan lokal.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".musik-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/musik.png ') }}">
                        <p class="label-category">Musik</p>
                    </button>
                    <div class="modal fade musik-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Musik</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Kemenparekraf optimistis menempatkan musik sebagai salah satu sub sektor yang akan dikelola secara lebih maksimal. Meskipun sub sektor musik punya potensi yang sangat besar, beberapa pelaku melihat permasalahan yang harus segera diselesaikan.</p>
                            <p>Salah satu tantangan terbesar pembajakan yang masih marak sehingga menyebabkan perkembangan industri musik di Indonesia terhambat. Pembajakan tentunya menyebabkan turunnya kualitas dan kuantitas produksi, menurunnya apresiasi masyarakat terhadap musik, dan turunnya minat investasi di bidang ini.</p>
                            <p>Kemenparekraf menyediakan fasilitasi untuk para pelaku industri musik. Beberapa fasilitasi yang akan disediakan oleh Kemenparekraf antara lain perlindungan HKI sehingga bisa mengurangi pembajakan, menginisiasi terbentuknya inkubator-inkubator musik, membuka akses permodalan untuk industri musik, membangun ekosistem bisnis musik yang sehat, dan program-program lain.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".fesyen-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/fashion.png ') }}">
                        <p class="label-category">Fesyen</p>
                    </button>
                    <div class="modal fade fesyen-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Fesyen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Tren fashion senantiasa berubah dengan cepat. Dalam hitungan bulan, selalu muncul mode fashion baru. Ini tak lepas dari produktivitas para desainer fashion lokal yang inovatif merancang baju-baju model baru, dan munculnya generasi muda kreatif yang antusias dengan industri fashion ini. Masyarakat sebagai pasar pun juga semakin cerdas dan berselera tinggi dalam memilih fashion</p>
                            <p>Di sisi lain, sub sektor ini harus menghadapi banyak tantangan. Fashion lokal masih menjadi anak tiri, pasar memprioritaskan ruangnya untuk produk-produk impor, sehingga fashion lokal kurang mendapatkan tempat. Sedangkan tantangan lain yang tak kalah penting adalah sinergi industri hulu ke hilir, mulai dari pabrik tekstil/garmen, perancang busana, sampai ke urusan pasar.</p>
                            <p>Dengan optimisme bahwa industri fashion bisa bersaing di Masyarakat Ekonomi ASEAN (MEA), Kemenparekraf akan melakukan pendampingan melalui fasilitasi-fasilitasi yang bisa mendorong sub sektor ini menjadi semakin besar. Kemenparekraf akan mengeluarkan kebijakan untuk mendorong penggunaan karya fashion dalam negeri, melancarkan ketersediaan bahan baku, sampai pada promosi produk-produk fashion dalam negeri di pasar domestik dan global.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".iklan-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/iklan.png ') }}">
                        <p class="label-category">Periklanan</p>
                    </button>
                    <div class="modal fade iklan-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Periklanan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Sampai saat ini, iklan masih menjadi medium paling efisien untuk memublikasikan produk dan jasa. Potensi industri ini pun tak perlu diragukan lagi. Pertumbuhan belanja iklan nasional bisa mencapai 5-7% setiap tahunnya. Ditambah lagi, iklan mempunyai soft power berperan dalam membentuk pola konsumsi, pola berpikir, dan pola hidup masyarakat. Oleh karena itu sangat penting apabila sub sektor ini dikuasai oleh SDM lokal.</p>
                            <p>Kemenparekraf pun akan menyediakan fasilitasi terkait dengan penguatan SDM lokal, mengatur kebijakan pembatasan investasi asing di industri iklan Indonesia, memperkuat otoritas dewan periklanan Indonesia, dan pembatasan penayangan iklan adaptasi dari regional atau global. Kemenparekraf melihat masih ada banyak ruang yang bisa dikerjakan untuk sub sektor ini.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row row-logo">
            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".terbit-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/penerbitan.png ') }}">
                        <p class="label-category">Penerbitan</p>
                    </button>
                    <div class="modal fade terbit-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Penerbitan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Pasar industri penerbitan memang tidak sebesar sub sektor yang lain, namun industri ini punya potensi yang tak kalah kuat. Banyak penerbitan besar dan kecil yang masih bermunculan meramaikan industri ini. Ditambah lagi perkembangan teknologi yang memungkinkan buku diterbitkan dalam bentuk digital.</p>
                            <p>Penerbitan turut berperan aktif dalam membangun kekuatan intelektual bangsa. Munculnya sastrawan, penulis, peneliti, dan para cendekiawan, tak lepas dari peran industri ini. Walaupun saat ini profesi penulis masih dianggap kurang menjanjikan, banyak para penulis muda yang sangat antusias, silih berganti menerbitkan karya-karyanya.</p>
                            <p>Kemenparekraf akan turut mengelola industri penerbitan sebagai salah satu sub sektor unggulan. Peran Kemenparekraf adalah menyediakan berbagai fasilitasi, seperti membuka akses di pasar domestik (daerah) dan global, fasilitasi kebijakan perpajakan yang bisa meringankan industri penerbitan, dan lain sebagainya. Kemenparekraf optimistis sub sektor penerbitan bisa berkembang menjadi lebih besar.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".seniru-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/Seni-rupa.png ') }}">
                        <p class="label-category">Seni Rupa</p>
                    </button>
                    <div class="modal fade seniru-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Seni Rupa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Industri seni rupa dunia sedang memusatkan perhatiannya ke Asia Tenggara. Indonesia pun tak luput dari perhatian mereka. Di mana Indonesia mempunyai potensi terbesar baik secara kualitas, kuantitas, pelaku kreatif, produktivitas, dan potensi pasar. Seni rupa Indonesia juga sudah memiliki jaringan yang sangat kuat baik dalam negeri ataupun di luar negeri.</p>
                            <p>Berbagai festival seni rupa diadakan secara rutin, bahkan yang reputasinya diakui secara internasional. Hingga kini sudah lebih dari 160 pelaku kreatif seni rupa Indonesia terlibat dalam forum dan acara internasional.</p>
                            <p>Melihat potensi yang sangat besar ini, Kemenparakraf antusias untuk memberikan dukungan sesuai dengan kewenangannya sebagai lembaga pemerintah. Kemenparakraf akan menyediakan berbagai fasilitas seperti pembangunan ruang seni dan budaya, fasilitasi forum dan ajang seni rupa bertaraf internasional, serta mewujudkan supaya Indonesia menjadi pusat seni rupa Asia Tenggara. Dengan memasukkannya ke dalam 17 sub sektor, Kemenparakraf berkomitmen mengelola seni rupa secara lebih serius.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a>
                <button class="btn btn-outline-light"  type="button" data-toggle="modal" data-target=".desainpro-example-modal-lg">
                        <img class="img-logo" src="{{asset ('img/icon/Desain-Produk.png ') }}">
                        <p class="label-category">Desain Produk</p>
                    </button>
                    <div class="modal fade desainpro-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Desain Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <p>Tren sub sektor ini sangat positif. Dengan populasi penduduk yang didominasi oleh usia produktif, potensi terbentuknya interaksi antara pelaku industri dan pasar pun sangat besar. Ditambah lagi masyarakat dan pasar sekarang memiliki apresiasi terhadap produk yang berkualitas.</p>
                            <p>Sub sektor desain produk juga didukung oleh para pelaku industri yang memiliki craftmanshift andal. Para desainer produk mampu menggali dan mengangkat kearifan lokal, kekayaan budaya Indonesia yang beraneka ragam, dalam setiap karya-karyanya. Sebagai wakil pemerintah, Kemenparekraf akan mengelola sub sektor ini dan mendampingi para pelaku kreatif dalam mengembangkan bisnisnya.</p>
                            <p>Beberapa pendekatan yang bisa dilakukan untuk sub sektor ini adalah dengan mengelola industri dari hulu ke hilir, bekerja sama dengan berbagai asosiasi untuk meningkatkan penggunaan desain produk lokal Indonesia, dan mendirikan pusat desain sebagai hub lintas sub sektor. Untuk jangka panjang, perlu adanya undang-undang atau peraturan yang menetapkan supaya setiap retail dan mal menjual minimal 20-30% produk-produk lokal.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <a href="{{route('kategori.index')}}">
                    <button class="btn btn-outline-light" >
                        <img class="img-logo" src="{{asset ('img/icon/logo-dll.png ') }}">
                        <p href="{{route('kategori.index')}}" class="label-category">Lainnya</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- //kategori -->

    <!-- Berita -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    <div id="scrollBerita" class="container container-news">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita Ekonomi Kreatif dan Pariwisata</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card" style="width: fit-content;">
                    <div class="ctr-image">
                        <img class="card-img-top" src="{{ ('/img/berita-ek.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Berita Seputar Ekonomi Kreatif</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".beritaek-example-modal-lg">Lihat Berita </button>
                        <div class="modal fade beritaek-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Berita Seputar Ekonomi Kreatif</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @foreach($beritaekraf as $beritaekraf)
                                <h5>{{$beritaekraf->judul_beritaekraf1}}</h5>
                                <p> {{$beritaekraf->isi_beritaekraf1}}...</p>
                                <a href="{{$beritaekraf->linkekraf1}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritaekraf->judul_beritaekraf2}}</h5>
                                <p> {{$beritaekraf->isi_beritaekraf2}}...</p>
                                <a href="{{$beritaekraf->linkekraf2}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritaekraf->judul_beritaekraf3}}</h5>
                                <p> {{$beritaekraf->isi_beritaekraf3}}...</p>
                                <a href="{{$beritaekraf->linkekraf3}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                            @endforeach
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
                        <img class="card-img-top" src="{{ ('/img/berita-sal.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body card-center">
                        <h5 class="card-title title-cent">Berita Seputar Pariwisata</h5>
                        <p class="card-text text-cent">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".beritapar-example-modal-lg">Lihat Berita </button>
                        <div class="modal fade beritapar-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Berita Seputar Pariwisata</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @foreach($beritapariwisata as $beritapariwisata)
                                <h5>{{$beritapariwisata->judul_beritapariwisata1}}</h5>
                                <p> {{$beritapariwisata->isi_beritapariwisata1}}...</p>
                                <a href="{{$beritapariwisata->linkpariwisata1}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritapariwisata->judul_beritapariwisata2}}</h5>
                                <p> {{$beritapariwisata->isi_beritapariwisata2}}...</p>
                                <a href="{{$beritapariwisata->linkpariwisata2}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritapariwisata->judul_beritapariwisata3}}</h5>
                                <p> {{$beritapariwisata->isi_beritapariwisata3}}...</p>
                                <a href="{{$beritapariwisata->linkpariwisata3}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                            @endforeach
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
                        <img class="card-img-top" src="{{ ('/img/berita-par.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Berita Seputar Salatiga</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".beritasal-example-modal-lg">Lihat Berita </button>
                        <div class="modal fade beritasal-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Berita Seputar Salatiga</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @foreach($beritasalatiga as $beritasalatiga)
                                <h5>{{$beritasalatiga->judul_beritasalatiga1}}</h5>
                                <p> {{$beritasalatiga->isi_beritasalatiga1}}...</p>
                                <a href="{{$beritasalatiga->linksalatiga1}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritasalatiga->judul_beritasalatiga2}}</h5>
                                <p> {{$beritasalatiga->isi_beritasalatiga2}}...</p>
                                <a href="{{$beritasalatiga->linksalatiga2}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                                <hr>
                                <h5>{{$beritasalatiga->judul_beritasalatiga3}}</h5>
                                <p> {{$beritasalatiga->isi_beritasalatiga3}}...</p>
                                <a href="{{$beritasalatiga->linksalatiga3}}" role="button" class="btn btn-primary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">lanjutkan Membaca</a>
                            @endforeach
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
    </div>
    <!-- //Berita -->

    <!-- vidio -->
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
    <!-- //vidio -->
    
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
           