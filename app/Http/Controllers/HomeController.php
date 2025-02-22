<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frond.home');
    }
    public function about(){
        return view('frond.pages.about');
    }
    public function blog(){
        return view('frond.pages.blog');
    }
    public function contact(){
        return view('frond.pages.contact');
    }
    public function gallery(){
        return view('frond.pages.gallery');
    }
    public function room(){
        return view('frond.pages.room');
    }
}
