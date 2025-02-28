<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    public function addRoom(){
        return view('admin.pages.room');
    }
    public function storeRoom(Request $request){
        $request->validate([
            'title' =>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpeg,jpg,gif',
            'price'=>'required',
            'wifi' =>'required',
            'total_room'=>'required'
            
        ]);
        $imgName=time(). '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('upload/image'),$imgName);
        Room::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$imgName,
            'price'=>$request->price,
            'wifi'=>$request->wifi,
            'total_room'=>$request->total_room,
        ]);
        Alert::success('Message','Room Details Uploaded Successfully');
        return redirect()->route('admin.show.room');

    }
    public function showRoom(){
        $rooms=Room::all();
        return view('admin.pages.show_room',compact('rooms'));
    }
    public function editRoom($id){
        $edit=Room::find($id);
        return view('admin.pages.edit_room',compact('edit'));

    }
    public function updateRoom(Request $request, $id){
        $update= $request->validate([
            'title' =>'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:png,jpeg,jpg,gif',
            'price'=>'required',
            'wifi' =>'required',
            'total_room'=>'required'
            
        ]);
        $data=Room::find($id);

        if ($request->hasFile('image')) {
          
            if ($data->image && file_exists(public_path('upload/image/' .$data->image))) {
                unlink(public_path('upload/image/' .$data->image));
            }
            $imgName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/image'), $imgName);
            $update['image'] =  $imgName;
        }
        $data->update($update);
        Alert::success('Message','Room Details Updated Successfully');
        return redirect()->route('admin.show.room');

    }
}
