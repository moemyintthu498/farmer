@extends('backendtemplate')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Machine Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('machines.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputPhoto" name="photo" class="d-block">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>
			     
			      
			      <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			          <textarea id="inputDescription" class="form-control" name="description"></textarea>
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>
			      <div class="form-group row {{ $errors->has('power') ? 'has-error' : '' }}">
			        <label for="inputpower" class="col-sm-2 col-form-label">Power</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputpower" name="power">
			          <span class="text-danger">{{ $errors->first('power') }}</span>
			        </div>
			        </div>
			         
			       <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
						<label for="inputprice" class="col-sm-2 col-form-label"> Price</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputprice" name="price">
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>  
			       
			      {{-- </div> --}}
			      
			      
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