@extends('frond.layout.master')
@section('home')
   About
@endsection
@section('content')
<div class="back_re">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="title">
                <h2>About Us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- about -->
 <div class="about">
    <div class="container-fluid">
      @foreach ($about as $item)
      <div class="row">
         <div class="col-md-5">
            <div class="titlepage">
              
               <p class="margin_0">{{$item->description}} </p>
               <a class="read_more" href="Javascript:void(0)"> Read More</a>
            </div>
         </div>
         <div class="col-md-7">
            <div class="about_img">
               <figure><img src="{{asset('upload/images/' .$item->image)}}" alt="image"/></figure>
            </div>
         </div>
      </div>  
      @endforeach
      
    </div>
 </div>
@endsection