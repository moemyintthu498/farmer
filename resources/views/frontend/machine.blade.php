@extends('frontendtemplate')
@section('front')
<div class="container my-5">
	<h2 ><b>{{$mach->name}}</b></h2>
</div>
<div class="my-5 container">
	<table cellpadding="30px">
		<tbody>
			<tr>
				<td><img src="{{asset($mach->photo)}}" width="200" height="200"></td>
				<td> 
                    <div>
					<label><b><h5>အမည် - </h5></b></label>
					<strong>{{$mach->name}}</strong>
				    </div>
				    <div>
					<label><b><h5 >အကြောင်းအရာ - </h5></b></label>
					<strong>{{$mach->description}}</strong>
				    </div>
				    
				    <div>
					<label><b><h5 >စျေးနှုန်း -  </h5> </b></label>
					<strong>{{$mach->price}} ကျပ်</strong>
				    </div>
				   


				</td>
			</tr>

		</tbody>
	</table>

	
	
</div>


@endsection

 
        