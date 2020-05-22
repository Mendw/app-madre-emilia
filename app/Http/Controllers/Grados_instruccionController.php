<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grados_instruccion;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\Grados_instruccionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class Grados_instruccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados_instruccion = Grados_instruccion::all();
        return view('Grados_instruccion.index',compact('grados_instruccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Grados_instruccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Grados_instruccionRequest $request)
    {
        Grados_instruccion::create($request->all());
        Session::flash('message-success','Grado de instrucción creado correctamente');
        return Redirect::to('/GradosInstruccion');
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
        $grados_instruccion = Grados_instruccion::find($id);
        return view('Grados_instruccion.edit',['grados_instruccion'=>$grados_instruccion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Grados_instruccionRequest $request, $id)
    {
        $grado_instruccion = Grados_instruccion::find($id);
        $grado_instruccion->fill($request->all());
        $grado_instruccion->save();
        Session::flash('message-success','Grado de instrucción actualizado correctamente');
        return Redirect::to('/GradosInstruccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado_instruccion = Grados_instruccion::find($id);
        $grado_instruccion->delete();
        
        Session::flash('message-success','Grado de instrucción eliminado correctamente');
        return Redirect::to('/GradosInstruccion');
    }
}
