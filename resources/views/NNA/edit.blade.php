@extends('layouts.principal')
  @section('title', 'Editar NNA')
  
  @section('content')
    @include('alerts.request')
    <!-- page start-->
    <div class="panel">
        <div class="panel-body">
            <div class="panel-heading">
                <a href="{!!URL::to('NNA')!!}">
                    <div class="col-3 fas fa-arrow-left " style="text-align: left; color: #fff">
                        <span class="font">
                            Volver a Niños, niñas y adolescentes
                        </span>
                    </div>
                </a> 
            </div>
            <div class="row" style="margin: 10px;">
                <div>
                    <h4>Editar Niño, niña o adolescente</h4>
                </div>
            </div>
            <div class="panel-body" >
                {!!Form::model($nna,['route'=>['NNA.update',$nna],'method'=>'PUT','files' => true])!!}
                    @include('NNA.form.nnaEdit')
            
                <div class="row">
                    
                    <div class="col-sm-4" style="text-align:left">
                        <button type="submit" class="btn btn-success" style="width:100%"><i class="fas fa-save"></i> Guardar</button>
                    </div>
                    {!!Form::close()!!}
                    
                    <div class="col-sm-4" style="text-align:center">
                    {!!Form::open(['route'=>['NNA.destroy', $nna], 'method' => 'DELETE'])!!}
                        <button type="submit" class="btn btn-danger" style="width:100%"><i class="fas fa-trash"></i> Eliminar</button>
                    </div>
                    {!!Form::close()!!}

                    <div class="col-sm-4" style="text-align:right">
                    {!!Form::open(['route'=>['pdf.buildpdf', $nna], 'method' => 'GET'])!!}
                    <button type="submit" class="btn btn-info" style="width:100%" target="_blank"><i class="fas fa-file-pdf"></i> PDF</button>
                    {!!Form::close()!!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- page end-->
@endsection