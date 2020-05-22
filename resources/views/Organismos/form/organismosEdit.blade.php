<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('nombre','Nombre del organismo:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del organismo'])!!}
	</div>
</div>
<br>

{!!Form::hidden('id',null,null)!!}