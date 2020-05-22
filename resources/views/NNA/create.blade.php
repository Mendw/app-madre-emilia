@extends('layouts.principal')
  @section('title', 'Crear NNA')

  @section('content')
    @include('alerts.request')
    <!-- page start-->
        <div class="panel">
            <div class="panel-body">
                <div class="panel-heading">
                    <a href="{!!URL::to('NNA')!!}">
                        <div class="col-3 fas fa-arrow-left " style="text-align: left; color: #fff">
                            <span>
                                Volver a Niños, niñas y adolescentes
                            </span>
                        </div>
                    </a> 
                </div>
                <div class="row" style="margin: 10px;">
                    <div>
                        <h4>Crear Niño, niña o adolescente</h4>
                    </div>
                </div>
                <div class="panel-body" style="padding: 10px;">
                {!!Form::open(['route'=>'NNA.store', 'method'=>'POST'])!!}
                    @include('NNA.form.nna')
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