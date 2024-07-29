<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = News::all();
        return view('admin.news.index', $data);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    public function edit($id)
    {
        return view('admin.news.edit', [
            'news' => News::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

        $news = new News();
        $news->penulis = request('penulis');
        $news->judul = request('judul');
        $news->tanggal = request('tanggal');
        $news->deskripsi = request('deskripsi');
        $news->save();

        $news->handleUploadFile();

        return redirect('admin/news')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update($id)
    {
        $news = News::find($id);
        if (request('penulis')) $news->penulis = request('penulis');
        if (request('judul')) $news->judul = request('judul');
        if (request('tanggal')) $news->tanggal = request('tanggal');
        if (request('deskripsi')) $news->deskripsi = request('deskripsi');
        $news->save();

        if (request('foto')) $news->handleUploadFile();

        return redirect('admin/news')->with('success', 'Data Berhasil Ditambahkan');
    }

    function destroy($id)
    {
        $news = News::find($id);
        $news->handleDeleteFile();
        $news->delete();
        return redirect('admin/news')->with('danger', 'Data Berhasil Dihapus');
    }
}
