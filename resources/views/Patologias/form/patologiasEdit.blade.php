<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la patología'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('gravedad','Gravedad:')!!}
		{!!Form::text('gravedad',null,['class'=>'form-control','placeholder'=>'Ingrese la gravedad de la patología'])!!}
	</div>
</div>
<div class="row">
    <div class="form-group col-12 round-input">
		{!!Form::label('descripcion','Descripción:')!!}
		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripción de la patología'])!!}
	</div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}