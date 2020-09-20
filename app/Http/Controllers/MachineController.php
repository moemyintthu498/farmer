<?php

namespace App\Http\Controllers;

use App\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines =Machine::all();
        //dd($items);
       return view('backend.machines.index',compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.machines.create');
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
        "description" => 'required',
        "power" => 'required',
        "price" => 'required',
        
        
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    $imageName = time().'.'.$request->photo->extension();

    $request->photo->move(public_path('backend/machineimg'),$imageName);

    $path = 'backend/machineimg/'.$imageName;
    // Data insert
    $machine = new Machine;
    $machine->name= $request->name;
    $machine->photo = $path;
    $machine->description = $request->description;
    $machine->power= $request->power;
    $machine->price= $request->price;
    
    $machine->save();

    // redirect
    return redirect()->route('machines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function show(Machine $machine)
    {
        return view('backend.machines.detail',compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function edit(Machine $machine)
    {
        return view('backend.machines.edit',compact('machine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Machine $machine)
    {
          $request->validate([
        "name" => 'required',
        "photo" => 'sometimes',
        "description" => 'required',
        "power" => 'required',
        "price" => 'required',
        "oldphoto"=>'required',
    ]);

    // dd($request->photo);
    
    // If include file, upload file
    
    if($request->hasFile('photo')){
             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/machineimg'),$imageName);
            $path='backend/machineimg/'.$imageName;
    }else{
            $path=$request->oldphoto;
    }
    // Data insert
    //$crop = new Crop;
    $machine->name= $request->name;
    $machine->photo = $path;
    $machine->description = $request->description;
    $machine->power= $request->power;
    $machine->price= $request->price;
    $machine->save();

    // redirect
    return redirect()->route('machines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machine $machine)
    {
        $machine->delete();
        return redirect()->route('machines.index');
    }
}
