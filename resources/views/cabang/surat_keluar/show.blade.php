<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL SURAT KELUAR
        </h5>
    </div>

    <a href="{{ url('cabang/surat-keluar') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA SURAT</dt>
                    <dd>{{ $surat_keluar->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR SURAT</dt>
                    <dd>{{ $surat_keluar->nomor }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIHAL SURAT</dt>
                    <dd>{{ $surat_keluar->perihal }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TUJUAN SURAT</dt>
                    <dd>{{ $surat_keluar->tujuan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TANGGAL</dt>
                    <dd>{{ $surat_keluar->tanggal }}</dd>
                </div>
            </div>
            <hr>
            <a class="text-white btn btn-block btn-dark col-md-2" href="{{ url('/') }}/{{ $surat_keluar->url_surat }}" download>
                <span><i class="fas fa-download"></i> Download Dokumen</span>
            </a>
        </div>
    </div>
</x-module.cabang>