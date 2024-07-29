<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGGUNA
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/pengguna" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    @if ($pengguna->foto)
                    <img src="{{ url($pengguna->foto) }}" class="img-fluid" alt="">
                    @else
                    <img src="{{url('/')}}/images/profile.jpg" class="img-fluid" alt="">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/pengguna', $pengguna->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Nama Lengkap</dt>
                                <dd class="col-md-8">: {{ $pengguna->nama }}</dd>
                                <dt class="col-md-4">Username</dt>
                                <dd class="col-md-8">: {{ $pengguna->username }}</dd>
                                <dt class="col-md-4">Email</dt>
                                <dd class="col-md-8">: {{ $pengguna->email }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">

                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>