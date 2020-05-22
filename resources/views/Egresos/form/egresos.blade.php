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
		{!!Form::label('fecha','Fecha de egreso:')!!}
		{!!Form::date('fecha',null,['class'=>'form-control'])!!}
	</div>
</div>
<div class="row">
    <div class="col-6">
        {!!Form::label('id_familiar','Familiar:')!!}
        <select class="form-control" name="id_familiar" id="id_familiar">
            <option  value="" >Seleccione el familiar</option>
            @foreach($familiares as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}} {{$option->apellido}}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-12 round-input">
		{!!Form::label('detalles','Detalles:')!!}
		{!!Form::text('detalles',null,['class'=>'form-control','placeholder'=>'Ingrese los detalles del egreso'])!!}
	</div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}