<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patologias;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\PatologiasRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class PatologiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patologias = Patologias::all();
        return view('Patologias.index',compact('patologias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patologias = Patologias::all();

        return view('Patologias.create')
                ->with('patologias',$patologias)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatologiasRequest $request)
    {
        Patologias::create($request->all());
        Session::flash('message-success','Patología creada correctamente');
        return Redirect::to('/Patologias');
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
        $patologia = Patologias::find($id);

        return view('Patologias.edit')
                ->with('patologia',$patologia)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatologiasRequest $request, $id)
    {
        $patologia = Patologias::find($id);
        $patologia->fill($request->all());
        $patologia->save();
        Session::flash('message-success','Patología actualizada correctamente');
        return Redirect::to('/Patologias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patologia = Patologias::find($id);
        $patologia->delete();
        
        Session::flash('message-success','Patología eliminada correctamente');
        return Redirect::to('/Patologias');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
