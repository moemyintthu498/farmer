@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">StoreThing Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($storething->crop->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p><b>Crop Name </b>: {{$storething->crop->name}}</p>
			
			
			
			<p><b>Buy Price</b>: {{$storething->buyprice}}</p>
			<p><b>Quantity </b>: {{$storething->qty}}</p>
			

		</div>
		
</div>
</div>


@endsection