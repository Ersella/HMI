<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">DATA SURAT KOHATI</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('cabang/surat-kohati/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">NOMOR SURAT</th>
                    <th style="color: white;" class="text-center">PERIHAL</th>
                    <th style=" color: white;" class="text-center">LAMPIRAN</th>
                    <th style="color: white;" class="text-center">TUJUAN</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($surat_kohati as $sk)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="cabang/surat-kohati" id="{{ $sk->id }}" />
                                <x-template.button.edit-button url="cabang/surat-kohati" id="{{ $sk->id }}" />
                                <x-template.button.delete-button url="cabang/surat-kohati" id="{{ $sk->id }}" />
                                <a href="{{ url('cabang/surat-kohati/cetak/' . $sk->id) }}" class="btn btn-success" target="_blank"><i class="fa fa-print"></i></a>
                            </div>
                        </td>
                        <td class="text-center">{{ $sk->no_surat }}</td>
                        <td class="text-center">{{ $sk->perihal }}</td>
                        <td class="text-center">{{ $sk->lampiran }}</td>
                        <td class="text-center">{{ $sk->tujuan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.cabang>