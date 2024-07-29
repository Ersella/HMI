<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\Cabang\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $data['list_pengurus'] = Pengurus::all();
        return view('cabang.pengurus.index', $data);
    }

    public function create()
    {
        return view('cabang.pengurus.create');
    }

    public function show($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('cabang.pengurus.show', compact('pengurus'));
    }

    public function edit($id)
    {
        return view('cabang.pengurus.edit', [
            'pengurus' => Pengurus::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

        $pengurus = new Pengurus();
        $pengurus->nama = request('nama');
        $pengurus->jabatan = request('jabatan');
        $pengurus->save();

        $pengurus->handleUploadFile();

        return redirect('cabang/pengurus')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $pengurus = Pengurus::find($id);
        if (request('nama')) $pengurus->nama = request('nama');
        if (request('jabatan')) $pengurus->jabatan = request('jabatan');
        $pengurus->save();

        if (request('foto')) $pengurus->handleUploadFile();

        return redirect('cabang/pengurus')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $pengurus = Pengurus::find($id);
        $pengurus->handleDeleteFile();
        $pengurus->delete();
        return redirect('cabang/pengurus')->with('danger', 'Data Berhasil Dihapus');
    }
}
