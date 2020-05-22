<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;
use App\Organismos;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\FuncionariosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionarios::all();
        return view('Funcionarios.index',compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organismos = Organismos::all();

        return view('Funcionarios.create')
                ->with('organismos',$organismos)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncionariosRequest $request)
    {
        Funcionarios::create($request->all());
        Session::flash('message-success','Funcionario creado correctamente');
        return Redirect::to('/Funcionarios');
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
        $funcionario = Funcionarios::find($id);
        $organismos = Organismos::all();

        return view('Funcionarios.edit')
                ->with('funcionario',$funcionario)
                ->with('organismos',$organismos)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FuncionariosRequest $request, $id)
    {
        $funcionario = Funcionarios::find($id);
        $funcionario->fill($request->all());
        $funcionario->save();
        Session::flash('message-success','Funcionario actualizado correctamente');
        return Redirect::to('/Funcionarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionarios::find($id);
        $funcionario->delete();
        
        Session::flash('message-success','Funcionario eliminado correctamente');
        return Redirect::to('/Funcionarios');
    }
}
