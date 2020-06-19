<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #CCFFFF;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
        <div style="text-align: center;"> 
        <h1>Reporte Hogar Madre Emilia</h1>
        <table style="width:100%">
            <tr>
                <th><h2>Niños registrados:</h2></th>
                <td><h2>{{$total}}</h2></td>
            </tr>
            <tr>
                <th><h2>Niños activos:</h2></th>
                <td><h2>{{$activos}}</h2></td>
            </tr>
            <tr>
                <th><h2>Niños inactivos:</h2></th>
                <td><h2>{{$inactivos}}</h2></td>
            </tr>
        </table>
        </div>

        <div style="page-break-after: always;"></div>
        <div>
        @foreach($data as $n)
            <h1>{{$n->nombre}} {{$n->apellido}}</h1>
        </div>
        <div>
        <table style="width:100%">
        <tr>
            <th>Cedula:</th>
            <td>{{$n->cedula}}</td>
        </tr>
        <tr>
            <th>Telefono:</th>
            <td>{{ $n->telefono }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento:</th>
            <td>{{ $n->fecha_nacimiento }}</td>
        </tr>
        <tr>
            <th>Lugar de nacimiento:</th>
            <td>{{$n->lugar_nacimiento}}</td>
        </tr>
        <tr>
            <th>Talla:</th>
            <td>{{ $n->talla }}</td>
        </tr>
        <tr>
            <th>Peso: </th>
            <td>{{ $n->peso }}</td>
        </tr>
        <tr>
            <th>Direccion:</th>
            <td>{{$n->direccion }}</td>
        </tr>
        <tr>
            <th>Tipo de Sangre:</th>
            <td>{{ $n->tipo_sangre }}</td>
        </tr>
        <tr>
            <th>Grado de instrucción:</th>
            <td>{{ $n->grado_instruccion }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>{{ $n->estado }}</td>
        </tr>
        <tr>
            <th>Escolaridad:</th>
            <td>{{ $n->escolaridad }}</td>
        </tr>
        <tr>
            <th>Dirección unidad educativa:</th>
            <td>{{ $n->unidad_educativa }}</td>
        </tr>
        <tr>
            <th>Medida de protección:</th>
            <td>{{ $n->medida_proteccion }}</td>
        </tr>
        <tr>
            <th>Número de medida:</th>
            <td>{{ $n->numero_medida }}</td>
        </tr>
        <tr>
            <th>Fecha de la medida:</th>
            <td>{{ $n->fecha_medida }}</td>
        </tr>
        <tr>
            <th>Expediente:</th>
            <td>{{ $n->expediente }}</td>
        </tr>
        <tr>
            <th>Evaluación psicológica:</th>
            <td>{{$n->evaluacion_psicologica}}</td>
        </tr>
        </table>
        <div style="page-break-after: always;"></div>
        @endforeach
        </div>
</body>
</html>