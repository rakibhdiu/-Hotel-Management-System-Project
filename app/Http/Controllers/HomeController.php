<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function home(){
        $about=About::all();
        return view('frond.home',compact('about'));
    }
    public function about(){
        $about=About::all();
        return view('frond.pages.about',compact('about'));
    
    }
    public function blog(){
        return view('frond.pages.blog');
    }
    public function gallery(){
        return view('frond.pages.gallery');
    }
    public function room(){
        $rooms=Room::all();
        return view('frond.pages.room',compact('rooms'));
    }
}
