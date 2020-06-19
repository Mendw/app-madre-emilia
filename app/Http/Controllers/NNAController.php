<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NNA;
use App;
use PDF;
use App\Grados_instruccion;
use App\Escolaridades;
use App\Medidas_proteccion;
use App\Estados_nna;
use DB;
use Input;
use Session;
use Redirect;

use App\Http\Requests;
use App\Http\Requests\NNARequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class NNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nna = NNA::all();
        return view('NNA.index',compact('nna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nna = NNA::all();
        $grados_instruccion = Grados_instruccion::all();
        $escolaridades = Escolaridades::all();
        $medidas_proteccion = Medidas_proteccion::all();
        $estados_nna = Estados_nna::all();

        return view('NNA.create')
                ->with('nna',$nna)
                ->with('grados_instruccion',$grados_instruccion)
                ->with('escolaridades',$escolaridades)
                ->with('medidas_proteccion',$medidas_proteccion)
                ->with('estados_nna',$estados_nna)

                ->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NNARequest $request)
    {
        NNA::create($request->all());
        Session::flash('message-success','Niño, niña o adolescente creado correctamente');
        return Redirect::to('/NNA');
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
        $nna = NNA::find($id);
        $grados_instruccion = Grados_instruccion::all();
        $escolaridades = Escolaridades::all();
        $medidas_proteccion = Medidas_proteccion::all();
        $estados_nna = Estados_nna::all();

        return view('NNA.edit')
                ->with('nna',$nna)
                ->with('grados_instruccion',$grados_instruccion)
                ->with('escolaridades',$escolaridades)
                ->with('medidas_proteccion',$medidas_proteccion)
                ->with('estados_nna',$estados_nna)

                ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NNARequest $request, $id)
    {
        $nna = NNA::find($id);
        $nna->fill($request->all());
        $nna->save();
        Session::flash('message-success','Niño, niña o adolescente actualizado correctamente');
        return Redirect::to('/NNA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nna = NNA::find($id);
        $nna->delete();
        
        Session::flash('message-success','Niño, niña o adelescente eliminado correctamente');
        return Redirect::to('/NNA');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contarNinos(){

        $total= NNA::all()->count();
        $activos = DB::table('nna')
                    ->join('estados_nna', 'estados_nna.id', '=', 'nna.id_estado')
                    ->where('estados_nna.nombre','activo')
                    ->count();

        $inactivos = $total - $activos;

        $niños = [
            "total" => $total,
            "activos" => $activos,
            "inactivos" => $inactivos,
        ];
        return $niños;
    }

    public function singleKidToPdf($id)
    {
        $nna = NNA::find($id);
        $grado_instruccion = Grados_instruccion::find($nna->id_grado);
        $escolaridades = Escolaridades::find($nna->id_escolaridad);
        $medidas_proteccion = Medidas_proteccion::find($nna->id_medida);
        $estados_nna = Estados_nna::find($nna->id_estado);

        $data = [
            "cedula" => $nna->cedula,
            "nombre" => $nna->nombre,
            "apellido" => $nna->apellido,
            "fecha_nacimiento"=> $nna->fecha_nacimiento,
            "lugar_nacimiento"=> $nna->lugar_nacimiento,
            "direccion"=> $nna->direccion,
            "telefono"=> $nna->telefono,
            "medida_proteccion"=> $medidas_proteccion->nombre, 
            "numero_medida"=> $nna->numero_medida, 
            "expediente"=> $nna->expediente, 
            "fecha_medida"=> $nna->fecha_medida, 
            "grado_instruccion"=> $grado_instruccion->nombre, 
            "escolaridad"=> $escolaridades->nombre, 
            "unidad_educativa"=> $nna->unidad_educativa, 
            "direccion_unidad_educativa"=> $nna->direccion_unidad_educativa, 
            "tipo_sangre"=> $nna->tipo_sangre, 
            "estado"=> $estados_nna->nombre, 
            "evaluacion_psicologica"=> $nna->evaluacion_psicologica,
            "talla"=> $nna->talla,
            "peso"=> $nna->peso,
        ];

        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('pdf',$data);
        return $pdf->stream();
    }

    public function generateReport(){
        $estadisticas = NNAController::contarNinos();
        $data = DB::table('nna')
        ->join('estados_nna', 'estados_nna.id', '=', 'nna.id_estado')
        ->join('medidas_proteccion', 'medidas_proteccion.id', '=', 'nna.id_medida')
        ->join('grados_instruccion','grados_instruccion.id','=','nna.id_grado')
        ->join('escolaridades','escolaridades.id','nna.id_escolaridad')
        ->select('nna.cedula','nna.nombre','nna.apellido','nna.fecha_nacimiento','nna.lugar_nacimiento',
                'nna.direccion','nna.telefono','nna.numero_medida','nna.expediente','nna.fecha_medida',
                'nna.unidad_educativa','nna.direccion_unidad_educativa','nna.tipo_sangre',
                'nna.evaluacion_psicologica','nna.talla','nna.peso',
                'medidas_proteccion.nombre as medida_proteccion',
                'grados_instruccion.nombre as grado_instruccion',
                'escolaridades.nombre as escolaridad',
                'estados_nna.nombre as estado')
        ->get();       
        $pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('reporte',$estadisticas,compact('data'));
        return $pdf->stream();
    }
}