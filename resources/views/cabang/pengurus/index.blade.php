<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">DATA PENGURUS</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('cabang/pengurus/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">NAMA</th>
                    <th style="color: white;" class="text-center">JABATAN</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_pengurus as $pengurus)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="cabang/pengurus" id="{{ $pengurus->id }}" />
                                <x-template.button.edit-button url="cabang/pengurus" id="{{ $pengurus->id }}" />
                                <x-template.button.delete-button url="cabang/pengurus" id="{{ $pengurus->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $pengurus->nama }}</td>
                        <td class="text-center">{{ $pengurus->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.cabang>