<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storething;
use App\Pricelist;
use App\Crop;
use App\Agrpesticide;
use App\Machine;


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
     $agrpesticides=Agrpesticide::all();
     //dd($agrpesticides);

    return view('frontend.crop',compact('cps','agrpesticides'));
  }
   public function machinefun($id)
  {
    
    
     $mach=Machine::find($id);
   

    return view('frontend.machine',compact('mach'));
  }


     public function buyfun($value='')

  {
     $crop=Crop::all();
     $pricelists= Pricelist::all();

    return view('frontend.buy',compact('pricelists','crop'));
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

     public function showdatafun(Request $request)
    {
     // dd($request);
      $id=$request->id;
      //dd($id);
       $agrpesticide=Agrpesticide::find($id);
       //dd($agrpesticide->name);
        //return view('frontend.crop',compact('agrpesticide'));
       return $agrpesticide;
        
    }

}
