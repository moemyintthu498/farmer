@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Price List</h1>
    		<a href="{{route('pricelists.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Date</th>
    					<th>Time</th>
    					<th>Sell Price</th>
                        <th>Buy Price</th>
                        <th>Crop Name</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($pricelists as $pricelist)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$pricelist->pdate}}</td>
    					<td>{{$pricelist->ptime}}</td>
    					<td>{{$pricelist->sellprice}}</td>
                        <td>{{$pricelist->buyprice}}</td>
                        <td>{{$pricelist->crop->name}}</td>

    					<td>
    						<a href="{{route('pricelists.show',$pricelist->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('pricelists.edit',$pricelist->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('pricelists.destroy',$pricelist->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection