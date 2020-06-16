<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escolaridades;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\EscolaridadesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class EscolaridadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolaridades = Escolaridades::all();
        return view('Escolaridades.index',compact('escolaridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Escolaridades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscolaridadesRequest $request)
    {
        Escolaridades::create($request->all());
        Session::flash('message-success','Escolaridad creada correctamente');
        return Redirect::to('/Escolaridades');
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
        $escolaridades = Escolaridades::find($id);
        return view('Escolaridades.edit',['escolaridades'=>$escolaridades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EscolaridadesRequest $request, $id)
    {
        $escolaridad = Escolaridades::find($id);
        $escolaridad->fill($request->all());
        $escolaridad->save();
        Session::flash('message-success','Escolaridad Actualizada Correctamente');
        return Redirect::to('/Escolaridades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $escolaridad = Escolaridades::find($id);
        $escolaridad->delete();
        
        Session::flash('message-success','Escolaridad eliminada correctamente');
        return Redirect::to('/Escolaridades');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
