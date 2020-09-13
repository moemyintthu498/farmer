@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Crops Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($crop->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p><b>Name </b>: {{$crop->name}}</p>
			
			<p><b>Soil </b>: {{$crop->soil}}</p>
			<p><b>Season </b>: {{$crop->season}}</p>
			<p><b>Rainfall</b>: {{$crop->rainfall}}</p>
			<p><b>Insect </b>: {{$crop->insect}}</p>

		</div>
		<div class="col-md-12 my-4">
			<h4><b>Description:</b></h4>
		
		<p>{{$crop->description}}</p>
	</div>
</div>
</div>


@endsection