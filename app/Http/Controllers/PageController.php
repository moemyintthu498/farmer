<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storething;
use App\Pricelist;
use App\Crop;

class PageController extends Controller
{
     public function home($value='')
  {
    //$crops=Crop::all();
    $pricelists= Pricelist::all();
    return view('frontend.home',compact('pricelists'));
  }

     public function shoppingcart($value='')
  {

    //$crops=Crop::all();
    return view('frontend.shoppingcart');
  }


     public function cropfun($id)
  {
    
    //dd($crops);
     $cps=Crop::find($id);
    //dd($cps);

    return view('frontend.crop',compact('cps'));
  }


     public function buyfun($value='')

  {
   
     $pricelists= Pricelist::all();
    return view('frontend.buy',compact('pricelists'));
  }

     public function contactfun($value='')
  {
   
    return view('frontend.contact');
  }

   public function registerfun($value='')
    {
       
        return view('frontend.userregister');
    }
    
    public function loginfun($value='')
    {
       
        return view('frontend.userlogin');
    }

}
