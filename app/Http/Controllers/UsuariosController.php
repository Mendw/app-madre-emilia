<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\UsuariosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('Usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuariosRequest $request)
    {
        User::create($request->all());
        Session::flash('message-success','Usuario creado correctamente');
        return Redirect::to('/Usuarios');
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
        $user = User::find($id);
        return view('Usuarios.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuariosRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message-success','Usuario actualizado correctamente');
        return Redirect::to('/Usuarios');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        Session::flash('message-success','Usuario eliminado correctamente');
        return Redirect::to('/Usuarios');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
