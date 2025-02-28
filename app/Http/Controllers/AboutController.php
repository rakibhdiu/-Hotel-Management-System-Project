<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
   
    public function addAbout(){
        return view('admin.pages.about');
    }
    public function storeAbout(Request $request){
        $request->validate([
            'description'=>'required',
            'image'=>'required||image|mimes:png,jpeg,jpg,gif'
        ]);
        $imgName=time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('upload/images'),$imgName);
        About::create([
            'image'=>$imgName,
            'description'=>$request->description
        ]);
        Alert::success('Message','Hotel Room About section added successfully');
        return redirect()->back();
    }
    
}
