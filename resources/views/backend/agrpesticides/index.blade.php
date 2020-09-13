@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Price List</h1>
    		<a href="{{route('agrpesticides.create')}}" class="btn btn-info float-right">Add New</a>
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
    					<th>Price</th>
    					<th>Disease</th>
                        <th>ExpireDate</th>
                        <th>Crop Name</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				@php $i=1; @endphp
    				@foreach($agrpesticides as $agrpesticide)
    				<tr>
    					<td>{{$i++}}</td>
    					<td>{{$agrpesticide->name}}</td>
                        <td>{{$agrpesticide->photo}}</td>
    					<td>{{$agrpesticide->price}}</td>
    					<td>{{$agrpesticide->disease}}</td>
                        <td>{{$agrpesticide->expiredate}}</td>
                        <td>{{$agrpesticide->crop->name}}</td>

    					<td>
    						<a href="{{route('agrpesticides.show',$agrpesticide->id)}}" class="btn btn-primary">Detail</a>
    						<a href="{{route('agrpesticides.edit',$agrpesticide->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('agrpesticides.destroy',$agrpesticide->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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