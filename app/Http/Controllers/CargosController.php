<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargos;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\CargosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargos::all();
        return view('Cargos.index',compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargosRequest $request)
    {
        Cargos::create($request->all());
        Session::flash('message-success','Cargo creado correctamente');
        return Redirect::to('/Cargos');
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
        $cargos = Cargos::find($id);
        return view('Cargos.edit',['cargos'=>$cargos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CargosRequest $request, $id)
    {
        $cargo = Cargos::find($id);
        $cargo->fill($request->all());
        $cargo->save();
        Session::flash('message-success','Cargo actualizado correctamente');
        return Redirect::to('/Cargos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = Cargos::find($id);
        $cargo->delete();
        
        Session::flash('message-success','Cargo eliminado correctamente');
        return Redirect::to('/Cargos');
    }
}
