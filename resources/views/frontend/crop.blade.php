@extends('frontendtemplate')
@section('front')
<div class="container my-5">
	<h2>{{$cps->name}}</h2>
</div>
<div class="my-5 container">
	<table cellpadding="30px">
		<tbody>
			<tr>
				<td><img src="{{asset('nn/images/onion1.jpg')}}" width="200" height="200"></td>
				<td> 
                    <div>
					<label><b>သီးနှံအမည် - </b></label>
					<strong>ကြက်သွန်</strong>
				    </div>
				    <div>
					<label><b>အကြောင်းအရာ - </b></label>
					<strong>ကြက်သွန်</strong>
				    </div>
				    <div>
					<label><b>စိုက်ပျိုးနိုင်သည့် မြေအမျိုးအစား - </b></label>
					<strong>ကြက်သွန်</strong>
				    </div>
				    <div>
					<label><b>ရာသီဥတု - </b></label>
					<strong>ကြက်သွန်</strong>
				    </div>
				    <div>
					<label><b>မိုးရေချိန် - </b></label>
					<strong>ကြက်သွန်</strong>
				    </div>
				    <div>
					<label><b>ဖြစ်ပွားနိုင်သည့်ရောဂါ - </b></label>
					<strong><a href="#">ကြက်သွန်</a>ကြက်သွန်</strong>
				    </div>


				</td>
			</tr>

		</tbody>
	</table>
</div>


@endsection