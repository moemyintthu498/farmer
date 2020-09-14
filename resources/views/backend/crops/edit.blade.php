@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Crop Edit Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('crops.update',$crop->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" value="{{$crop->name}}">
			</div>
		</div>
		
		
		@error('photo')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" name="photo" ><img src="{{asset($crop->photo)}}" class="img-fluid w-50">
				<input type="hidden" name="oldphoto" value="{{$crop->photo}}">
			</div>
		</div>
		
		
		@error('description')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="description">{{$crop->description}}</textarea>
			</div>
		</div>

		@error('soil')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Soil</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="soil" value="{{$crop->soil}}" >
			</div>
		</div>
		@error('season')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Season</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="season" value="{{$crop->season}}" >
			</div>
		</div>
		@error('rainfall')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Rainfall</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="rainfall" value="{{$crop->rainfall}}" >
			</div>
		</div>
		@error('insect')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Insect</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="insect" value="{{$crop->insect}}" >
			</div>
		</div>
		
		

		
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Update" name="btnsubmit">
		</div>
	</form>
</div>
@endsection