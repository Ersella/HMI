<x-user>
    <div class="lilita-font p-4" style="background-color: #fff;">
        <div class="container">
            <h1>GALLERY</h1>
        </div>
    </div>
    <div class="information-section" style="background-color: #0C6A2C;">
        @foreach($galleries as $galeri)
        <div class="container">
            <h4 style="color:#fff;font-family: 'Times New Roman';">
                {{ $galeri->judul }}
            </h4>
            <hr style="color: white;">
            <div class="row justify-content-center">
                @foreach($galeri->detail as $detail)
                <div class="col-lg-4 mb-4">
                    <div class="card" style="background-color: #0C6A2C; color: white; border: none;">
                        <img src="{{ url('/') }}/{{ $detail->foto }}" alt="Ketua 1" class="card-img-top img-fluid rounded">

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

</x-user>