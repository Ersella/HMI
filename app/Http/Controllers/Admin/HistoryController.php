<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $data['history'] = History::all();
        return view('admin.history.index', $data);
    }

    public function create()
    {
        return view('admin.history.create');
    }

    public function show($id)
    {
        $history = History::findOrFail($id);
        return view('admin.history.show', compact('history'));
    }

    public function edit($id)
    {
        return view('admin.history.edit', [
            'history' => History::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

        $history = new History();
        $history->nama = request('nama');
        $history->judul = request('judul');
        $history->jabatan = request('jabatan');
        $history->penjelasan = request('penjelasan');
        $history->periode = request('periode');
        $history->kreator = request('kreator');
        $history->save();

        $history->handleUploadFile();

        return redirect('admin/history')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $history = History::find($id);
        if (request('nama')) $history->nama = request('nama');
        if (request('judul')) $history->judul = request('judul');
        if (request('jabatan')) $history->jabatan = request('jabatan');
        if (request('penjelasan')) $history->penjelasan = request('penjelasan');
        if (request('periode')) $history->periode = request('periode');
        if (request('kreator')) $history->kreator = request('kreator');
        $history->save();

        if (request('foto')) $history->handleUploadFile();

        return redirect('admin/history')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $history = History::find($id);
        $history->handleDeleteFile();
        $history->delete();
        return redirect('admin/history')->with('danger', 'Data Berhasil Dihapus');
    }
}
