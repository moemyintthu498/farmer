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
					<label><b><h5 >ဖြစ်ပွားနိုင်သည့်ရောဂါ - </h5></b></label>
					@foreach($cps->agrpesticides as $agrpesticide)
					<strong class="show" data-id="{{$agrpesticide->id}}"><a href="#" >{{$agrpesticide->disease}} / </a></strong>

                    @endforeach


				    </div>



				</td>
			</tr>

		</tbody>
	</table>

	
	<div id="datashow">
		


	</div>
</div>


@endsection

 @section('script')
        <script type="text/javascript">
		$(document).ready(function () {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$('.show').click(function () {
				let id=$(this).data('id');
				$.post('/showdata',{id:id},function(response){
                
                  //console.log(response.id);


                  var  datashow=$('#datashow');
                  var html='';


                  var html=`

                        <h3>${response.disease}</h3>
                         <img src="/${response.photo}" width="100" height="100">
    					  <div class="text py-3 pb-4 px-3 ">
    						 <h3><a href="#">${response.name}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
                                    
		    				 		<p class="price"><span>${response.price}Ks</span></p>
		    					</div>
	    					</div>
	    					 </div>


                   	`;


                   	datashow.html(html);

         


                   

                   
                    
                
            })   
				// let id=$(this).data('id');//data carrying
				
				// console.log(id);
				
			})
			
		})
		</script>
@endsection


          {{-- //var  datashow=$('#datashow');
          //          var html='';

          //          $.each(response,function (i,v) {

          //          	var html+=`
          //          	       <a href="#" class="img-prod"><img class="img-fluid" src="${v.photo}" alt="Colorlib Template">
    						// <div class="overlay"></div>
    					 //  </a>
    					 //  <div class="text py-3 pb-4 px-3 text-center">
    						// <h3><a href="#">${v.name}</a></h3>
    						// <div class="d-flex">
    						// 	<div class="pricing">
                                    
		    				// 		<p class="price"><span>${v.price}Ks</span></p>
		    				// 	</div>
	    					// </div>
	    					// </div>


          //          	`;


          //          })
                   //console.log(html);
                   //$('#datashow').html(html); --}}