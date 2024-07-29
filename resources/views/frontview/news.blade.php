<x-user>
    <div class="lilita-font p-4" style="background-color: #fff;">
        <div class="container">
            <h1>NEWS</h1>
        </div>
    </div>
    <div class="information-section" style="background-color: #0C6A2C;">
        @foreach($list_news as $news)
        <div class="container mb-4">
            <h4 style="color:#fff;font-family: 'Times New Roman';">
                {{ $news->judul }}
            </h4>
            <hr style="color: white;">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="card" style="background-color: #0C6A2C; color: white; border: none;">
                        <img src="{{ url('/') }}/{{ $news->foto }}" alt="{{ $news->judul }}" class="card-img-top img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div style="color: white;">
                        {!! $news->deskripsi !!}
                    </div>
                    <p style="font-family: 'Times New Roman';color: yellow;">
                        {{ $news->tanggal }} | {{ $news->penulis }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</x-user>