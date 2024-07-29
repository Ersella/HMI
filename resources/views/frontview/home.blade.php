<x-user>
    <!-- Start Hero Section -->
    <div class="hero" style="background-image: url({{ url('/') }}/frontend-baru/images/bg-new.jpg);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h3 style="font-weight: bold;color: white;">Website HMI</h3>
                        <h1>Cabang KETAPANG</h1>
                        <p class="" style="font-weight: 600;color: white;">
                            Selamat datang di Website HMI Cabang KETAPANG, website ini bermaksud menjadi sarana
                            untuk bersilahturahmi, sarana publikasi dan juga media informasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title lilita-font" style="color: black; font-weight:bold;">Pengurus Cabang Ketapang</h2>
                </div>
            </div>
            <div id="pengurusCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($list_pengurus->chunk(4) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach($chunk as $pengurus)
                            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                                <img src="{{ url($pengurus->foto) }}" class="img-fluid mb-5">
                                <h3 style="color: black;">{{ $pengurus->nama }}</h3>
                                <span style="color: black;" class="d-block position mb-4">{{ $pengurus->jabatan }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#pengurusCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pengurusCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Team Section -->


    <div class="information-section" style="background-color: #0C6A2C;">
        <div class="container">
            <h2 class="section-title mb-4 lilita-font" style="color:#fff;">Apa itu HMI?</h2>
            <div class="row justify-content-between">
                <!-- Logo HMI on the left -->
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="{{ url('/') }}/frontend-baru/images/hmi.png" width="40%" alt="HMI Logo" class="img-fluid">
                </div>

                <!-- Explanation in the center -->
                <div class="col-lg-4 text-justify mb-4 mb-lg-0">
                    <p style="color: white;">
                        Himpunan Mahasiswa Islam atau disingkat HMI adalah organisasi Mahasiswa yang didirikan oleh lafran pane beserta 14 mahasiswa STI di Yogyakarta pada tanggal 14 Rabiul Awal 1336 H, bertepatan dengan tanggal 5 Februari 1947. HMI adalah organisasi yang bersifat Independen, organisasi ini memiliki tujuan yaitu terbinanya insan akademis, pencipta, pengabdi, yang bernafaskan islam dan bertanggungjawab atas terwujudnya masyarakat adil makmur yang di-ridhoi Allah Subhanahu Wa Ta’ala. HMI berperan sebagai organisasi perjuangan, dan berfungsi sebagai organisasi kader.
                    </p>
                </div>

                <!-- Images on the right -->
                <div class="col-lg-4 d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <img src="{{ url('/') }}/frontend-baru/images/home-1.jpeg" alt="Image 1" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ url('/') }}/frontend-baru/images/home-2.jpeg" alt="Image 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="information-section" style="background-color: #fff;">
        <div class="container">
            <h2 class="section-title mb-4 lilita-font">KILAS BALIK HMI CABANG KETAPANG?</h2>
            <div class="row justify-content-between">
                <!-- Logo HMI on the left -->
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="{{ url('/') }}/frontend-baru/images/cabang.png" width="80%" alt="HMI Logo" class="img-fluid">
                </div>

                <!-- Explanation in the center -->
                <div class="col-lg-4 text-justify mb-4 mb-lg-0">
                    <p style="color: black;">
                    HMI Cabang Ketapang  didirikan pada tanggal ..................yang telah berdiri selama 26 Tahun, dan telah memiliki banyak anggota. Di Ketapang terdapat 4 Komisariat yang berada di tingkat Kampus, yaitu Komisariat Tarbiyah yang berada di Kampus AL-HAUDL, Komisariat Teknik dan Pertanian yang berada di Kampus Politeknik Negeri Ketapang, serta Komisariat Amki yang berada di Kampus AMKI.
                    </p>
                </div>

                <!-- Images on the right -->
                <div class="col-lg-4 d-flex flex-column justify-content-between">
                    <div class="mb-4">
                        <img src="{{ url('/') }}/frontend-baru/images/home-1.jpeg" alt="Image 1" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ url('/') }}/frontend-baru/images/home-2.jpeg" alt="Image 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user>