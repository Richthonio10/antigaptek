<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function view()
    {
        return view('video');
    }

    public function add(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'category' => 'required',
            'link' => 'required'
        ]);

        if($validate->fails())
            return back()->withErrors($validate);

        $video = new Video();
        $video->user_id = Auth::user()->id;
        $video->title = $request->title;
        $video->category = $request->category;
        $video->link = $request->link;
        $video->save();

        return redirect('/');
    }

    public function viewHandphone()
    {
        $total = ceil(Video::where('category', 'Handphone')->orderBy('created_at', 'DESC')->count()/6);
        $page = 1;
        $videos = Video::where('category', 'Handphone')->orderBy('created_at', 'DESC')->paginate(6);
        return view('handphone', compact(['total', 'page', 'videos']));
    }

    public function viewKomputer()
    {
        $total = ceil(Video::where('category', 'Komputer')->orderBy('created_at', 'DESC')->count()/6);
        $page = 1;
        $videos = Video::where('category', 'Komputer')->orderBy('created_at', 'DESC')->paginate(6);
        return view('komputer', compact(['total', 'page', 'videos']));
    }

    public function viewOther()
    {
        $total = ceil(Video::where('category', 'Other')->orderBy('created_at', 'DESC')->count()/6);
        $page = 1;
        $videos = Video::where('category', 'Other')->orderBy('created_at', 'DESC')->paginate(6);
        return view('other', compact(['total', 'page', 'videos']));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $total = ceil(Video::where('title','LIKE','%'.$search.'%')->orderBy('created_at', 'DESC')->count()/6);
        $page = 1;
        $videos = Video::where('title','LIKE','%'.$search.'%')->orderBy('created_at', 'DESC')->paginate(6);
        return view('search', compact(['total', 'page', 'videos']));
    }
}
