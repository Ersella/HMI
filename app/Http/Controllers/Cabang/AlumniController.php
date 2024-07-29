<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\Cabang\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $data['list_alumni'] = Alumni::all();
        return view('cabang.alumni.index', $data);
    }

    public function create()
    {
        return view('cabang.alumni.create');
    }

    public function show($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('cabang.alumni.show', compact('alumni'));
    }

    public function edit($id)
    {
        return view('cabang.alumni.edit', [
            'alumni' => Alumni::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

        $alumni = new Alumni();
        $alumni->nama = request('nama');
        $alumni->asal_cabang = request('asal_cabang');
        $alumni->no_wa = request('no_wa');
        $alumni->alamat = request('alamat');
        $alumni->save();

        $alumni->handleUploadFile();

        return redirect('cabang/alumni')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $alumni = Alumni::find($id);
        if (request('nama')) $alumni->nama = request('nama');
        if (request('asal_cabang')) $alumni->asal_cabang = request('asal_cabang');
        if (request('no_wa')) $alumni->no_wa = request('no_wa');
        if (request('alamat')) $alumni->alamat = request('alamat');
        $alumni->save();

        if (request('foto')) $alumni->handleUploadFile();

        return redirect('cabang/alumni')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $alumni = Alumni::find($id);
        $alumni->handleDeleteFile();
        $alumni->delete();
        return redirect('cabang/alumni')->with('danger', 'Data Berhasil Dihapus');
    }
}
