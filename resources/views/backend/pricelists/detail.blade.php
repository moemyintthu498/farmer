@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-12">
			<h1 class="h3 mb-0 text-gray-800 d-inline-block">Price Detail Page</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset($pricelist->crop->photo)}}" class="img-fluid">
		</div>
		<div class="col-md-8">
			<p><b>Date </b>: {{$pricelist->pdate}}</p>
			
			<p><b>Time </b>: {{$pricelist->ptime}}</p>
			<p><b>Sell Price </b>: {{$pricelist->sellprice}}</p>
			<p><b>Buy Price</b>: {{$pricelist->buyprice}}</p>
			

		</div>
		
</div>
</div>


@endsection