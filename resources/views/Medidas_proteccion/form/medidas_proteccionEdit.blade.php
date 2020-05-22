<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('nombre','Nombre de la medida:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la medida'])!!}
	</div>
</div>
<br>

{!!Form::hidden('id',null,null)!!}