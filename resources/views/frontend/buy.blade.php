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
                            <p class="price"><span>{{$pricelist->sellprice}}Ks</span></p>
                            <a href="#mform" class="buy-now d-flex justify-content-center align-items-center mx-1 "  >
    						   <input type="submit" name="btn" value="ဝယ်ရန်" class="mm  btn-secondary text-white" data-id="{{$pricelist->id}}" data-cropid="{{$pricelist->crop->id}}" data-name="{{$pricelist->crop->name}}" data-price="{{$pricelist->sellprice}}">
                            </a>

    						
    					</div>
    				</div>
    			</div>
                @endforeach
    			
    		</div>
    	</div>

        <div class="container my-5 " >
            <form id="mform" method="post" action="{{route('orders.store')}}">
               @csrf
            <h3 class="text-center my-5">လူကြီးမင်းတို့ သီနှံဝယ်ယူရန် Form ဖြည့်ပေးပါ</h3>

            {{-- <div class="form-group col-md-6 my-5">
                <label>Crop ID</label>
                <input type="hidden" name="cropid" id="cropid" class="form-control" readonly="readonly">
            </div>

 --}}
           <div style="margin-left: 250px">
            <div class="form-group row my-5">
                <label  class="col-sm-2 col-form-label "><b>သီနှံအမည်</b></label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" readonly="readonly">
                </div>
            </div>
            <div class="form-group row my-5">
                <label class="col-sm-2 col-form-label my-3"><b>စျေးနှုန်း</b></label>
                <div class="col-sm-6">
                  <input type="number" name="price" id="price" class="form-control" readonly="readonly" >
                </div>
            </div>

            <div class="form-group row my-5">
                <label class="col-sm-2 col-form-label "><b>ပမာဏ</b></label>
                <div class="col-sm-6">
                    <input type="number" name="qty" class="form-control" id="qty">
                 </div>
            </div>
            <div class="form-group row my-5">
                <label class="col-sm-2 col-form-label "><b>ကုန်ကျငွေ စုစုပေါင်း</b></label>
               <div class="col-sm-6">
                <input type="number" name="total" id="total" class="form-control" placeholder="နှိပ်ပါ" readonly="readonly">
              </div>
            </div>
           

    

       @role("Customer")
                                <button class="btn btn-primary btn-block mainfullbtncolor checkoutbtn buy_now col-sm-4" style="margin-left: 270px"> 
                                    မှာလို့ရပါပီ
                                </button>
                                @else
                                <a href="{{route('loginpage')}}" class="btn btn-primary btn-block mainfullbtncolor col-sm-4 " style="margin-left: 270px"> 
                                    Register(ဝယ်ယူရန်) 
                                </a>
         @endrole
         </div>
        </form>
            
        </div>
    </section>
    @endsection

