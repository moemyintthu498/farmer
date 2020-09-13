@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Pesticide Edit Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('agrpesticides.update',$agrpesticide->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" value="{{$agrpesticide->name}}">
			</div>
		</div>
		@error('photo')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" name="photo" ><img src="{{asset($agrpesticide->photo)}}" class="img-fluid w-50">
				<input type="hidden" name="oldphoto" value="{{$agrpesticide->photo}}">
			</div>
		</div>
		
		
		
		
		
		@error('price')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label"> Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="price" value="{{$agrpesticide->price}}" >
			</div>
		</div>
		@error('disease')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Disease</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="disease" value="{{$agrpesticide->disease}}" >
			</div>
		</div>
		@error('expiredate')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">ExpireDate</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" name="expiredate" value="{{$agrpesticide->expiredate}}" >
			</div>
		</div>
		
		@error('crop')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Crop Name</label>
			<div class="col-sm-10">
				<select class="form-control form-control-md" id="inputcrop" name="crop">
					<optgroup label="Choose Crop Name">
						@foreach($crops as $crop)

						<option value="{{ $crop->id }}">{{ $crop->name }}</option>
						
						@endforeach
						


					</optgroup>

				</select>
			</div>
		</div>
		
		

		
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Update" name="btnsubmit">
		</div>
	</form>
</div>
@endsection