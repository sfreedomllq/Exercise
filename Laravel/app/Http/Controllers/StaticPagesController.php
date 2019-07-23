<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        // return 'Home Page.';
        return view('static_pages/home');
    }

    public function help(){
        // return 'Helping Page.';
        return view('static_pages/help');
    }

    public function about(){
        // return 'About.';
        return view('static_pages/about');
    }
}
