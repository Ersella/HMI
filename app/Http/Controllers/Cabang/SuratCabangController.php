<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\SuratCabang;
use Illuminate\Http\Request;

class SuratCabangController extends Controller
{
    public function index()
    {
        $data['surat_cabang'] = SuratCabang::all();

        return view('cabang.surat_cabang.index', $data);
    }

    public function create()
    {
        return view('cabang.surat_cabang.create');
    }

    public function show($id)
    {
        $sc = SuratCabang::findOrFail($id);
        return view('cabang.surat_cabang.show', compact('sc'));
    }

    public function edit($id)
    {
        return view('cabang.surat_cabang.edit', [
            'sc' => SuratCabang::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $sc = new SuratCabang();
        $sc->no_surat = request('no_surat');
        $sc->perihal = request('perihal');
        $sc->lampiran = request('lampiran');
        $sc->tujuan = request('tujuan');
        $sc->tanggal_hijriah = request('tanggal_hijriah');
        $sc->tanggal_masehi = request('tanggal_masehi');
        $sc->pengurus = request('pengurus');
        $sc->nama_kiri = request('nama_kiri');
        $sc->jabatan_kiri = request('jabatan_kiri');
        $sc->nama_kanan = request('nama_kanan');
        $sc->jabatan_kanan = request('jabatan_kanan');
        $sc->isi_surat = request('isi_surat');

        $sc->save();

        $sc->handleUploadTTDKanan();
        $sc->handleUploadTTDKiri();

        return redirect('cabang/surat-cabang')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $sc = SuratCabang::find($id);
        if (request('no_surat')) $sc->no_surat = request('no_surat');
        if (request('perihal')) $sc->perihal = request('perihal');
        if (request('lampiran')) $sc->lampiran = request('lampiran');
        if (request('tujuan')) $sc->tujuan = request('tujuan');
        if (request('isi_surat')) $sc->isi_surat = request('isi_surat');
        if (request('tanggal_hijriah')) $sc->tanggal_hijriah = request('tanggal_hijriah');
        if (request('tanggal_masehi')) $sc->tanggal_masehi = request('tanggal_masehi');
        if (request('pengurus')) $sc->pengurus = request('pengurus');
        if (request('nama_kiri')) $sc->nama_kiri = request('nama_kiri');
        if (request('jabatan_kiri')) $sc->jabatan_kiri = request('jabatan_kiri');
        if (request('nama_kanan')) $sc->nama_kanan = request('nama_kanan');
        if (request('jabatan_kanan')) $sc->jabatan_kanan = request('jabatan_kanan');

        $sc->save();

        if (request('ttd_kanan')) $sc->handleUploadTTDKanan();
        if (request('ttd_kiri')) $sc->handleUploadTTDKiri();

        return redirect('cabang/surat-cabang')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $sc = SuratCabang::find($id);
        $sc->handleDeleteTTDKanan();
        $sc->handleDeleteTTDKanan();
        $sc->delete();
        return redirect('cabang/surat-cabang')->with('danger', 'Data Berhasil Dihapus');
    }

    public function cetakData($id)
    {
        // Mengambil data surat cabang berdasarkan ID
        $sc = SuratCabang::findOrFail($id);

        return view('cabang.surat_cabang.cetak-data', compact('sc'));
    }
}
