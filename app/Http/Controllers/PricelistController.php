<?php

namespace App\Http\Controllers;

use App\Pricelist;
use Illuminate\Http\Request;
use App\Crop;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricelists =Pricelist::all();
        //dd($items);
       return view('backend.pricelists.index',compact('pricelists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $crops =Crop::all();
        return view('backend.pricelists.create',compact('crops'));
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
        "pdate" => 'required',
        "ptime" => 'required',
        "sellprice" => 'required',
        "buyprice" => 'required',
        "crop" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    // Data insert
    $pricelist = new Pricelist;
    $pricelist->pdate= $request->pdate;
    $pricelist->ptime = $request->ptime;
    $pricelist->sellprice = $request->sellprice;
    $pricelist->buyprice= $request->buyprice;
    $pricelist->crop_id=$request->crop;
    
    $pricelist->save();

    // redirect
    return redirect()->route('pricelists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function show(Pricelist $pricelist)
    {
        $crops =Crop::all();
        return view('backend.pricelists.detail',compact('pricelist','crops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricelist $pricelist)
    {
         $crops =Crop::all();
       
        return view('backend.pricelists.edit',compact('pricelist','crops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricelist $pricelist)
    {
         $request->validate([
        "pdate" => 'required',
        "ptime" => 'required',
        "sellprice" => 'required',
        "buyprice" => 'required',
        "crop" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    // Data insert
    //$pricelist = new Pricelist;
    $pricelist->pdate= $request->pdate;
    $pricelist->ptime = $request->ptime;
    $pricelist->sellprice = $request->sellprice;
    $pricelist->buyprice= $request->buyprice;
    $pricelist->crop_id=$request->crop;
    
    $pricelist->save();

    // redirect
    return redirect()->route('pricelists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricelist $pricelist)
    {
         $pricelist->delete();
        return redirect()->route('pricelists.index');
    }
}
