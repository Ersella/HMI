<x-module.komisariat>
    <section class="content-header">
        <div class="container-fluid">
            <div class="card-header py-2">
                <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA ANGGOTA
                </h5>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ url('komisariat/anggota') }}" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('komisariat/anggota') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NAMA</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                                        @error('nama')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">TEMPAT LAHIR</label>
                                        <input type="text" id="name" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required>
                                        @error('tempat_lahir')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">TANGGAL LAHIR</label>
                                        <input type="date" id="name" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" required>
                                        @error('tanggal_lahir')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">NO WHATSAPP</label>
                                        <input type="number" id="name" name="no_wa" class="form-control" placeholder="Masukan No WhatsApp" required>
                                        @error('no_wa')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">UMUR</label>
                                        <input type="number" id="name" name="umur" class="form-control" placeholder="Masukan Umur" required>
                                        @error('umur')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <label for="" class="control-label">FOTO</label>
                                        <input type="file" id="name" name="foto" class="form-control" placeholder="Masukan Foto" required>
                                        @error('foto')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="" class="control-label">ALAMAT</label>
                                        <input type="text" id="name" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
                                        @error('alamat')
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
</x-module.komisariat>