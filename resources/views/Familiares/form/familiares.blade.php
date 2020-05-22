<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del familiar'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido del familiar'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('cedula','Cédula:')!!}
		{!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Ingrese la cédula del familiar'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('telefono','Teléfono:')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese el teléfono del familiar'])!!}
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
	<div class="form-group col-12 round-input">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección'])!!}
	</div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}