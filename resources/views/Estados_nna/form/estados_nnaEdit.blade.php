<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('nombre','Nombre del estado:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del estado'])!!}
	</div>
</div>
<br>

{!!Form::hidden('id',null,null)!!}