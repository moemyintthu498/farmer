<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('btemplate', function () {
    return view('backendtemplate');
});
Route::get('ftemplate',function (){
         return view('frontendtemplate');
});
Route::get('buy',function (){
         return view('frontend.buy');
});
Route::get('/','PageController@home')->name('homepage');

Route::get('shoppingcart','PageController@shoppingcart')->name('cartpage');
Route::get('crop/{id}','PageController@cropfun')->name('croppage');
Route::get('buy','PageController@buyfun')->name('buypage');

Route::get('contact','PageController@contactfun')->name('contactpage');
Route::get('registerform','PageController@registerfun')->name('registerpage');

Route::get('loginform','PageController@loginfun')->name('loginpage');


// Backend Controller
Route::resource('orders','OrderController');
Route::resource('crops','CropController');

Route::resource('pricelists','PricelistController');

Route::resource('agrpesticides','AgrpesticideController');

Route::resource('storethings','StorethingController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
