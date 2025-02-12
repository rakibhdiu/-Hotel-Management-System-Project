<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('frond.home');
    }
    public function about(){
        return view('frond.about');
    }
    public function blog(){
        return view('frond.blog');
    }
    public function contact(){
        return view('frond.contact');
    }
    public function gallery(){
        return view('frond.gallery');
    }
    public function room(){
        return view('frond.room');
    }
}
