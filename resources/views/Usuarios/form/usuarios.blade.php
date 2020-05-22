<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('name','Nombre del usuario:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del usuario'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-12 round-input">
		{!!Form::label('email','Email del usuario:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el email del usuario'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-lg-4 col-md-4 col-sm-4 round-input" style="text-align: right;">
		{!!Form::label('password','Contraseña:')!!}
	</div>
	<div class="form-group col-lg-6 col-md-6 col-sm-6 round-input"></div>
</div>
<div class="row">
	<div class="form-group col-lg-3 col-md-3 col-sm-3 round-input"></div>
	<div class="form-group col-lg-6 col-md-6 col-sm-6 round-input">
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña (mínimo 6 caracteres)'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-lg-3 col-md-3 col-sm-3 round-input"></div>
	<div class="form-group col-lg-6 col-md-6 col-sm-6 round-input">
		{!!Form::password('password2',['class'=>'form-control','placeholder'=>'Ingrese la contraseña de nuevo'])!!}
	</div>
</div>
<br>

{!!Form::hidden('id',null,null)!!}