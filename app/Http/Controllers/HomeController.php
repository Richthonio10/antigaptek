<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $total = ceil(Video::orderBy('created_at', 'DESC')->count()/6);
        $page = 1;
        $videos = Video::orderBy('created_at', 'DESC')->paginate(6);
        return view('index', compact(['total', 'page', 'videos']));
    }
}
