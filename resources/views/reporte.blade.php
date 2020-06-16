<html>
    <body>
        <div>
            Estadisticas
            <h2>Niños registrados: {{$total}}</h2>
            <h2>Niños activos: {{$activos}}</h2>
            <h2>Niños inactivos: {{$inactivos}}</h2>
        </div>
        <div>
            @foreach($data as $n)
                <h1>Nombre: {{ $n->nombre }}</h1>
                <h1>Apellido: {{ $n->apellido }}</h1>
                <h1>Cedula: {{$n->cedula }}</h1>
                <h1>Telefono: {{ $n->telefono }}</h1>
                <h1>Fecha de nacimiento: {{ $n->fecha_nacimiento }}</h1>
                <h1>Lugar de nacimiento: {{ $n->lugar_nacimiento }}</h1>
                <h1>Talla: {{ $n->talla }}</h1>
                <h1>Peso: {{ $n->peso }}</h1>
                <h1>Direccion: {{ $n->direccion }}</h1>
                <h1>Tipo de Sangre: {{ $n->tipo_sangre }}</h1>
                <h1>Grado de instrucción: {{ $n->grado_instruccion }}</h1>
                <h1>Estado: {{ $n->estado }}</h1>
                <h1>Escolaridad: {{ $n->escolaridad }}</h1>
                <h1>Dirección unidad educativa: {{ $n->unidad_educativa }}</h1>
                <h1>Medida de protección: {{ $n->medida_proteccion }}</h1>
                <h1>Número de medida: {{ $n->numero_medida }}</h1>
                <h1>Fecha de la medida: {{ $n->fecha_medida }}</h1>
                <h1>Expediente: {{ $n->expediente }}</h1>
                <h1>Evaluación psicológica: {{ $n->evaluacion_psicologica }}</h1>
            @endforeach
        </div>
    </body>
</html>