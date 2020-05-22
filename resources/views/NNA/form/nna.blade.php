<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('cedula','Cédula:')!!}
		{!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Ingrese la cédula'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('telefono','Teléfono:')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese el teléfono'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('fecha_nacimiento','Fecha de nacimiento:')!!}
		{!!Form::date('fecha_nacimiento',null,['class'=>'form-control'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('lugar_nacimiento','Lugar de nacimiento:')!!}
		{!!Form::text('lugar_nacimiento',null,['class'=>'form-control','placeholder'=>'Ingrese el lugar de nacimiento'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('talla','Talla:')!!}
		{!!Form::text('talla',null,['class'=>'form-control','placeholder'=>'Ingrese la talla'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('peso','Peso:')!!}
		{!!Form::text('peso',null,['class'=>'form-control','placeholder'=>'Ingrese el peso'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección'])!!}
	</div>
    <div class="col-6">
        {!!Form::label('tipo_sangre','Tipo de sangre:')!!}
        <select class="form-control" name="tipo_sangre" id="tipo_sangre">
            <option  value=""> Seleccione el tipo de sangre</option>
                <option  value="A+"> A+ </option>
                <option  value="A-"> A- </option>
                <option  value="AB+"> AB+ </option>
                <option  value="AB-"> AB- </option>
                <option  value="B+"> B+ </option>
                <option  value="B-"> B- </option>
                <option  value="O+"> O+ </option>
                <option  value="O-"> O- </option>
        </select>
    </div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('id_grado','Grado de instrucción:')!!}
		<select class="form-control" name="id_grado" id="id_grado">
            <option  value="" >Seleccione el grado de instrucción</option>
            @foreach($grados_instruccion as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
                </option>
            @endforeach
        </select>
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('id_escolaridad','Escolaridad:')!!}
		<select class="form-control" name="id_escolaridad" id="id_escolaridad">
            <option  value="" >Seleccione la escolaridad</option>
            @foreach($escolaridades as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
                </option>
            @endforeach
        </select>
	</div>
</div>
<div class="row">
    <div class="form-group col-6 round-input">
		{!!Form::label('unidad_educativa','Unidad educativa:')!!}
		{!!Form::text('unidad_educativa',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la unidad educativa'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('direccion_unidad_educativa','Dirección unidad educativa:')!!}
		{!!Form::text('direccion_unidad_educativa',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección de la unidad educativa'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('id_medida','Medida de protección:')!!}
		<select class="form-control" name="id_medida" id="id_medida">
            <option  value="" >Seleccione la medida de protección</option>
            @foreach($medidas_proteccion as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
                </option>
            @endforeach
        </select>
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('numero_medida','Número de medida:')!!}
		{!!Form::text('numero_medida',null,['class'=>'form-control','placeholder'=>'Ingrese el número de la medida'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('fecha_medida','Fecha de la medida:')!!}
		{!!Form::date('fecha_medida',null,['class'=>'form-control'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('expediente','Expediente:')!!}
		{!!Form::text('expediente',null,['class'=>'form-control','placeholder'=>'Ingrese el expediente'])!!}
	</div>
</div>

<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('id_estado','Estado:')!!}
		<select class="form-control" name="id_estado" id="id_estado">
            <option  value="" >Seleccione el estado</option>
            @foreach($estados_nna as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
                </option>
            @endforeach
        </select>
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('evaluacion_psicologica','Evaluación psicológica:')!!}
		{!!Form::text('evaluacion_psicologica',null,['class'=>'form-control','placeholder'=>'Ingrese la evaluación psicológica'])!!}
	</div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}