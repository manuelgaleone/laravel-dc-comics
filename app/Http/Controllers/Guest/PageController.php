<?php

namespace App\Http\Controllers\Guest;

use App\Models\comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $comics = comic::all();
        return view('home', compact('comics'));
    }
}
