@extends('backendtemplate')
@section('content')
<div class="container">
	{{-- <div class="d-sm-flex align-items-center justify-content-between"> --}}

    <h1 class="h3 mb-0 text-gray-800 "><b>Customer Name : </b>{{$order->user->name}}</h1>

		<h1 class="h3 mb-0 text-gray-800 "><b>Voucherno : </b>{{$order->voucherno}}</h1>


	    
	{{-- </div> --}}
	<h1 class="h3 mb-0 text-gray-800 "><b>OrderDate : </b>{{$order->orderdate}}</h1>


  <h1 class="h3 mb-0 text-gray-800 "><b>price : </b>{{$order->total}}</h1>

  {{-- <h1 class="h3 mb-0 text-gray-800 "><b>Qty : </b>{{$order->storethings->pivot->qty}}</h1> --}}


 {{-- @foreach ($order->storethings as $storething)
   <h1 class="h3 mb-0 text-gray-800 "><b>Crop Name : </b>{{$storething->crop->name}}</h1>
@endforeach --}}


  




{{-- <div class="row">
      <div class="col-md-10">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No.</th>
              
              <th>Crop Name</th>
             
              <th>Price</th>
              <td>Qty</td>
              <td>Subtotal</td>
            </tr>
          </thead>
          <tbody>
           
           @php

            $i=1; $total=0;
           @endphp

           @foreach ($order->storethings as $storething)
           
           @php 
               $mm=$storething->buyprice+$storething->buyprice*0.1;
               $subtotal=$mm*$storething->pivot->qty;
               $total+=$subtotal;
            @endphp
					<tr>
						<td>{{$i++}}</td>

            <td>{{$storething->crop->name}}</td>
					  <td>{{$mm}}MMK</td>
            <td>{{$storething->pivot->qty}}</td>
             <td>{{$subtotal}}</td> 
					</tr>
					@endforeach
          <tr class="bg-dark text-white">
            <td colspan="4">Total:</td>
           <td>{{$total}}MMK</td>  
          </tr>
              
          </tbody>
          
        </table>
      </div>
    </div>
    </div> --}}


@endsection