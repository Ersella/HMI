<x-module.cabang>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL SURAT KOHATI
        </h5>
    </div>
    <a href="{{ url('cabang/surat-kohati') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NOMOR SURAT</dt>
                    <dd>{{ $sk->no_surat }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIHAL</dt>
                    <dd>{{ $sk->perihal }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">LAMPIRAN</dt>
                    <dd>{{ $sk->lampiran }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">TUJUAN</dt>
                    <dd>{{ $sk->tujuan }}</dd>
                </div>
                <hr>
                <div class="col-md-12">
                    <label class="font-weight-bold">ISI SURAT</label>
                    <textarea class="form-control" rows="10" disabled>{{ strip_tags($sk->isi_surat) }}</textarea>
                </div>
            </div>

        </div>
    </div>
</x-module.cabang>