@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Machines Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($machine->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p><b>Name </b>: {{$machine->name}}</p>
			
			<p><b>Power </b>: {{$machine->power}}</p>
			<p><b>Price </b>: {{$machine->price}}</p>
			

		</div>
		<div class="col-md-12 my-4">
			<h4><b>Description:</b></h4>
		
		<p>{{$machine->description}}</p>
	</div>
</div>
</div>


@endsection