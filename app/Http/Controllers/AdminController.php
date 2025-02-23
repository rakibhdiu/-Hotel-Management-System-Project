<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function admindashboard(){
    return view('admin.admindashboard');
   }

   public function comment(){
      $comments=Contact::all();
      return view('admin.pages.user_comment',compact('comments'));

   }
}
