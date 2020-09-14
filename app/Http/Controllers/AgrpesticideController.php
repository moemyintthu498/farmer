<?php

namespace App\Http\Controllers;

use App\Agrpesticide;
use Illuminate\Http\Request;
use App\Crop;
class AgrpesticideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agrpesticides =Agrpesticide::all();
        //dd($items);
       return view('backend.agrpesticides.index',compact('agrpesticides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $crops =Crop::all();
        return view('backend.agrpesticides.create',compact('crops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        "name" => 'required',
        "photo" => 'required',
        "price" => 'required',
        "disease" => 'required',
        "expiredate" => 'required',
        "crop" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
     $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/pesticideimg'),$imageName);

    $path = 'backend/pesticideimg/'.$imageName;
    
    // Data insert
    $agrpesticide = new Agrpesticide;
    $agrpesticide->name= $request->name;
    $agrpesticide->photo = $path;
    $agrpesticide->price = $request->price;
    $agrpesticide->disease= $request->disease;
    $agrpesticide->expiredate= $request->expiredate;
    $agrpesticide->crop_id=$request->crop;
    
    $agrpesticide->save();

    // redirect
    return redirect()->route('agrpesticides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agrpesticide  $agrpesticide
     * @return \Illuminate\Http\Response
     */
    public function show(Agrpesticide $agrpesticide)
    {
        $crops =Crop::all();
        return view('backend.agrpesticides.detail',compact('agrpesticide','crops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agrpesticide  $agrpesticide
     * @return \Illuminate\Http\Response
     */
    public function edit(Agrpesticide $agrpesticide)
    {
        $crops =Crop::all();
       
        return view('backend.agrpesticides.edit',compact('agrpesticide','crops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agrpesticide  $agrpesticide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agrpesticide $agrpesticide)
    {
         $request->validate([
        "name" => 'required',
        "photo" => 'sometimes',
        "price" => 'required',
        "disease" => 'required',
        "expiredate" => 'required',
        "crop" => 'required',
        "oldphoto"=>'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
     if($request->hasFile('photo')){
      $imageName = time().'.'.$request->photo->extension();

      $request->photo->move(public_path('backend/pesticideimg'),$imageName);

      $path = 'backend/pesticideimg/'.$imageName;
    }else{
            $path=$request->oldphoto;
    }
    
    // Data insert
    
    $agrpesticide->name= $request->name;
    $agrpesticide->photo = $path;
    $agrpesticide->price = $request->price;
    $agrpesticide->disease= $request->disease;
    $agrpesticide->expiredate= $request->expiredate;
    $agrpesticide->crop_id=$request->crop;
    
    $agrpesticide->save();

    // redirect
    return redirect()->route('agrpesticides.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agrpesticide  $agrpesticide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agrpesticide $agrpesticide)
    {
        $agrpesticide->delete();
        return redirect()->route('agrpesticides.index');
    }
}
