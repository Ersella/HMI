<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">LAPORAN KEUANGAN</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('cabang/laporan_keuangan/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width="10px" class="text-center">NO</th>
                    <th style="color: white;" class="text-center">TANGGAL</th>
                    <th style="color: white;" class="text-center">DESKRIPSI</th>
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
                        <td class="text-center">{{ $laporan->deskripsi }}</td>
                        <td class="text-center">{{ number_format($laporan->pemasukan, 0, ',', '.') }}</td>
                        <td class="text-center">{{ number_format($laporan->pengeluaran, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="cabang/laporan_keuangan" id="{{ $laporan->id }}" />
                                <x-template.button.edit-button url="cabang/laporan_keuangan" id="{{ $laporan->id }}" />
                                <x-template.button.delete-button url="cabang/laporan_keuangan" id="{{ $laporan->id }}" />
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.cabang>