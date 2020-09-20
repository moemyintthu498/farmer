@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Machines List</h1>
    		<a href="{{route('machines.create')}}" class="btn btn-info float-right">Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
    					<th>Photo</th>
    					<th>Description</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($machines as $machine)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$machine->name}}</td>
    					<td><img src="{{$machine->photo}}" width="100" height="100"></td>
    					<td>{{$machine->description}}</td>
    					<td>
    						<a href="{{route('machines.show',$machine->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('machines.edit',$machine->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('machines.destroy',$machine->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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