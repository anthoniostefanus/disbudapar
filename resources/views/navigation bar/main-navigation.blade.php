
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/navigation-first.css') }}">
    <link rel="icon" href="{{ asset('img/pare.png ') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <section id ="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/salatiga.png ') }}">
                <strong>Simpel Pare</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/beranda#scrollKategori') }}">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/beranda#scrollBerita') }}">Berita</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/beranda#scrollVidio') }}">Vidio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>

                    <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" 
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </section>