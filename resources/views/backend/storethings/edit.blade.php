@extends('backendtemplate')
@section('content')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">StoreThing Edit Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('storethings.update',$storething->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		
		
		@error('crop')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Crop Name</label>
			<div class="col-sm-10">
				<select class="form-control form-control-md" id="inputcrop" name="crop">
					<optgroup label="Choose Crop Name">
						@foreach($crops as $crop)

						<option value="{{ $crop->id }}" @if($storething->crop_id==$crop->id)
							{{'selected'}}
							@endif>{{ $crop->name }}</option>
						
						@endforeach
						


					</optgroup>

				</select>
			</div>
		</div>
		@error('buyprice')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Buy Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="buyprice" value="{{$storething->buyprice}}" >
			</div>
		</div>
		@error('qty')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Quantity</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="qty" value="{{$storething->qty}}" >
			</div>
		</div>

		
		

		
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Update" name="btnsubmit">
		</div>
	</form>
</div>
@endsection