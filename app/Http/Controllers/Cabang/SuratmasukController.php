<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    public function index()
    {
        $idPengguna = auth()->user()->id;
        $data['surat_masuk'] = SuratMasuk::where('id_pengguna', $idPengguna)->get();
        return view('cabang.surat_masuk.index', $data);
    }

    public function create()
    {
        return view('cabang.surat_masuk.create');
    }

    public function show($id)
    {
        $surat_masuk = SuratMasuk::findOrFail($id);
        return view('cabang.surat_masuk.show', compact('surat_masuk'));
    }

    public function edit($id)
    {
        return view('cabang.surat_masuk.edit', [
            'surat_masuk' => SuratMasuk::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $surat_masuk = new SuratMasuk();
        $surat_masuk->id_pengguna = request()->user()->id;
        $surat_masuk->nama = request('nama');
        $surat_masuk->nomor = request('nomor');
        $surat_masuk->sumber = request('sumber');
        $surat_masuk->perihal = request('perihal');
        $surat_masuk->tanggal = request('tanggal');
        $surat_masuk->save();

        $surat_masuk->handleUploadFile();

        return redirect('cabang/surat-masuk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $surat_masuk = SuratMasuk::find($id);
        if (request('nama')) $surat_masuk->nama = request('nama');
        if (request('nomor')) $surat_masuk->nomor = request('nomor');
        if (request('perihal')) $surat_masuk->perihal = request('perihal');
        if (request('sumber')) $surat_masuk->sumber = request('sumber');
        if (request('tanggal')) $surat_masuk->tanggal = request('tanggal');
        $surat_masuk->save();

        if (request('url_surat')) $surat_masuk->handleUploadFile();

        return redirect('cabang/surat-masuk')->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $surat_masuk = SuratMasuk::find($id);
        $surat_masuk->handleDeleteFile();
        $surat_masuk->delete();
        return redirect('cabang/surat-masuk')->with('danger', 'Data Berhasil Dihapus');
    }
}
