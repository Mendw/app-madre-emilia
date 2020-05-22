<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Egresos;
use App\NNA;
use App\Familiares;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\EgresosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class EgresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresos = Egresos::all();
        return view('Egresos.index',compact('egresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egresos = Egresos::all();
        $nna = NNA::all();
        $familiares = Familiares::all();

        return view('Egresos.create')
                ->with('egresos',$egresos)
                ->with('nna',$nna)
                ->with('familiares',$familiares)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EgresosRequest $request)
    {
        Egresos::create($request->all());
        Session::flash('message-success','Egreso realizado correctamente');
        return Redirect::to('/Egresos');
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
        $egreso = Egresos::find($id);
        $nna = NNA::all();
        $familiares = Familiares::all();

        return view('Egresos.edit')
                ->with('egreso',$egreso)
                ->with('nna',$nna)
                ->with('familiares',$familiares)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EgresosRequest $request, $id)
    {
        $egreso = Egresos::find($id);
        $egreso->fill($request->all());
        $egreso->save();
        Session::flash('message-success','Egreso actualizado correctamente');
        return Redirect::to('/Egresos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $egreso = Egresos::find($id);
        $egreso->delete();
        
        Session::flash('message-success','Egreso eliminado correctamente');
        return Redirect::to('/Egresos');
    }
}
