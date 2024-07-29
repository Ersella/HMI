<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">LAPORAN KEUANGAN</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="#addDataModal" data-toggle="modal" class="btn btn-dark float-right"><span class="fa fa-plus"></span>
                Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width="10px" class="text-center">NO</th>
                    <th style="color: white;" class="text-center">TANGGAL</th>
                    <th style="color: white;" class="text-center">KETERANGAN</th>
                    <th style="color: white;" class="text-center">PEMASUKAN</th>
                    <th style="color: white;" class="text-center">PENGELUARAN</th>
                    <th style="color: white;" width="90px" class="text-center">AKSI</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($laporanKeuangan as $laporan)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $laporan->tanggal }}</td>
                        <td class="text-center">{{ $laporan->keterangan }}</td>
                        <td class="text-center">Rp. {{ number_format($laporan->pemasukan, 0, ',', '.') }}</td>
                        <td class="text-center">Rp. {{ number_format($laporan->pengeluaran, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <!-- <x-template.button.info-button url="cabang/keuangan" id="{{ $laporan->id }}" /> -->
                                <a href="#edit{{ $laporan->id }}" data-toggle="modal" class="btn btn-warning float-right"><span class="fa fa-edit"></span></a>
                                <x-template.button.delete-button url="cabang/keuangan" id="{{ $laporan->id }}" />
                            </div>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit{{ $laporan->id }}" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataModalLabel">Edit Data Keuangan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('cabang/keuangan', $laporan->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name">TANGGAL</label>
                                            <input type="date" class="form-control" id="name" name="tanggal" value="{{ $laporan->tanggal }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">PEMASUKAN</label>
                                            <input type="text" class="form-control" id="name" name="pemasukan" value="{{ $laporan->pemasukan }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">PENGELUARAN</label>
                                            <input type="text" class="form-control" id="name" name="pengeluaran" value="{{ $laporan->pengeluaran }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">SALDO</label>
                                            <input type="text" class="form-control" id="name" name="saldo" value="{{ $laporan->saldo }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">KETERANGAN</label>
                                            <input type="text" class="form-control" id="name" name="keterangan" value="{{ $laporan->keterangan }}" required>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('cabang/keuangan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">TANGGAL</label>
                            <input type="date" class="form-control" id="name" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">PEMASUKAN</label>
                            <input type="text" class="form-control" id="name" name="pemasukan" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">PENGELUARAN</label>
                            <input type="text" class="form-control" id="name" name="pengeluaran" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">SALDO</label>
                            <input type="text" class="form-control" id="name" name="saldo" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">KETERANGAN</label>
                            <input type="text" class="form-control" id="name" name="keterangan" required>
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
</x-module.cabang>