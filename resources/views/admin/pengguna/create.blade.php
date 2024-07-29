<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA PENGGUNA
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/pengguna" />
    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/pengguna') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">NAMA</label>
                            @if ($errors->has('nama'))
                            <label for="" class="label text-danger">{{ $errors->get('nama')[0] }}</label>
                            @endif
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">USERNAME</label>
                            @if ($errors->has('username'))
                            <label for="" class="label text-danger">{{ $errors->get('username')[0] }}</label>
                            @endif
                            <input type="text" name="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">EMAIL</label>
                            @if ($errors->has('email'))
                            <label for="" class="label text-danger">{{ $errors->get('email')[0] }}</label>
                            @endif
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="control-label">FOTO</label>
                        @if ($errors->has('foto'))
                        <label for="" class="label text-danger">{{ $errors->get('foto')[0] }}</label>
                        @endif
                        <input type="file" name="foto" accept=".jpg, .png, .jpeg" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">PASSWORD</label>
                            @if ($errors->has('password'))
                            <label for="" class="label text-danger">{{ $errors->get('password')[0] }}</label>
                            @endif
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-tone float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>