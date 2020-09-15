@extends('frontendtemplate')
@section('front')
<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
                        <a href="{{route('buypage')}}" class="btn btn-primary float-right">နောက်ထပ်ဝယ်ယူရန်</a>
	    				<table class="table my-5">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>သီးနှံအမည်</th>
						        <th>စျေးနှုန်း</th>
						        <th>ပမာဏ</th>
						        <th>စုစုပေါင်း</th>
						      </tr>
						    </thead>
						    <tbody id="tbody">
						      
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			
    			
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>ကုန်ကျစရိတ်</h3>
    					<p class="d-flex">
    						<span id="cname"></span>
    						<span id="subtotal"></span>
    					</p>
                        
    					
    					<hr>
    					<p class="d-flex total-price">
    						<span>စုစုပေါင်း
</span>
    						<span id="total1"></span>
    					</p>
    				</div>
    				{{-- <p><a href="{{route('registerpage')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p> --}}

                     @role("Customer")
                                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                                    မှာလို့ရပါပီ
                                </button>
                                @else
                                <a href="{{route('loginpage')}}" class="btn btn-primary btn-block mainfullbtncolor "> 
                                    Register(ဝယ်ယူရန်) 
                                </a>
                    @endrole

                  {{-- <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn buy_now"> 
                                    Check Out 
                                </button> --}}
    			</div>
    		</div>
			</div>
		</section>

		
    @endsection