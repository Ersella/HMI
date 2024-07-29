<x-user>
    <div class="lilita-font p-4" style="background-color: #fff;">
        <div class="container">
            <h1>HISTORY</h1>
        </div>
    </div>
    <div class="information-section" style="background-color: #0C6A2C;">
        <div class="container">
            <h4 style="color:#fff;font-family: 'Times New Roman';">
                KILAS BALIK SEJARAH KETUA UMUM HMI CABANG KETAPANG
            </h4>
            <hr style="color: white;">
            <div class="row justify-content-center">
                @foreach($list_history as $history)
                <div class="col-lg-4 mb-4">
                    <div class="card" style="background-color: #0C6A2C; color: white; border: none;">
                        <img src="{{ url('/') }}/{{ $history->foto }}" alt="Ketua 1" class="card-img-top img-fluid rounded">
                        <h5 style="font-family: 'Times New Roman';" class="card-title mt-3">{{ $history->nama }}</h5>
                        <p style="font-family: 'Times New Roman';" class="card-text">{{ $history->jabatan }}</p>
                        <p style="font-family: 'Times New Roman';" class="card-text">{{ $history->periode }}</p>
                        <p style="font-family: 'Times New Roman';color: yellow;" class="card-text">{{ $history->tanggal }} | {{ $history->kreator }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-user>