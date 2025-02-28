@extends('admin.layout.app')
@section('title')
 Admin Room Dashboard
@endsection
@section('admin')
@include('sweetalert::alert')

<h1 class="h3 mb-3">Add Room Details</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
					<form action="{{route('admin.room.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="input-group mb-3">
                <input type="text" name="title" placeholder="Enter Room Title" class="form-control" id="inputGroupFile02">
              </div>
              
             <div class="input-group mb-3">
                <input type="text" name="total_room" placeholder="Enter Room number" class="form-control" id="inputGroupFile02">
              </div>
              
             <div class="input-group mb-3">
                <input type="number" name="price" placeholder="Enter Room price" class="form-control" id="inputGroupFile02">
              </div>
              
              <select class="form-select form-select-lg mb-3" name="wifi" aria-label=".form-select-lg example">
                <option selected>Wifi Status</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              
             <div class="input-group mb-3">
                 <input type="file" name="image" class="form-control" id="inputGroupFile02">
                 <label class="input-group-text" for="inputGroupFile02">Upload</label>
               </div>
               <div class="mb-3">
                 <label for="exampleFormControlTextarea1"  class="form-label">Example textarea</label>
                 <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <button type="submit">Submit</button>
             </form>
					</div>
					<div class="card-body">
					</div>
				</div>
			</div>
		</div>

 @endsection