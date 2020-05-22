@extends('layouts.principal')
  @section('title', 'Asociar Familiar')

  @section('content')
    @include('alerts.request')
    <!-- page start-->
        <div class="panel">
            <div class="panel-body">
                <div class="panel-heading">
                    <a href="{!!URL::to('FamiliaresNNA')!!}">
                        <div class="col-3 fas fa-arrow-left " style="text-align: left; color: #fff">
                            <span>
                                Volver a Familiares por niño
                            </span>
                        </div>
                    </a> 
                </div>
                <div class="row" style="margin: 10px;">
                    <div>
                        <h4>Asociar Familiar</h4>
                    </div>
                </div>
                <div class="panel-body" style="padding: 10px;">
                {!!Form::open(['route'=>'FamiliaresNNA.store', 'method'=>'POST'])!!}
                    @include('FamiliaresNNA.form.familiaresnna')
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