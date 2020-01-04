<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'Home';
        return view('layouts.home',compact('title'));
    }
}
