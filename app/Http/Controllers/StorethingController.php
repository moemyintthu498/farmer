<?php

namespace App\Http\Controllers;

use App\Storething;
use Illuminate\Http\Request;
use App\Crop;

class StorethingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $storethings =Storething::all();
        //dd($items);
       return view('backend.storethings.index',compact('storethings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $crops =Crop::all();
        return view('backend.storethings.create',compact('crops'));
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
        
        "crop" => 'required',
        "buyprice" => 'required',
        "qty" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    // Data insert
    $storething = new Storething;
   
    
    $storething->crop_id=$request->crop;
    $storething->buyprice= $request->buyprice;
    $storething->qty= $request->qty;
    
    $storething->save();

    // redirect
    return redirect()->route('storethings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Storething  $storething
     * @return \Illuminate\Http\Response
     */
    public function show(Storething $storething)
    {
        $crops =Crop::all();
        return view('backend.storethings.detail',compact('storething','crops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storething  $storething
     * @return \Illuminate\Http\Response
     */
    public function edit(Storething $storething)
    {
        $crops =Crop::all();
       
        return view('backend.storethings.edit',compact('storething','crops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storething  $storething
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storething $storething)
    {
         $request->validate([
        
        "crop" => 'required',
        "buyprice" => 'required',
        "qty" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    // Data insert
    //$storething = new Storething;
   
    
    $storething->crop_id=$request->crop;
    $storething->buyprice= $request->buyprice;
    $storething->qty= $request->qty;
    
    $storething->save();

    // redirect
    return redirect()->route('storethings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storething  $storething
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storething $storething)
    {
       $storething->delete();
        return redirect()->route('storethings.index');
    }
}
