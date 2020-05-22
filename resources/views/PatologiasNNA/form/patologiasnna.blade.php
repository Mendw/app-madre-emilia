<div class="row">
    <div class="col-6">
        {!!Form::label('id_patologia','Patología:')!!}
        <select class="form-control" name="id_patologia" id="id_patologia">
            <option  value="" >Seleccione la patología</option>
            @foreach($patologias as $option)
                <option  value="{{$option->id}}">
                    {{$option->nombre}}
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

<br>

{!!Form::hidden('id',null,null)!!}