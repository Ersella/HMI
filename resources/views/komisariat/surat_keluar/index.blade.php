<x-module.komisariat>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">SURAT KELUAR</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('komisariat/surat-keluar/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">NAMA</th>
                    <th style="color: white;" class="text-center">NOMOR</th>
                    <th style=" color: white;" class="text-center">PERIHAL</th>
                    <th style="color: white;" class="text-center">TUJUAN</th>
                    <th style="color: white;" class="text-center">TANGGAL</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($surat_keluar as $sk)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="komisariat/surat-keluar" id="{{ $sk->id }}" />
                                <x-template.button.edit-button url="komisariat/surat-keluar" id="{{ $sk->id }}" />
                                <x-template.button.delete-button url="komisariat/surat-keluar" id="{{ $sk->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $sk->nama }}</td>
                        <td class="text-center">{{ $sk->nomor }}</td>
                        <td class="text-center">{{ $sk->perihal }}</td>
                        <td class="text-center">{{ $sk->tujuan }}</td>
                        <td class="text-center">{{ $sk->tanggal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.komisariat>