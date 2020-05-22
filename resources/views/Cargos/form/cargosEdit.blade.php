<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('nombre','Nombre del cargo:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del cargo'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('descripcion','Descripción del cargo:')!!}
		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripción del cargo'])!!}
	</div>
</div>
<br>

{!!Form::hidden('id',null,null)!!}