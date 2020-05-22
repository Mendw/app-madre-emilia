<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatologiasNNA;
use App\Patologias;
use App\NNA;

use Input;
use Session;
use Redirect;
use DB;

use App\Http\Requests;
use App\Http\Requests\PatologiasNNARequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class PatologiasNNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patologiasnna = PatologiasNNA::all();
        return view('PatologiasNNA.index',compact('patologiasnna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patologiasnna = PatologiasNNA::all();
        $patologias = Patologias::all();
        $nna = NNA::all();

        return view('PatologiasNNA.create')
                ->with('patologiasnna',$patologiasnna)
                ->with('patologias',$patologias)
                ->with('nna',$nna)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatologiasNNARequest $request)
    {
        PatologiasNNA::create($request->all());
        Session::flash('message-success','Patología asociada correctamente');
        return Redirect::to('/PatologiasNNA');
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
        $patologianna = PatologiasNNA::find($id);
        $patologias = Patologias::all();
        $nna = NNA::all();

        return view('PatologiasNNA.edit')
                ->with('patologianna',$patologianna)
                ->with('patologias',$patologias)
                ->with('nna',$nna)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatologiasNNARequest $request, $id)
    {
        $patologianna = PatologiasNNA::find($id);
        $patologianna->fill($request->all());
        $patologianna->save();
        Session::flash('message-success','Asociación actualizada correctamente');
        return Redirect::to('/PatologiasNNA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patologianna = PatologiasNNA::find($id);
        $patologianna->delete();
        
        Session::flash('message-success','Asociación eliminada correctamente');
        return Redirect::to('/PatologiasNNA');
    }
}
