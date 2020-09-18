@extends('frontendtemplate')
@section('front')

<div class="container-fluid my-5 text-center"><h2><b>ယနေ့ သီးနှံ ကာလပေါက်စျေးများ</b></h2>
<h4>(သီးနှံစျေးကွက်မှာ အချိန်နဲ့အမျှ ပြောင်းလဲပါမည်)</h4></div>
		<section class="ftco-section ftco-category ftco-no-pt my-5 ">
			<div class="container ">
				<div class="row">
					<div class="col-md-6">
              <h3><b>ဝယ်စျေး</b></h3>
              <b>----------</b>
              <table>
                   <thead class="h5">
                     <th>သီးနှံအမည် </th>
                     <th>&nbsp;&nbsp;</th>
                     <th>ပိဿာ/တင်း </th>
                     <th>&nbsp;&nbsp;</th>
                     <th>စျေးနှုန်း </th>
                   </thead>
                   <tbody class="h5">
                    @foreach($pricelists as $pricelist)
                     <tr>
                       <td>{{$pricelist->crop->name}}</td>
                       <td></td>
                       <td>၁</td>
                       <td></td>
                       <td>{{$pricelist->buyprice}}ကျပ်</td>
                     </tr>
                     @endforeach
                   </tbody>
              </table>
              
					</div>
          <div class="col-md-6">
              <h3><b>ရောင်းစျေး</b></h3>
              <b>----------</b>
              <table>
                   <thead class="h5">
                     <th>သီးနှံအမည် </th>
                     <th>&nbsp;&nbsp;</th>
                     <th>ပိဿာ/တင်း </th>
                     <th>&nbsp;&nbsp;</th>
                     <th>စျေးနှုန်း </th>
                   </thead>
                   <tbody class="h5">
                     @foreach($pricelists as $pricelist)
                     <tr>
                       <td>{{$pricelist->crop->name}}</td>
                       <td></td>
                       <td>၁</td>
                       <td></td>
                       <td>{{$pricelist->sellprice}}ကျပ်</td>
                     </tr>
                     @endforeach
                   </tbody>
              </table>
              
          </div>

					
				</div>
			</div>
		</section>
    <section class="my-5">
      <div class="text-center h3 "><b>တောင်သူဦးကြီးများရှင့် ယနေ့ အောက်ပါသီးနှံများကို&nbsp;&nbsp;<a href="{{route('contactpage')}}" class="h1 text-primary">&nbsp;&nbsp; ပွဲရုံ &nbsp;&nbsp;</a> &nbsp;&nbsp;မှာလာရောက် ရောင်းချနိုင်ပါပီရှင့်</b></div>

      <div class="container my-5">
        <div class="row my-5">
          @foreach($pricelists as $pricelist)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset($pricelist->crop->photo)}}" alt="Colorlib Template">
            <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{$pricelist->crop->name}}</a></h3>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    
    </section>

    
		
		

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	
            <h4 class="mb-4"><b>တောင်သူဦးကြီးများ၏ နှစ်သက်သဘောကျမှု များ</b></h4>
            
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('nn/images/farmer2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">ဒီပွဲရုံမှာ သီးနှံရောင်းချရတာ အရမ်းအဆင်ပြေပါတယ်။သီးနှံတွေ စျေးကောင်းရဖို့ဆိုတာ ကျွန်တော် တို့ အိမ်မက်ပါ</p>
                    <p class="name">ဦးလှ</p>
                    <span class="position">တောင်သူတစ်ဦး</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('nn/images/farmer.jpeg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">ကျွန်တော် သီးနှံတစ်ခုကို စစိုက်ဖို့ စိတ်မရဲခဲ့ဘူး။ဒီမှာဝင်ကြည့်တော့ ဘယ်လိုသီးနှံဆို ဘယ်လိုစိုက်ပျိုးရမယ် ရောဂါပိုးကျရင် ဘာဆေးပတ်ရမယ်ဆိုတာ လမ်းညွှန်ထားတော့ တော်တော်အဆင်ပြေသွားတယ်။</p>
                    <p class="name">မောင်သာချို
</p>
                    <span class="position">တောင်သူတစ်ဦး</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('nn/images/farmer3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">ဒီပွဲရုံမှာ သီးနှံရောင်းချရတာ အရမ်းအဆင်ပြေပါတယ်။သီးနှံတွေ စျေးကောင်းရဖို့ဆိုတာ ကျွန်တော် တို့ အိမ်မက်ပါ</p>
                    <p class="name">ဦးဘ</p>
                    <span class="position">တောင်သူတစ်ဦး</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('nn/images/farmer4.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">ဒီပွဲရုံမှာ သီးနှံရောင်းချရတာ အရမ်းအဆင်ပြေပါတယ်။သီးနှံတွေ စျေးကောင်းရဖို့ဆိုတာ ကျွန်တော် တို့ အိမ်မက်ပါ</p>
                    <p class="name">ဦးမြ</p>
                    <span class="position">တောင်သူတစ်ဦး</span>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{asset('nn/images/farmer1.jpeg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">ဒီပွဲရုံမှာ သီးနှံရောင်းချရတာ အရမ်းအဆင်ပြေပါတယ်။ကျွန်မတို့ ပွဲစားတွေ ရောင်းရင်း စျေးနှိမ်းကျတယ်။ဒီမှာတော့ စျေးမနှိမ်ပဲနဲ့ ကာလပေါက်စျေးနဲ့ ဝယ်ပေးတယ်။</p>
                    <p class="name">ဒေါ်မြ</p>
                    <span class="position">တောင်သူတစ်ဦး</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		

		
    @endsection