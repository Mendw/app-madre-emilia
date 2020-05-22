<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organismos;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\OrganismosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class OrganismosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organismos = Organismos::all();
        return view('Organismos.index',compact('organismos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Organismos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganismosRequest $request)
    {
        Organismos::create($request->all());
        Session::flash('message-success','Organismo creado correctamente');
        return Redirect::to('/Organismos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organismos = Organismos::find($id);
        return view('Organismos.edit',['organismos'=>$organismos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganismosRequest $request, $id)
    {
        $organismo = Organismos::find($id);
        $organismo->fill($request->all());
        $organismo->save();
        Session::flash('message-success','Organismo actualizado correctamente');
        return Redirect::to('/Organismos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organismo = Organismos::find($id);
        $organismo->delete();
        
        Session::flash('message-success','Organismo eliminado correctamente');
        return Redirect::to('/Organismos');
    }
}
