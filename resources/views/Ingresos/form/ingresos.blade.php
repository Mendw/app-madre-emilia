<div class="row">
    <div class="col-6">
        {!!Form::label('id_nna','Niño, niña o adolescente:')!!}
        <select class="form-control" name="id_nna" id="id_nna">
            <option  value="" >Seleccione al niño, niña o adolescente</option>
            @foreach($nna as $option)
                <option  value="{{$option->id}}">
                {{$option->nombre}} {{$option->apellido}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-6 round-input">
		{!!Form::label('fecha','Fecha de ingreso:')!!}
		{!!Form::date('fecha',null,['class'=>'form-control'])!!}
	</div>
</div>
<div class="row">
    <div class="col-6">
        {!!Form::label('id_empleado','Empleado:')!!}
        <select class="form-control" name="id_empleado" id="id_empleado">
            <option  value="" >Seleccione el empleado</option>
            @foreach($empleados as $option)
                <option  value="{{$option->id}}">
                {{$option->nombre}} {{$option->apellido}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-6">
        {!!Form::label('id_funcionario','Funcionario:')!!}
        <select class="form-control" name="id_funcionario" id="id_funcionario">
            <option  value="" >Seleccione el funcionario</option>
            @foreach($funcionarios as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}} {{$option->apellido}}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-12 round-input">
		{!!Form::label('motivo','Motivo:')!!}
		{!!Form::text('motivo',null,['class'=>'form-control','placeholder'=>'Ingrese el motivo del ingreso'])!!}
	</div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}