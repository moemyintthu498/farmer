@extends('frontendtemplate')
@section('front')
<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">

            <h2 class="mb-4">ဝယ်ယူရရှိနိုင်သော သီးနှံများ</h2>
            <p><h5>လူကြီးမင်းတို့သည် လိုအိပ်သော သီးနှံများကို မှန်ကန်သည့် အလေးချိန်/ချိုသာသော စျေးနှုန်းတို့ဖြင့် တစ်နေရာထဲထွင် လွယ်ကူစွာဝယ်ယူရရှိနိုင်ပါပီ
            <h5></p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			@foreach($pricelists as $pricelist)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset($pricelist->crop->photo)}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$pricelist->crop->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
                                    
		    						<p class="price"><span>{{$pricelist->sellprice}}Ks</span></p>
		    					</div>
	    					</div>

    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							
	    							<a href="{{route('cartpage')}}" class="buy-now d-flex justify-content-center align-items-center mx-1"  >
	    								<span><i class="ion-ios-cart mm" data-id="{{$pricelist->id}}" data-photo="{{$pricelist->crop->photo}}" data-name="{{$pricelist->crop->name}}" data-price="{{$pricelist->sellprice}}"></i></span>
	    							</a>
	    							
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
                @endforeach
    			
    		</div>
    	</div>
    </section>
    @endsection