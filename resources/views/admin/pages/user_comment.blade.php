@extends('admin.layout.app')
@section('title')
 Admin Comment Dashboard
@endsection
@section('admin')

<h1 class="h3 mb-3">User Comment</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Descriptin</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                <tr>
                                    <th scope="row">{{$comment->id}}</th>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->email}}</td>
                                    <td>{{$comment->phone}}</td>
                                    <td>{{$comment->description}}</td>
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