<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA PENGGUNA
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/pengguna/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th class="text-center" style="color: white;">NAMA PENGGUNA</th>
                </thead>
                <tbody>
                    @foreach ($list_pengguna->sortByDesc('created_at')->values() as $pengguna)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/pengguna" id="{{ $pengguna->id }}" />
                                <x-template.button.edit-button url="admin/pengguna" id="{{ $pengguna->id }}" />
                                <x-template.button.delete-button url="admin/pengguna" id="{{ $pengguna->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $pengguna->nama }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>