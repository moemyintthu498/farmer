@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col">
				<h1 class="h3 mb-0 text-gray-800">Pesticide  Create Form</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('agrpesticides.store')}}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="inputname" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputname" name="name">
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
						<label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-5">
							<input type="file" class="form-control" id="inputphoto" name="photo">
							<span class="text-danger">{{ $errors->first('photo') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
						<label for="inputprice" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputprice" name="price" >
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>



					<div class="form-group row {{ $errors->has('disease') ? 'has-error' : '' }}">
						<label for="inputdisease" class="col-sm-2 col-form-label">Disease</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputdisease" name="disease">
							<span class="text-danger">{{ $errors->first('disease') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('expiredate') ? 'has-error' : '' }}">
						<label for="inputexpiredate" class="col-sm-2 col-form-label">Expire Date</label>
						<div class="col-sm-5">
							<input type="date" class="form-control" id="inputexpiredate" name="expiredate">
							<span class="text-danger">{{ $errors->first('expiredate') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('crop') ? 'has-error' : '' }}">
			        <label for="inputcrop" class="col-sm-2 col-form-label">Crop Name</label>
			        <div class="col-sm-5">
			          <select class="form-control form-control-md" id="inputcrop" name="crop">
			            <optgroup label="Choose Crop">
			              @foreach($crops as $crop)
			                <option value="{{$crop->id}}">{{$crop->name}}</option>
			              @endforeach 
			            </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('crop') }}</span>
			        </div>
			      </div>



					<div class="form-group row">
						<div class="col-sm-5">
							<input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> 
@endsection