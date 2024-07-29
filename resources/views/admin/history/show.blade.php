<x-module.admin>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL HISTORY
        </h5>
    </div>
    <a href="{{ url('admin/history') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <img src="{{ url($history->foto) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">JUDUL</dt>
                    <dd>{{ $history->judul }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA</dt>
                    <dd>{{ $history->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JABATAN</dt>
                    <dd>{{ $history->jabatan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIODE</dt>
                    <dd>{{ $history->periode }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">KREATOR</dt>
                    <dd>{{ $history->kreator }}</dd>
                </div>
            </div>

        </div>
    </div>
</x-module.admin>