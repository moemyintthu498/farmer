<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storething;

class PageController extends Controller
{
     public function home($value='')
  {
    return view('frontend.home');
  }

     public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

     public function sellfun($value='')
  {
    return view('frontend.sell');
  }


     public function buyfun($value='')

  {
     $storethings = Storething::all();
    return view('frontend.buy',compact('storethings'));
  }

     public function contactfun($value='')
  {
    return view('frontend.contact');
  }

}
