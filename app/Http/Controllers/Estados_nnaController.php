<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estados_nna;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\Estados_nnaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class Estados_nnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados_nna = Estados_nna::all();
        return view('Estados_nna.index',compact('estados_nna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Estados_nna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Estados_nnaRequest $request)
    {
        Estados_nna::create($request->all());
        Session::flash('message-success','Estado creado correctamente');
        return Redirect::to('/EstadosNNA');
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
        $estados_nna = Estados_nna::find($id);
        return view('Estados_nna.edit',['estados_nna'=>$estados_nna]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Estados_nnaRequest $request, $id)
    {
        $estado_nna = Estados_nna::find($id);
        $estado_nna->fill($request->all());
        $estado_nna->save();
        Session::flash('message-success','Estado actualizado correctamente');
        return Redirect::to('/EstadosNNA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado_nna = Estados_nna::find($id);
        $estado_nna->delete();
        
        Session::flash('message-success','Estado eliminado correctamente');
        return Redirect::to('/EstadosNNA');
    }
}
