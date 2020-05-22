@extends('layouts.principal')
  @section('title', 'Editar Egreso')
  
  @section('content')
    @include('alerts.request')
    <!-- page start-->
    <div class="panel">
        <div class="panel-body">
            <div class="panel-heading">
                <a href="{!!URL::to('Egresos')!!}">
                    <div class="col-3 fas fa-arrow-left " style="text-align: left; color: #fff">
                        <span class="font">
                            Volver a Egresos
                        </span>
                    </div>
                </a> 
            </div>
            <div class="row" style="margin: 10px;">
                <div>
                    <h4>Editar Egreso</h4>
                </div>
            </div>
            <div class="panel-body" >
                {!!Form::model($egreso,['route'=>['Egresos.update',$egreso],'method'=>'PUT','files' => true])!!}
                    @include('Egresos.form.egresosEdit')
            
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5" style="text-align:right">
                        <button type="submit" class="btn btn-success" style="width:100%"><i class="fas fa-save"></i> Guardar</button>
                    </div>
                    {!!Form::close()!!}
                    <div class="col-5" style="text-align:left">
                        {!!Form::open(['route'=>['Egresos.destroy', $egreso], 'method' => 'DELETE'])!!}
                            <button type="submit" class="btn btn-danger" style="width:100%"><i class="fas fa-trash"></i> Eliminar</button>
                        {!!Form::close()!!}
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- page end-->
@endsection