<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function dashboard(){
        $booked=Booking::all();
        return view('dashboard',compact('booked'));
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
    public function roomDetails($id){
        $details=Room::where('id', $id)->get();
        return view('frond.pages.room_details',compact('details'));
    }
     public function storeBooking(Request $request, $id){
        $request->validate([
            'check_in_date'=>'required|date',
            'check_out_date'=>'required|after:check_in_date'
        ]);
        Booking::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'room_id'=>$id,
            'arrival_date'=>$request->check_in_date,
            'departure_date'=>$request->check_out_date,
        ]);
        Alert::success('Message','Room Booked Successfully');
        return redirect()->back();

     }
}
