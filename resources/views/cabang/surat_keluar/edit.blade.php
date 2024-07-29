<x-module.cabang>
    <section class="content-header">
        <div class="container-fluid">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA SURAT KELUAR
                </h5>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('cabang/surat-keluar') }}" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('cabang/surat-keluar', $surat_keluar->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NAMA</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $surat_keluar->nama }}" required>
                                        @error('nama')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NOMOR</label>
                                        <input type="text" id="name" name="nomor" class="form-control" placeholder="Masukan Nomor" value="{{ $surat_keluar->nomor }}" required>
                                        @error('nomor')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">PERIHAL</label>
                                        <input type="text" id="name" name="perihal" class="form-control" placeholder="Masukan Perihal" value="{{ $surat_keluar->perihal }}" required>
                                        @error('perihal')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">TUJUAN</label>
                                        <input type="text" id="name" name="tujuan" class="form-control" placeholder="Masukan Sumber" value="{{ $surat_keluar->tujuan }}" required>
                                        @error('tujuan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">TANGGAL</label>
                                        <input type="date" id="name" name="tanggal" class="form-control" placeholder="Masukan Tanggal" value="{{ $surat_keluar->tanggal }}" required>
                                        @error('tanggal')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">FILE</label>
                                        <input type="file" id="name" name="url_surat" class="form-control" placeholder="Masukan File" value="{{ $surat_keluar->url_surat }}">
                                        @error('url_surat')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <br>
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