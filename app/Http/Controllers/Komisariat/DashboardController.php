<?php

namespace App\Http\Controllers\Komisariat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __invoke()
    {
        return view('komisariat.dashboard.index');
    }
}
