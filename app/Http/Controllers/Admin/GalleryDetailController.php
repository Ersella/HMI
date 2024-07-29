<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryDetail;
use Illuminate\Http\Request;

class GalleryDetailController extends Controller
{
    public function store(Request $request)
    {

        $gallery = new GalleryDetail();
        $gallery->id_gallery = request('id_gallery');
        $gallery->save();
        $gallery->handleUploadFile();

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $gallery = GalleryDetail::find($id);
        $gallery->save();
        if (request('foto')) $gallery->handleUploadFile();

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $gallery = GalleryDetail::find($id);
        $gallery->handleDeleteFile();
        $gallery->delete();
        return redirect()->back()->with('danger', 'Data Berhasil Dihapus');
    }
}
