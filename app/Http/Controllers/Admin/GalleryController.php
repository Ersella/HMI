<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data['galeri'] = Gallery::all();
        return view('admin.gallery.index', $data);
    }

    public function show($id)
    {
        $galeri = Gallery::findOrFail($id);
        $detail = GalleryDetail::all();
        return view('admin.gallery.show', compact('galeri', 'detail'));
    }

    public function store(Request $request)
    {

        $gallery = new Gallery();
        $gallery->judul = request('judul');
        $gallery->save();

        return redirect('admin/galery')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $gallery = Gallery::find($id);
        if (request('judul')) $gallery->judul = request('judul');
        $gallery->save();

        return redirect('admin/galery')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('admin/galery')->with('danger', 'Data Berhasil Dihapus');
    }
}
