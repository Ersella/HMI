<x-module.cabang>
    <section class="content-header">
        <div class="container-fluid">
            <div class="card-header py-2">
                <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA PENGURUS
                </h5>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('cabang/pengurus') }}" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('cabang/pengurus', $pengurus->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NAMA</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $pengurus->nama }}" required>
                                        @error('nama')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">JABATAN</label>
                                        <input type="text" id="name" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="{{ $pengurus->jabatan }}" required>
                                        @error('jabatan')
                                        <p class=" text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">FOTO</label>
                                        <input type="file" id="name" name="foto" class="form-control" placeholder="Masukan Foto" value="{{ $pengurus->foto }}">
                                        @error('foto')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-tone float-right"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</x-module.cabang>