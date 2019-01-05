<?php

namespace App\Http\Controllers;

use App\Video;
use App\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;

class MyController extends Controller
{
    public function history()
    {
        return view('history');
    }

    public function creators()
    {
        return view('creators');
    }

    public function developers()
    {
        return view('developers');
    }
}
