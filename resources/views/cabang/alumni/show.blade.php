<x-module.cabang>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL ALUMNI
        </h5>
    </div>
    <a href="{{ url('cabang/alumni') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <img src="{{ url($alumni->foto) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA</dt>
                    <dd>{{ $alumni->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">ASAL CABANG</dt>
                    <dd>{{ $alumni->asal_cabang }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NO WHATSAPP</dt>
                    <dd>{{ $alumni->no_wa }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">ALAMAT</dt>
                    <dd>{{ $alumni->alamat }}</dd>
                </div>
            </div>

        </div>
    </div>
</x-module.cabang>