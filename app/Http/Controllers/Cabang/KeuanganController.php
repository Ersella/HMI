<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index()
    {
        $laporanKeuangan = Keuangan::all();
        return view('cabang.keuangan.index', compact('laporanKeuangan'));
    }

    public function store(Request $request)
    {

        $keuangan = new Keuangan();
        $keuangan->tanggal = request('tanggal');
        $keuangan->pemasukan = request('pemasukan');
        $keuangan->pengeluaran = request('pengeluaran');
        $keuangan->keterangan = request('keterangan');
        $keuangan->saldo = request('saldo');
        $keuangan->save();

        return redirect('cabang/keuangan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $keuangan = Keuangan::find($id);
        if (request('tanggal')) $keuangan->tanggal = request('tanggal');
        if (request('pemasukan')) $keuangan->pemasukan = request('pemasukan');
        if (request('pengeluaran')) $keuangan->pengeluaran = request('pengeluaran');
        if (request('keterangan')) $keuangan->keterangan = request('keterangan');
        if (request('saldo')) $keuangan->saldo = request('saldo');
        $keuangan->save();

        return redirect('cabang/keuangan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        return redirect('cabang/keuangan')->with('danger', 'Data Berhasil Dihapus');
    }

    // Tambahkan metode lain sesuai kebutuhan, seperti create, store, edit, update, delete
}
