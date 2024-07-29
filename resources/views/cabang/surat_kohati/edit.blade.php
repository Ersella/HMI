<x-module.cabang>
    <section class="content-header">
        <div class="container-fluid">
            <div class="card-header py-2">
                <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT SURAT KOHATI
                </h5>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('cabang/surat-kohati') }}" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('cabang/surat-kohati', $sk->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">NOMOR SURAT</label>
                                        <input type="text" name="no_surat" class="form-control" placeholder="Masukan No Surat" value="{{ $sk->no_surat }}" required>
                                        @error('no_surat')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">LAMPIRAN</label>
                                        <input type="text" id="name" name="lampiran" class="form-control" placeholder="Masukan Lampiran" value="{{ $sk->lampiran }}" required>
                                        @error('lampiran')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">PERIHAL</label>
                                        <input type="text" id="name" name="perihal" class="form-control" placeholder="Masukan Perihal" value="{{ $sk->perihal }}" required>
                                        @error('perihal')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">TUJUAN</label>
                                        <input type="text" id="name" name="tujuan" class="form-control" placeholder="Masukan Tujuan Surat" value="{{ $sk->tujuan }}" required>
                                        @error('tujuan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="">ISI SURAT</label>
                                        <textarea class="form-control" name="isi_surat" id="summernote" cols="30" rows="8" required>{{ $sk->isi_surat }}</textarea>
                                        @error('isi_surat')
                                        <p class="text-danger" style="font-size: 12px; margin-bottom: 0px; padding-bottom: 0px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">TANGGAL HIJRIAH</label>
                                        <input type="text" id="name" name="tanggal_hijriah" class="form-control" placeholder="Masukan Tanggal Hijriah" value="{{ $sk->tanggal_hijriah }}" required>
                                        @error('tanggal_hijriah')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">TANGGAL MASEHI</label>
                                        <input type="text" id="name" name="tanggal_masehi" class="form-control" placeholder="Masukan Tanggal Masehi" value="{{ $sk->tanggal_masehi }}" required>
                                        @error('tanggal_masehi')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">PENGURUS</label>
                                        <input type="text" id="name" name="pengurus" class="form-control" placeholder="Masukan Pengurus" value="{{ $sk->pengurus }}" required>
                                        @error('pengurus')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">NAMA KIRI</label>
                                        <input type="text" id="name" name="nama_kiri" class="form-control" placeholder="Masukan Nama Kiri" value="{{ $sk->nama_kiri }}" required>
                                        @error('nama_kiri')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">JABATAN KIRI</label>
                                        <input type="text" id="name" name="jabatan_kiri" class="form-control" placeholder="Masukan Jabatan Kiri" value="{{ $sk->jabatan_kiri }}" required>
                                        @error('jabatan_kiri')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">NAMA KANAN</label>
                                        <input type="text" id="name" name="nama_kanan" class="form-control" placeholder="Masukan Nama Kanan" value="{{ $sk->nama_kanan }}" required>
                                        @error('nama_kanan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">JABATAN KANAN</label>
                                        <input type="text" id="name" name="jabatan_kanan" class="form-control" placeholder="Masukan Jabatan Kanan" value="{{ $sk->jabatan_kanan }}" required>
                                        @error('jabatan_kanan')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">TTD KIRI</label>
                                        <input type="file" id="name" name="ttd_kiri" class="form-control" placeholder="Masukan TTD Kiri">
                                        @error('ttd_kiri')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="control-label">TTD KANAN</label>
                                        <input type="file" id="name" name="ttd_kanan" class="form-control" placeholder="Masukan TTD Kanan">
                                        @error('ttd_kanan')
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