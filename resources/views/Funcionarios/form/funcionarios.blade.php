<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del funcionario'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese el apellido del funcionario'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('cedula','Cédula:')!!}
		{!!Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Ingrese la cédula del funcionario'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('telefono','Teléfono:')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese el teléfono del funcionario'])!!}
	</div>
</div>
<div class="row">
	<div class="form-group col-6 round-input">
		{!!Form::label('cargo','Cargo:')!!}
		{!!Form::text('cargo',null,['class'=>'form-control','placeholder'=>'Ingrese el cargo del funcionario'])!!}
	</div>
    <div class="form-group col-6 round-input">
		{!!Form::label('detalle_organismo','Detalle Organismo:')!!}
		{!!Form::text('detalle_organismo',null,['class'=>'form-control','placeholder'=>'Ingrese el detalle organismo'])!!}
	</div>
</div>
<div class="row">
    <div class="col-12">
		{!!Form::label('organismo','Organismo del funcionario:')!!}
	</div>
</div>
<div class="row">
    <div class="col-6">
        <select class="form-control" name="id_organismo" id="id_organismo">
            <option  value="" >Seleccione el organismo del funcionario</option>
            @foreach($organismos as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
                </option>
            @endforeach
        </select>
    </div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}