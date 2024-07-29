<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cabang\Pengurus;
use App\Models\Gallery;
use App\Models\History;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data['list_pengurus'] = Pengurus::all();
        return view('frontview.home', $data);
    }

    public function history()
    {
        $data['list_history'] = History::all();
        return view('frontview.history', $data);
    }

    public function gallery()
    {
        $galleries = Gallery::with('detail')->get();
        return view('frontview.gallery', compact('galleries'));
    }

    public function news()
    {
        $data['list_news'] = News::all();
        return view('frontview.news', $data);
    }
}
