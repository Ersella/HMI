<nav class="custom-navbar navbar navbar navbar-expand-md" style="color: black;" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ url('/') }}/frontend-baru/images/sihmi.png" alt="Logo" width="120px" height="70px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{request()->is('home') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('home') }}">Beranda</a>
                </li>
                <li class="nav-item {{request()->is('daftar-anggota') ? 'active' : ''}}"><a class="nav-link" href="{{ url('daftar-anggota') }}">Daftar Anggota</a></li>
                <li class="nav-item {{request()->is('history') ? 'active' : ''}}"><a class="nav-link" href="{{ url('history') }}">History</a></li>
                <li class="nav-item {{request()->is('gallery') ? 'active' : ''}}"><a class="nav-link" href="{{ url('gallery') }}">Gallery</a></li>
                <li class="nav-item {{request()->is('news') ? 'active' : ''}}"><a class="nav-link" href="{{ url('news') }}">News</a></li>
            </ul>

            <!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{ url('/') }}/frontend-baru/images/user.svg"></a></li>
            </ul> -->
        </div>
    </div>

</nav>