@extends('admin.layout.app')
@section('title')
 Admin About Dashboard
@endsection
@section('admin')
@include('sweetalert::alert')

<h1 class="h3 mb-3">About Section</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
					<form action="{{route('admin.about.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
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