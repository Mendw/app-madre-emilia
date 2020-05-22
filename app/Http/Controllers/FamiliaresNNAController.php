<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FamiliaresNNA;
use App\Familiares;
use App\NNA;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\FamiliaresNNARequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class FamiliaresNNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiaresnna = FamiliaresNNA::all();
        return view('FamiliaresNNA.index',compact('familiaresnna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familiaresnna = FamiliaresNNA::all();
        $familiares = Familiares::all();
        $nna = NNA::all();

        return view('FamiliaresNNA.create')
                ->with('familiaresnna',$familiaresnna)
                ->with('familiares',$familiares)
                ->with('nna',$nna)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamiliaresNNARequest $request)
    {
        FamiliaresNNA::create($request->all());
        Session::flash('message-success','Familiar asociado correctamente');
        return Redirect::to('/FamiliaresNNA');
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
        $familiaresnna = FamiliaresNNA::find($id);
        $familiares = Familiares::all();
        $nna = NNA::all();

        return view('FamiliaresNNA.edit')
                ->with('familiaresnna',$familiaresnna)
                ->with('familiares',$familiares)
                ->with('nna',$nna)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FamiliaresNNARequest $request, $id)
    {
        $familiarnna = FamiliaresNNA::find($id);
        $familiarnna->fill($request->all());
        $familiarnna->save();
        Session::flash('message-success','Asociación actualizada correctamente');
        return Redirect::to('/FamiliaresNNA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $familiarnna = FamiliaresNNA::find($id);
        $familiarnna->delete();
        
        Session::flash('message-success','Asociación eliminada correctamente');
        return Redirect::to('/FamiliaresNNA');
    }
}
