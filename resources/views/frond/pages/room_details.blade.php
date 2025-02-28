@extends('frond.layout.master')

@section('home')
    Room Details
@endsection
@section('content')
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
     
    <form action="{{route('booking')}}" method="POST">

        <a class="btn btn-primary" href="">Book Now</a>
    </form>

      

    </div>
</div>
@endforeach
</div>
@endsection