<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NNA;
use App\Grados_instruccion;
use App\Escolaridades;
use App\Medidas_proteccion;
use App\Estados_nna;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\NNARequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class NNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nna = NNA::all();
        return view('NNA.index',compact('nna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nna = NNA::all();
        $grados_instruccion = Grados_instruccion::all();
        $escolaridades = Escolaridades::all();
        $medidas_proteccion = Medidas_proteccion::all();
        $estados_nna = Estados_nna::all();

        return view('NNA.create')
                ->with('nna',$nna)
                ->with('grados_instruccion',$grados_instruccion)
                ->with('escolaridades',$escolaridades)
                ->with('medidas_proteccion',$medidas_proteccion)
                ->with('estados_nna',$estados_nna)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NNARequest $request)
    {
        NNA::create($request->all());
        Session::flash('message-success','Niño, niña o adolescente creado correctamente');
        return Redirect::to('/NNA');
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
        $nna = NNA::find($id);
        $grados_instruccion = Grados_instruccion::all();
        $escolaridades = Escolaridades::all();
        $medidas_proteccion = Medidas_proteccion::all();
        $estados_nna = Estados_nna::all();

        return view('NNA.edit')
                ->with('nna',$nna)
                ->with('grados_instruccion',$grados_instruccion)
                ->with('escolaridades',$escolaridades)
                ->with('medidas_proteccion',$medidas_proteccion)
                ->with('estados_nna',$estados_nna)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NNARequest $request, $id)
    {
        $nna = NNA::find($id);
        $nna->fill($request->all());
        $nna->save();
        Session::flash('message-success','Niño, niña o adolescente actualizado correctamente');
        return Redirect::to('/NNA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nna = NNA::find($id);
        $nna->delete();
        
        Session::flash('message-success','Niño, niña o adelescente eliminado correctamente');
        return Redirect::to('/NNA');
    }
}
