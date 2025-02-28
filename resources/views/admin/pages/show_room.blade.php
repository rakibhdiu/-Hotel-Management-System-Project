@extends('admin.layout.app')
@section('title')
 Admin Room Details Dashboard
@endsection
@section('admin')

<h1 class="h3 mb-3">Room Details</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Descriptin</th>
                                <th scope="col">Total Room</th>
                                <th scope="col">Wifi</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                <tr>
                                    <th scope="row">{{$room->id}}</th>
                                    <td>{{$room->title}}</td>
                                    <td>{{$room->image}}</td>
                                    <td>
                                        <img width="250px" src="{{asset('upload/image/' .$room->image)}}" alt="image">
                                    </td>
                                    <td>{{$room->description}}</td>
                                    <td>{{$room->total_room}}</td>
                                    <td>{{$room->wifi}}</td>
                                    <td>
                                        <a href="{{route('edit.room',$room->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
					</div>
					<div class="card-body">
					</div>
				</div>
			</div>
		</div>

 @endsection