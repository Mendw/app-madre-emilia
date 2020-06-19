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
<div>
            <h1>{{$nombre}} {{$apellido}}</h1>
        </div>
        <div>
        <table style="width:100%">
        <tr>
            <th>Cedula:</th>
            <td>{{$cedula}}</td>
        </tr>
        <tr>
            <th>Telefono:</th>
            <td>{{ $telefono }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento:</th>
            <td>{{ $fecha_nacimiento }}</td>
        </tr>
        <tr>
            <th>Lugar de nacimiento:</th>
            <td>{{$lugar_nacimiento}}</td>
        </tr>
        <tr>
            <th>Talla:</th>
            <td>{{ $talla }}</td>
        </tr>
        <tr>
            <th>Peso: </th>
            <td>{{ $peso }}</td>
        </tr>
        <tr>
            <th>Direccion:</th>
            <td>{{$direccion }}</td>
        </tr>
        <tr>
            <th>Tipo de Sangre:</th>
            <td>{{ $tipo_sangre }}</td>
        </tr>
        <tr>
            <th>Grado de instrucción:</th>
            <td>{{ $grado_instruccion }}</td>
        </tr>
        <tr>
            <th>Estado:</th>
            <td>{{ $estado }}</td>
        </tr>
        <tr>
            <th>Escolaridad:</th>
            <td>{{ $escolaridad }}</td>
        </tr>
        <tr>
            <th>Dirección unidad educativa:</th>
            <td>{{ $unidad_educativa }}</td>
        </tr>
        <tr>
            <th>Medida de protección:</th>
            <td>{{ $medida_proteccion }}</td>
        </tr>
        <tr>
            <th>Número de medida:</th>
            <td>{{ $numero_medida }}</td>
        </tr>
        <tr>
            <th>Fecha de la medida:</th>
            <td>{{ $fecha_medida }}</td>
        </tr>
        <tr>
            <th>Expediente:</th>
            <td>{{ $expediente }}</td>
        </tr>
        <tr>
            <th>Evaluación psicológica:</th>
            <td>{{$evaluacion_psicologica}}</td>
        </tr>
        </table>
        </div>
</body>
</html>

       
