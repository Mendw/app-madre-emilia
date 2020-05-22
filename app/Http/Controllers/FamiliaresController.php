<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familiares;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\FamiliaresRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class FamiliaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiares = Familiares::all();
        return view('Familiares.index',compact('familiares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familiares = Familiares::all();

        return view('Familiares.create')
                ->with('familiares',$familiares)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamiliaresRequest $request)
    {
        Familiares::create($request->all());
        Session::flash('message-success','Familiar creado correctamente');
        return Redirect::to('/Familiares');
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
        $familiar = Familiares::find($id);

        return view('Familiares.edit')
                ->with('familiar',$familiar)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FamiliaresRequest $request, $id)
    {
        $familiar = Familiares::find($id);
        $familiar->fill($request->all());
        $familiar->save();
        Session::flash('message-success','Familiar actualizado correctamente');
        return Redirect::to('/Familiares');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $familiar = Familiares::find($id);
        $familiar->delete();
        
        Session::flash('message-success','Familiar eliminado correctamente');
        return Redirect::to('/Familiares');
    }
}
