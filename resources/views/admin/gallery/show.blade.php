<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">{{ $galeri->judul }}</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="#addDataModal" data-toggle="modal" class="btn btn-dark float-right"><span class="fa fa-plus"></span>
                Tambah foto</a>
            <!-- MODAL TAMBAH -->
            <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ url('admin/galery-detail') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_gallery" value="{{ $galeri->id }}">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">FOTO</label>
                                    <input type="file" class="form-control" id="name" name="foto" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">FOTO</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($detail as $detail)
                    @if($galeri->id == $detail->id_gallery)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.delete-button url="admin/galery-detail" id="{{ $detail->id }}" />
                            </div>
                        </td>
                        <td class="text-center">
                            <img src="{{ url('/') }}/{{ $detail->foto }}" width="5%" alt="">
                        </td>
                    </tr>

                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="edit{{ $detail->id }}" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataModalLabel">Edit Data Training</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('admin/admin/galery-detail', $detail->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name">FOTO</label>
                                            <input type="text" class="form-control" id="name" value="{{ $detail->foto }}" name="judul">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-module.admin>