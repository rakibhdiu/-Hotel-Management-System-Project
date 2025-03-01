@extends('frond.layout.master')

@section('home')
    Room Details
@endsection
@section('content')
@include('sweetalert::alert')
<div class="container my-5">
    @foreach ($details as $detail)
<div class="row">
    <div class="col-md-6">
        <!-- Main Image -->
        <div id="carouselExample" class="carousel slide">
            
                <div class="carousel-item active">
                    <img src="{{asset('upload/image/' .$detail->image)}}" class="d-block w-100" alt="Blazer Jacket">
                </div>
          </div>
        <!-- Thumbnails -->
        <div class="d-flex mt-3">
            <img src="{{asset('images/room1.jpg')}}" class="img-thumbnail me-2" alt="Thumbnail" style="width: 80px;">
            <img src="{{asset('images/room2.jpg')}}" class="img-thumbnail me-2" alt="Thumbnail" style="width: 80px;">
            <img src="{{asset('images/room3.jpg')}}" class="img-thumbnail me-2" alt="Thumbnail" style="width: 80px;">
        </div>
    </div>
    <div class="col-md-6">
     
      <h1>{{$detail->title}}</h1>
      <p><strong>${{$detail->price}}</strong></p>
      <p>About Room: {{$detail->description}}</p>
      <h6>Total Number of Room: {{$detail->total_room}}</h6>
      <h6>Wifi:{{$detail->wifi}}</h6>
     
        <form action="{{route('booking',$detail->id)}}" method="POST">
            @csrf
        <label for="">Name</label>
        <input type="text" name="name" value="{{ optional(Auth::user())->name }}"><br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{ optional(Auth::user())->email }}"><br>
        <label for="check_in_date">Check-in Date:</label>
        <input type="date" id="check_in_date" name="check_in_date" 
               min="{{ now()->toDateString() }}" required 
               value="{{ old('check_in_date', now()->toDateString()) }}"><br>
        
        <label for="check_out_date">Check-out Date:</label>
        <input type="date" id="check_out_date" name="check_out_date"
               min="{{ now()->addDay()->toDateString() }}" required 
               value="{{ old('check_out_date', now()->addDay()->toDateString()) }}"><br>
        
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>

      

    </div>
</div>
@endforeach
</div>
@endsection