<div class="row">
    <div class="col-6">
        {!!Form::label('id_familiar','Familiar:')!!}
        @if($familiaresnna->id_familiar == null)
            <select class="form-control" name="id_familiar" id="id_familiar">
                <option  value="" >Seleccione el familiar</option>
                @foreach($familiares as $option)
                    <option  value="{{$option->id}}">
                        {{$option->nombre}}
                    </option>
                @endforeach
            </select>
        @else
            <select class="form-control" name="id_familiar" id="id_familiar">
                @foreach($familiares as $option)
                    @if($familiaresnna->id_familiar == $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif	
                @endforeach
                @foreach($familiares as $option)
                    @if($familiaresnna->id_familiar != $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif
                @endforeach
            </select>
        @endif
    </div>
    <div class="col-6">
        {!!Form::label('id_nna','Niño, niña o adolescente:')!!}
        @if($familiaresnna->id_nna == null)
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
                    @if($familiaresnna->id_nna == $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif	
                @endforeach
                @foreach($nna as $option)
                    @if($familiaresnna->id_nna != $option->id)
                        <option  value="{{$option->id}}">{{$option->nombre}} {{$option->apellido}}</option>
                    @endif
                @endforeach
            </select>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-6">
        {!!Form::label('parentesco','Parentesco:')!!}
        <select class="form-control" name="parentesco" id="parentesco">
            @if($familiaresnna->parentesco == null)
                <option  value="" >Seleccione el parentesco</option>
            @else
                <option  value="{{$familiaresnna->parentesco}}" >{{$familiaresnna->parentesco}}</option>
            @endif
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