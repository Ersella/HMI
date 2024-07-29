<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\SuratKohati;
use Illuminate\Http\Request;

class SuratKohatiController extends Controller
{
    public function index()
    {
        $data['surat_kohati'] = SuratKohati::all();

        return view('cabang.surat_kohati.index', $data);
    }

    public function create()
    {
        return view('cabang.surat_kohati.create');
    }

    public function show($id)
    {
        $sk = SuratKohati::findOrFail($id);
        return view('cabang.surat_kohati.show', compact('sk'));
    }

    public function edit($id)
    {
        return view('cabang.surat_kohati.edit', [
            'sk' => SuratKohati::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $sk = new SuratKohati();
        $sk->no_surat = request('no_surat');
        $sk->perihal = request('perihal');
        $sk->lampiran = request('lampiran');
        $sk->tujuan = request('tujuan');
        $sk->tanggal_hijriah = request('tanggal_hijriah');
        $sk->tanggal_masehi = request('tanggal_masehi');
        $sk->pengurus = request('pengurus');
        $sk->nama_kiri = request('nama_kiri');
        $sk->jabatan_kiri = request('jabatan_kiri');
        $sk->nama_kanan = request('nama_kanan');
        $sk->jabatan_kanan = request('jabatan_kanan');
        $sk->isi_surat = request('isi_surat');

        $sk->save();

        $sk->handleUploadTTDKanan();
        $sk->handleUploadTTDKiri();

        return redirect('cabang/surat-kohati')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $sk = SuratKohati::find($id);
        if (request('no_surat')) $sk->no_surat = request('no_surat');
        if (request('perihal')) $sk->perihal = request('perihal');
        if (request('lampiran')) $sk->lampiran = request('lampiran');
        if (request('tujuan')) $sk->tujuan = request('tujuan');
        if (request('isi_surat')) $sk->isi_surat = request('isi_surat');
        if (request('tanggal_hijriah')) $sk->tanggal_hijriah = request('tanggal_hijriah');
        if (request('tanggal_masehi')) $sk->tanggal_masehi = request('tanggal_masehi');
        if (request('pengurus')) $sk->pengurus = request('pengurus');
        if (request('nama_kiri')) $sk->nama_kiri = request('nama_kiri');
        if (request('jabatan_kiri')) $sk->jabatan_kiri = request('jabatan_kiri');
        if (request('nama_kanan')) $sk->nama_kanan = request('nama_kanan');
        if (request('jabatan_kanan')) $sk->jabatan_kanan = request('jabatan_kanan');

        $sk->save();

        if (request('ttd_kanan')) $sk->handleUploadTTDKanan();
        if (request('ttd_kiri')) $sk->handleUploadTTDKiri();

        return redirect('cabang/surat-kohati')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $sk = SuratKohati::find($id);
        $sk->handleDeleteTTDKanan();
        $sk->handleDeleteTTDKanan();
        $sk->delete();
        return redirect('cabang/surat-kohati')->with('danger', 'Data Berhasil Dihapus');
    }

    public function cetakData($id)
    {
        // Mengambil data surat cabang berdasarkan ID
        $sk = SuratKohati::findOrFail($id);

        return view('cabang.surat_kohati.cetak-data', compact('sk'));
    }
}
