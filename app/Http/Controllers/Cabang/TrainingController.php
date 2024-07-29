<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    function index()
    {
        $trainings = Training::all();
        return view('cabang.training.index', compact('trainings'));
    }

    public function store(Request $request)
    {

        $training = new Training();
        $training->nama = request('nama');
        $training->save();

        $training->handleUploadPdf();
        $training->handleUploadWord();

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $training = Training::find($id);
        if (request('nama')) $training->nama = request('nama');
        $training->save();

        if (request('berkas_pdf')) $training->handleUploadPdf();
        if (request('berkas_word')) $training->handleUploadWord();

        return redirect()->back()->with('success', 'Data Berhasil Diedit');
    }

    function destroy($id)
    {
        $training = Training::find($id);
        $training->handleDeletePdf();
        $training->handleDeleteWord();
        $training->delete();

        return redirect()->back()->with('danger', 'Data Berhasil Dihapus');
    }
}
