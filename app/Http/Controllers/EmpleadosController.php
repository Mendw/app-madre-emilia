<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Cargos;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\EmpleadosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::all();
        return view('Empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargos::all();

        return view('Empleados.create')
                ->with('cargos',$cargos)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadosRequest $request)
    {
        Empleados::create($request->all());
        Session::flash('message-success','Empleado creado correctamente');
        return Redirect::to('/Empleados');
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
        $empleado = Empleados::find($id);
        $cargos = Cargos::all();

        return view('Empleados.edit')
                ->with('empleado',$empleado)
                ->with('cargos',$cargos)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpleadosRequest $request, $id)
    {
        $empleado = Empleados::find($id);
        $empleado->fill($request->all());
        $empleado->save();
        Session::flash('message-success','Empleado actualizado correctamente');
        return Redirect::to('/Empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleados::find($id);
        $empleado->delete();
        
        Session::flash('message-success','Empleado eliminado correctamente');
        return Redirect::to('/Empleados');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
