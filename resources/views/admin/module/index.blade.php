<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA MODULE
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <a href="{{ url('admin/module/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Module</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th class="text-center" style="color: white;" width="10px">NO</th>
                    <th class="text-center" style="color: white;" width="90px" class="text-center">AKSI</th>
                    <th class="text-center" style="color: white;">NAMA MODULE</th>
                    <th class="text-center" style="color: white;">TAG</th>
                    <th class="text-center" style="color: white;" class="text-center">JUMLAH PENGGUNA</th>
                </thead>
                <tbody>
                    @foreach ($list_module->sortByDesc('created_at')->values() as $module)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/module" id="{{ $module->id }}" />
                                <x-template.button.edit-button url="admin/module" id="{{ $module->id }}" />
                                <x-template.button.delete-button url="admin/module" id="{{ $module->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $module->name }}</td>
                        <td class="text-center">{{ $module->tag }}</td>
                        <td class="text-center">{{ $module->role_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>