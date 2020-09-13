@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Crops List</h1>
    		<a href="{{route('crops.create')}}" class="btn btn-info float-right">Add New</a>
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
    				@foreach($crops as $crop)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$crop->name}}</td>
    					<td>{{$crop->photo}}</td>
    					<td>{{$crop->description}}</td>
    					<td>
    						<a href="{{route('crops.show',$crop->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('crops.edit',$crop->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('crops.destroy',$crop->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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