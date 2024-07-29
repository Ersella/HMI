<x-module.komisariat>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL ANGGOTA
        </h5>
    </div>
    <a href="{{ url('komisariat/anggota') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <img src="{{ url($anggota->foto) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA</dt>
                    <dd>{{ $anggota->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TEMPAT LAHIR</dt>
                    <dd>{{ $anggota->tempat_lahir }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TANGGAL LAHIR</dt>
                    <dd>{{ $anggota->tanggal_lahir }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NO WHATSAPP</dt>
                    <dd>{{ $anggota->no_wa }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">UMUR</dt>
                    <dd>{{ $anggota->umur }} Tahun</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">ALAMAT</dt>
                    <dd>{{ $anggota->alamat }}</dd>
                </div>
            </div>

        </div>
    </div>
</x-module.komisariat>