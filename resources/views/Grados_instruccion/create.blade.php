@extends('layouts.principal')
  @section('title', 'Crear grado de instrucción')

  @section('content')
    @include('alerts.request')
    <!-- page start-->
        <div class="panel">
            <div class="panel-body">
                <div class="panel-heading">
                    <a href="{!!URL::to('GradosInstruccion')!!}">
                        <div class="col-3 fas fa-arrow-left " style="text-align: left; color: #fff">
                            <span>
                                Volver a Grados de instrucción
                            </span>
                        </div>
                    </a> 
                </div>
                <div class="row" style="margin: 10px;">
                    <div>
                        <h4>Crear Grado de instrucción</h4>
                    </div>
                </div>
                <div class="panel-body" style="padding: 10px;">
                {!!Form::open(['route'=>'GradosInstruccion.store', 'method'=>'POST'])!!}
                    @include('Grados_instruccion.form.grados_instruccion')
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6" style="text-align:center">
                            <button type="submit" class="btn btn-success" style="width:100%"><i class="fas fa-save"></i> Registrar</button>
                        </div>
                    </div>
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    <!-- page end-->
@endsection