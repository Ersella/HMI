<?php

namespace App\Http\Controllers\Komisariat;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
        $data['list_anggota'] = Anggota::all();
        return view('komisariat.anggota.index', $data);
    }

    public function create()
    {
        return view('komisariat.anggota.create');
    }

    public function show($id)
    {
        $anggota = anggota::findOrFail($id);
        return view('komisariat.anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        return view('komisariat.anggota.edit', [
            'anggota' => anggota::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

        $anggota = new anggota();
        $anggota->nama = request('nama');
        $anggota->tempat_lahir = request('tempat_lahir');
        $anggota->tanggal_lahir = request('tanggal_lahir');
        $anggota->umur = request('umur');
        $anggota->no_wa = request('no_wa');
        $anggota->alamat = request('alamat');
        $anggota->status_anggota = 'anggota';
        $anggota->save();

        $anggota->handleUploadFoto();

        return redirect('komisariat/anggota')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $anggota = anggota::find($id);
        if (request('nama')) $anggota->nama = request('nama');
        if (request('tempat_lahir')) $anggota->tempat_lahir = request('tempat_lahir');
        if (request('tanggal_lahir')) $anggota->tanggal_lahir = request('tanggal_lahir');
        if (request('umur')) $anggota->umur = request('umur');
        if (request('no_wa')) $anggota->no_wa = request('no_wa');
        if (request('alamat')) $anggota->alamat = request('alamat');
        if (request('status_anggota')) $anggota->status_anggota = 'anggota';
        $anggota->save();

        if (request('foto')) $anggota->handleUploadFoto();

        return redirect('komisariat/anggota')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $anggota = anggota::find($id);
        $anggota->handleDeleteFoto();
        $anggota->delete();
        return redirect('komisariat/anggota')->with('danger', 'Data Berhasil Dihapus');
    }
}
