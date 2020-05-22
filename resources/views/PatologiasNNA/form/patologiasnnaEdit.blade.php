<div class="row">
    <div class="col-6">
        {!!Form::label('id_patologia','Patología:')!!}
        @if($patologianna->id_patologia == null)
            <select class="form-control" name="id_patologia" id="id_patologia">
                <option  value="" >Seleccione la patología</option>
                @foreach($patologias as $option)
                    <option  value="{{$option->id}}">
                        {{$option->nombre}}
                    </option>
                @endforeach
            </select>
        @else
            <select class="form-control" name="id_patologia" id="id_patologia">
                @foreach($patologias as $option)
                    @if($patologianna->id_patologia == $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}}</option>
                    @endif	
                @endforeach
                @foreach($patologias as $option)
                    @if($patologianna->id_patologia != $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}}</option>
                    @endif
                @endforeach
            </select>
        @endif
    </div>
    <div class="col-6">
        {!!Form::label('id_nna','Niño, niña o adolescente:')!!}
        @if($patologianna->id_nna == null)
            <select class="form-control" name="id_nna" id="id_nna">
                <option  value="" >Seleccione al niño, niña o adolescente</option>
                @foreach($nna as $option)
                    <option  value="{{$option->id}}">
                        {{$option->nombre}} {{$option->apellido}}
                    </option>
                @endforeach
            </select>
        @else
            <select class="form-control" name="id_nna" id="id_nna">
                @foreach($nna as $option)
                    @if($patologianna->id_nna == $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif	
                @endforeach
                @foreach($nna as $option)
                    @if($patologianna->id_nna != $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif
                @endforeach
            </select>
        @endif
    </div>
</div>

<br>

{!!Form::hidden('id',null,null)!!}