@extends('layouts.principal')
  @section('title', 'Ingresos')
 
@section('content')  
	@include('alerts.messages')
	<div class="panel" >
		<div class="panel-header">
			<div class="panel-heading"></div>
			<div class="row" style="margin: 10px;">
                <div class="col-10">
                    <h4>Ingresos</h4>
                </div>
                <div>
                    <a  href="{!!URL::to('/Ingresos/create')!!}">
                        <div class="btn btn-info" style="text-align: center">
                            Realizar Ingreso
                        </div>
                    </a>
                </div>
            </div>
		</div>
		<div class="panel-body">
			<div>
				<div style="background-color: #F5F5F5; height: 16px; margin: 10px -10px;"></div>
				<div>
					<table class="table">
						<thead>
							<th>Fecha</th>
							<th>Niño, niña o adolescente</th>
							<th>Empleado</th>
							<th>Funcionario</th>
							<th>Operación</th>
						</thead>
						<tbody>
						@foreach($ingresos as $datos)
						<tr>
						@if($datos != null)
							<td>{{$datos->fecha}}</td> 
							<td>{{$datos->nna->nombre}} {{$datos->nna->apellido}}</td> 
							<td>{{$datos->empleado->nombre}} {{$datos->empleado->apellido}}</td> 
							<td>{{$datos->funcionario->nombre}} {{$datos->funcionario->apellido}}</td> 
							<td>
								<a class="btn btn-info" href="{!!URL::to('/Ingresos/'.$datos->id.'/edit')!!}" style="text-align: center;">
									Ver Opciones
								</a>
							</td>
						@endif
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection

@push('scripts')
	
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>

	$(document).ready( function () {
		$('.table').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
	} );

</script>

@endpush