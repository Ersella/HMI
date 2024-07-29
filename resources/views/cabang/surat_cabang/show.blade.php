<x-module.cabang>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL SURAT CABANG
        </h5>
    </div>
    <a href="{{ url('cabang/surat-cabang') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR SURAT</dt>
                    <dd>{{ $sc->no_surat }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIHAL</dt>
                    <dd>{{ $sc->perihal }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">LAMPIRAN</dt>
                    <dd>{{ $sc->lampiran }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TUJUAN</dt>
                    <dd>{{ $sc->tujuan }}</dd>
                </div>
                <hr>
                <div class="col-md-12">
                    <label class="font-weight-bold">ISI SURAT</label>
                    <textarea class="form-control" rows="10" disabled>{{ strip_tags($sc->isi_surat) }}</textarea>
                </div>
            </div>

        </div>
    </div>
</x-module.cabang>