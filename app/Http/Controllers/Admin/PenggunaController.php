<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pengguna;
use App\Models\Admin\Role;

class PenggunaController extends Controller
{
    public function index()
    {
        $data['list_pengguna'] = Pengguna::all();
        return view('admin.pengguna.index', $data);
    }

    public function create()
    {
        return view('admin.pengguna.create');
    }

    public function store()
    {

        $pengguna = new Pengguna();
        $pengguna->nama = request('nama');
        $pengguna->username = request('username');
        $pengguna->email = request('email');
        $pengguna->password = request('password');
        $pengguna->save();

        $pengguna->handleUploadFoto();

        return redirect('admin/pengguna')->with('success', 'Data Pengguna Berhasil Ditambahkan');
    }

    public function show(Pengguna $pengguna)
    {
        $data['pengguna'] = $pengguna;
        return view('admin.pengguna.show', $data);
    }

    public function edit(Pengguna $pengguna)
    {
        $data['pengguna'] = $pengguna;
        return view('admin.pengguna.edit', $data);
    }

    public function update(Pengguna $pengguna)
    {
        if (request('nama')) $pengguna->nama = request('nama');
        if (request('username')) $pengguna->username = request('username');
        if (request('email')) $pengguna->email = request('email');
        if (request('password')) $pengguna->password = request('password');
        $pengguna->save();

        if (request('foto')) $pengguna->handleUploadFoto();

        return redirect('admin/pengguna')->with('success', 'Data Pengguna Berhasil Diedit');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->handleDelete();

        $list_role = Role::where('id_pengguna', $pengguna->id)->get();
        if ($list_role->count() > 0) {
            $list_role->each(function ($role) {
                $role->delete();
            });
        }

        $pengguna->delete();

        return redirect('admin/pengguna')->with('danger', 'Data Pengguna Berhasil Dihapus');
    }
}
