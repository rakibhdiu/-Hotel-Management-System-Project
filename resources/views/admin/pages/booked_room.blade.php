@extends('admin.layout.app')
@section('title')
 Admin Room Details Dashboard
@endsection
@section('admin')

<h1 class="h3 mb-3">Booking Room</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Room ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">Arrival Date</th>
                                <th scope="col">Departure Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($booked as $book)
                                <tr>
                                    <th scope="row">{{$book->id}}</th>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->email}}</td>
                                    
                                    <td>{{$book->room_id}}</td>
                                    <td>{{$book->arrival_date}}</td>
                                    <td>{{$book->departure_date}}</td>
                                    <td></td>
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