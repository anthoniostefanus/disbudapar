
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
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#scrollBerita') }}">Informasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#scrollVidio') }}">Vidio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#scrollKontak') }}">Kontak</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="kontak">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>