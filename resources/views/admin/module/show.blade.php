<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL MODULE
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/module" />
    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/module', $module->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-4">NAMA APP</dt>
                        <dd class="col-8">{{ $module->app }}</dd>
                        <dt class="col-4">NAMA MODULE</dt>
                        <dd class="col-8">{{ $module->name }}</dd>
                        <dt class="col-4">TITLE</dt>
                        <dd class="col-8">{{ $module->title }}</dd>
                        <dt class="col-4">SUBTITLE</dt>
                        <dd class="col-8">{{ $module->subtitle }}</dd>
                    </dl>
                </div>
                <div class="col-md-5">
                    <dl class="row">
                        <dt class="col-4">TAG</dt>
                        <dd class="col-8">{{ $module->tag }}</dd>
                        <dt class="col-4">URL</dt>
                        <dd class="col-8">{{ $module->url }}</dd>
                        <dt class="col-4">BACKGROUND COLOR</dt>
                        <dd class="col-8">{{ $module->color }}</dd>
                        <dt class="col-4">MENU VIEW</dt>
                        <dd class="col-8">{{ $module->menu }}</dd>
                    </dl>
                </div>
                <div class="col-md-2">
                    <x-template.module-box url="{{ $module->url }}" color="{{ $module->color }}" title="{{ $module->title }}" subtitle="{{ $module->subtitle }}" />
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                PENGGUNA
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/module/add-role') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_module" value="{{ $module->id }}">
                        <div class="form-group">
                            <select class="select2bs4 form-control" name="id_pengguna" style="width: 100%;">
                                <option selected="selected">Pilih Nama Pengguna</option>
                                @foreach ($list_pengguna as $pengguna)
                                <option value="{{ $pengguna->id }}">{{ $pengguna->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <br>
                    <table id="data-table" class="table table-datatable table-bordered">
                        <thead class="bg-dark">
                            <th class="text-center" style="color: white;" width="10px">NO.</th>
                            <th class="text-center" style="color: white;" width="100px">AKSI</th>
                            <th class="text-center" style="color: white;">NAMA</th>
                        </thead>
                        <tbody>
                            @foreach ($module->role as $role)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ url('admin/module/delete-role', $role->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                                <td class="text-center">{{ $role->pengguna->nama }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>