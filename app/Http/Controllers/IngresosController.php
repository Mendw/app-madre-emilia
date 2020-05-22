<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingresos;
use App\NNA;
use App\Empleados;
use App\Funcionarios;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\IngresosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = Ingresos::all();
        return view('Ingresos.index',compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresos = Ingresos::all();
        $nna = NNA::all();
        $empleados = Empleados::all();
        $funcionarios = Funcionarios::all();

        return view('Ingresos.create')
                ->with('ingresos',$ingresos)
                ->with('nna',$nna)
                ->with('empleados',$empleados)
                ->with('funcionarios',$funcionarios)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresosRequest $request)
    {
        Ingresos::create($request->all());
        Session::flash('message-success','Ingreso realizado correctamente');
        return Redirect::to('/Ingresos');
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
        $ingreso = Ingresos::find($id);
        $nna = NNA::all();
        $empleados = Empleados::all();
        $funcionarios = Funcionarios::all();

        return view('Ingresos.edit')
                ->with('ingreso',$ingreso)
                ->with('nna',$nna)
                ->with('empleados',$empleados)
                ->with('funcionarios',$funcionarios)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IngresosRequest $request, $id)
    {
        $ingreso = Ingresos::find($id);
        $ingreso->fill($request->all());
        $ingreso->save();
        Session::flash('message-success','Ingreso actualizado correctamente');
        return Redirect::to('/Ingresos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingreso = Ingresos::find($id);
        $ingreso->delete();
        
        Session::flash('message-success','Ingreso eliminado correctamente');
        return Redirect::to('/Ingresos');
    }
}
