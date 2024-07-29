<x-module.admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="card-header py-2">
                <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT HISTORY
                </h5>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('admin/history') }}" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('admin/history', $history->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">JUDUL</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" value="{{ $history->judul }}" required>
                                        @error('judul')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">FOTO</label>
                                        <input type="file" id="name" name="foto" class="form-control" placeholder="Masukan Tanggal Hijriah">
                                        @error('foto')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NAMA</label>
                                        <input type="text" id="name" name="nama" class="form-control" placeholder="Masukan Nama" value="{{ $history->nama }}" required>
                                        @error('nama')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">JABATAN</label>
                                        <input type="text" id="name" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="{{ $history->jabatan }}" required>
                                        @error('jabatan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">KREATOR</label>
                                        <input type="text" id="name" name="kreator" class="form-control" placeholder="Masukan Kreator" value="{{ $history->kreator }}" required>
                                        @error('kreator')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">PERIODE</label>
                                        <input type="text" id="name" name="periode" class="form-control" placeholder="Masukan Periode" value="{{ $history->periode }}" required>
                                        @error('periode')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="">PENJELASAN</label>
                                        <textarea class="form-control" name="penjelasan" id="summernote" cols="30" rows="8" required>{{ $history->penjelasan }}</textarea>
                                        @error('penjelasan')
                                        <p class="text-danger" style="font-size: 12px; margin-bottom: 0px; padding-bottom: 0px">* {{ $message }}</p style="font-size: 12px">
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
</x-module.admin>