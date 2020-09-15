@extends('frontendtemplate')
@section('front')
<div class="container my-5">
	<h2 >{{$cps->name}}</h2>
</div>
<div class="my-5 container">
	<table cellpadding="30px">
		<tbody>
			<tr>
				<td><img src="{{asset($cps->photo)}}" width="200" height="200"></td>
				<td> 
                    <div>
					<label><b><h5>သီးနှံအမည် - </h5></b></label>
					<strong>{{$cps->name}}</strong>
				    </div>
				    <div>
					<label><b><h5 >အကြောင်းအရာ - </h5></b></label>
					<strong>{{$cps->description}}</strong>
				    </div>
				    <div>
					<label><b><h5 >စိုက်ပျိုးနိုင်သည့် မြေအမျိုးအစား - </h5></b></label>
					<strong>{{$cps->soil}}</strong>
				    </div>
				    <div>
					<label><b><h5 >စိုက်ပျိုးနိုင်သည့် ရာသီဥတု -  </h5> </b></label>
					<strong>{{$cps->season}}</strong>
				    </div>
				    <div>
					
				    <div>
					<label><b><h5 >ဖြစ်ပွားနိုင်သည့်ရောဂါ - </h5></b></label>
					<strong>{{$cps->insect}}</strong>
				    </div>


				</td>
			</tr>

		</tbody>
	</table>
</div>


@endsection