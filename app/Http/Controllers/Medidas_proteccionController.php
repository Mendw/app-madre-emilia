<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medidas_proteccion;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\Medidas_proteccionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class Medidas_proteccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medidas_proteccion = Medidas_proteccion::all();
        return view('Medidas_proteccion.index',compact('medidas_proteccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medidas_proteccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Medidas_proteccionRequest $request)
    {
        Medidas_proteccion::create($request->all());
        Session::flash('message-success','Medida de protección creada correctamente');
        return Redirect::to('/MedidasProteccion');
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
        $medidas_proteccion = Medidas_proteccion::find($id);
        return view('Medidas_proteccion.edit',['medidas_proteccion'=>$medidas_proteccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Medidas_proteccionRequest $request, $id)
    {
        $medida_proteccion = Medidas_proteccion::find($id);
        $medida_proteccion->fill($request->all());
        $medida_proteccion->save();
        Session::flash('message-success','Medida de protección actualizada correctamente');
        return Redirect::to('/MedidasProteccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medida_proteccion = Medidas_proteccion::find($id);
        $medida_proteccion->delete();
        
        Session::flash('message-success','Medida de protección eliminada correctamente');
        return Redirect::to('/MedidasProteccion');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
