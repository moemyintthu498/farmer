@extends('backendtemplate')

@section('content')

<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col">
				<h1 class="h3 mb-0 text-gray-800">Price  Create Form</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('pricelists.store')}}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group row {{ $errors->has('pdate') ? 'has-error' : '' }}">
						<label for="inputdate" class="col-sm-2 col-form-label">Date</label>
						<div class="col-sm-5">
							<input type="date" class="form-control" id="inputdate" name="pdate">
							<span class="text-danger">{{ $errors->first('pdate') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('ptime') ? 'has-error' : '' }}">
						<label for="inputPhoto" class="col-sm-2 col-form-label">Time</label>
						<div class="col-sm-5">
							<input type="time" id="inputime" name="ptime" class="d-block">
							<span class="text-danger">{{ $errors->first('ptime') }}</span>
						</div>
					</div>



					<div class="form-group row {{ $errors->has('sellprice') ? 'has-error' : '' }}">
						<label for="inputsellprice" class="col-sm-2 col-form-label">Sell Price</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputsellprice" name="sellprice">
							<span class="text-danger">{{ $errors->first('sellprice') }}</span>
						</div>
					</div>
					<div class="form-group row {{ $errors->has('buyprice') ? 'has-error' : '' }}">
						<label for="inputbuyprice" class="col-sm-2 col-form-label">Buy Price</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputbuyprice" name="buyprice">
							<span class="text-danger">{{ $errors->first('buyprice') }}</span>
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