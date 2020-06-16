<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    

    <!-- Bootstrap CSS -->    
    {!!Html::style('css/bootstrap.min.css')!!}
    <!-- bootstrap theme -->
    {!!Html::style('css/bootstrap-theme.css')!!}
    <!-- font icon -->
    {!!Html::style('css/elegant-icons-style.css')!!}
    {!!Html::style('fontAwesome/css/all.css')!!}
    <!-- Custom styles -->
    {!!Html::style('css/estilo.css')!!}


</head>
<body style="background-color: #AAE9FF;">
    <div class="">
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">Casa Hogar Madre Emilia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Usuarios">Usuarios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="NNA">Niños</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Empleados">Empleados</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Ingresos">Ingresos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Egresos">Egresos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="##" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Otros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="MedidasProteccion">Medidas de protección</a>
                    <a class="dropdown-item" href="GradosInstruccion">Grados de instrucción</a>
                    <a class="dropdown-item" href="Escolaridades">Escolaridades</a>
                    <a class="dropdown-item" href="EstadosNNA">Estados de los niños</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Familiares">Familiares</a>
                    <a class="dropdown-item" href="FamiliaresNNA">Familiares por niño</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Patologias">Patologías</a>
                    <a class="dropdown-item" href="PatologiasNNA">Patologías por niño</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Organismos">Organismos</a>
                    <a class="dropdown-item" href="Funcionarios">Funcionarios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Cargos">Cargos</a>
                    </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            
            </div>
            </nav>
        @show
    </div>
    <div class="content" style="">
        @yield('content')
    </div>
    <div class="footer">
    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    @stack('scripts')

</body>
</html>