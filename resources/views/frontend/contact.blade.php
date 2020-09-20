@extends('frontendtemplate')
@section('front')

<section class="ftco-section contact-section bg-light">
  <div class="container">
   <div class="row d-flex mb-5 contact-info">
    <div class="w-100"></div>
    <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>လိပ်စာ:</span> မကွေးမြို့နယ်/မြို့ပတ်လမ်း/တောင်သူဦးကြီး</p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>ဖုန်း:</span> <a href="tel://1234567920">၀၉-၂၅၇၅၈၇၂၁၃ / ၀၉-၇၉၄၅၆၆၇၈၉</a></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>အီးမေးလ်:</span> <a href="mailto:info@yoursite.com">farmer@gmail.com</a></p>
     </div>
   </div>
   <div class="col-md-3 d-flex">
     <div class="info bg-white p-4">
       <p><span>Website:</span> <a href="#">futurefarmer.com</a></p>
     </div>
   </div>
 </div>
 
 <div class="row block-9">
  <div class="col-md-6 order-md-last d-flex">
    <form action="#" class="bg-white p-5 contact-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="အမည်">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="အီးမေးလ်လိပ်စာ
        ">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="အကြောင်းအရာ">
      </div>
      <div class="form-group">
        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="သင်၏မက်ဆေ့ချ်ကိုဤနေရာတွင်ရေးရန်။"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="ပေးပို့ရန်" class="btn btn-primary py-3 px-5">
      </div>
    </form>

  </div>

  <div class="col-md-6 d-flex">

   <div id="map" class="bg-white"></div>
 </div>
</div>
</div>
</section>
@endsection