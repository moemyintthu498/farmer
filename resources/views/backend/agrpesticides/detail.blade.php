@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Pesticide Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($agrpesticide->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p><b>Name </b>: {{$agrpesticide->name}}</p>
			
			<p><b>Price </b>: {{$agrpesticide->price}}</p>
			<p><b>Disease</b>: {{$agrpesticide->disease}}</p>
			<p><b>ExpireDate</b>: {{$agrpesticide->expiredate}}</p>
			
			<p><b>Crop Name</b>: {{$agrpesticide->crop->name}}</p>
			

		</div>
		
</div>
</div>


@endsection