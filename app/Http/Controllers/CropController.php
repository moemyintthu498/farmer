<?php

namespace App\Http\Controllers;

use App\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops =Crop::all();
        //dd($items);
       return view('backend.crops.index',compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.crops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
        "name" => 'required',
        "photo" => 'required',
        "description" => 'required',
        "soil" => 'required',
        "season" => 'required',
        "rainfall" => 'required',
        "insect" => 'required',
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/cropimg'),$imageName);

    $path = 'backend/cropimg/'.$imageName;
    // Data insert
    $crop = new Crop;
    $crop->name= $request->name;
    $crop->photo = $path;
    $crop->description = $request->description;
    $crop->soil= $request->soil;
    $crop->season= $request->season;
    $crop->rainfall= $request->rainfall;
    $crop->insect= $request->insect;
    $crop->save();

    // redirect
    return redirect()->route('crops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function show(Crop $crop)
    {
         return view('backend.crops.detail',compact('crop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function edit(Crop $crop)
    {
       
        return view('backend.crops.edit',compact('crop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crop $crop)
    {
         $request->validate([
        "name" => 'required',
        "photo" => 'required',
        "description" => 'required',
        "soil" => 'required',
        "season" => 'required',
        "rainfall" => 'required',
        "insect" => 'required',
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    if($request->hasFile('photo')){
             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/cropimg'),$imageName);
            $path='backend/cropimg/'.$imageName;
    }else{
            $path=$request->oldphoto;
    }
    // Data insert
    //$crop = new Crop;
    $crop->name= $request->name;
    $crop->photo = $path;
    $crop->description = $request->description;
    $crop->soil= $request->soil;
    $crop->season= $request->season;
    $crop->rainfall= $request->rainfall;
    $crop->insect= $request->insect;
    $crop->save();

    // redirect
    return redirect()->route('crops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crop  $crop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crop $crop)
    {
        $crop->delete();
        return redirect()->route('crops.index');
    }
}
