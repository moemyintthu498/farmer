@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Store Things List</h1>
    		<a href="{{route('storethings.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Crop Name</th>
    					
                        <th>Buy Price</th>
                        <th>Quantity</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($storethings as $storething)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$storething->crop->name}}</td>
    					<td>{{$storething->buyprice}}</td>
    					<td>{{$storething->qty}}</td>
                        

    					<td>
    						<a href="{{route('storethings.show',$storething->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('storethings.edit',$storething->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('storethings.destroy',$storething->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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