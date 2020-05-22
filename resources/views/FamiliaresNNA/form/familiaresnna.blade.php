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
</div>
<div class="row">
    <div class="col-6">
        {!!Form::label('parentesco','Parentesco:')!!}
        <select class="form-control" name="parentesco" id="parentesco">
            <option  value="" >Seleccione el parentesco</option>
                <option  value="padre/madre"> padre/madre </option>
                <option  value="tio/a"> tio/a </option>
                <option  value="primo/a"> primo/a </option>
                <option  value="hermano/a"> hermano/a </option>
                <option  value="abuelo/a"> abuelo/a </option>
                <option  value="otro"> otro </option>
        </select>
    </div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}