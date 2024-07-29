<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    public function index()
    {
        $idPengguna = auth()->user()->id;
        $data['surat_keluar'] = SuratKeluar::where('id_pengguna', $idPengguna)->get();
        return view('cabang.surat_keluar.index', $data);
    }

    public function create()
    {
        return view('cabang.surat_keluar.create');
    }

    public function show($id)
    {
        $surat_keluar = SuratKeluar::findOrFail($id);
        return view('cabang.surat_keluar.show', compact('surat_keluar'));
    }

    public function edit($id)
    {
        return view('cabang.surat_keluar.edit', [
            'surat_keluar' => SuratKeluar::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $surat_keluar = new SuratKeluar();
        $surat_keluar->id_pengguna = request()->user()->id;
        $surat_keluar->nama = request('nama');
        $surat_keluar->nomor = request('nomor');
        $surat_keluar->tujuan = request('tujuan');
        $surat_keluar->perihal = request('perihal');
        $surat_keluar->tanggal = request('tanggal');
        $surat_keluar->save();

        $surat_keluar->handleUploadFile();

        return redirect('cabang/surat-keluar')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $surat_keluar = SuratKeluar::find($id);
        if (request('nama')) $surat_keluar->nama = request('nama');
        if (request('nomor')) $surat_keluar->nomor = request('nomor');
        if (request('perihal')) $surat_keluar->perihal = request('perihal');
        if (request('tujuan')) $surat_keluar->tujuan = request('tujuan');
        if (request('tanggal')) $surat_keluar->tanggal = request('tanggal');
        $surat_keluar->save();

        if (request('url_surat')) $surat_keluar->handleUploadFile();

        return redirect('cabang/surat-keluar')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $surat_keluar = SuratKeluar::find($id);
        $surat_keluar->handleDeleteFile();
        $surat_keluar->delete();
        return redirect('cabang/surat-keluar')->with('danger', 'Data Berhasil Dihapus');
    }
}
