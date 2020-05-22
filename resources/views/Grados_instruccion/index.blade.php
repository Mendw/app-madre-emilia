@extends('layouts.principal')
  @section('title', 'Grados de instrucción')
 
@section('content')  
	@include('alerts.messages')
	<div class="panel" >
		<div class="panel-header">
			<div class="panel-heading"></div>
			<div class="row" style="margin: 10px;">
					<div class="col-10">
						<h4>Grados de instrucción</h4>
					</div>
					<div>
						<a  href="{!!URL::to('/GradosInstruccion/create')!!}">
							<div class="btn btn-info" style="text-align: center">
								Crear Grado
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
							<th>Nombre</th>
							<th>Operación</th>
						</thead>
						<tbody>
						@foreach($grados_instruccion as $datos)
						<tr>
						@if($datos != null)
							<td>{{$datos->nombre}}</td> 
							<td>
								<a class="btn btn-info" href="{!!URL::to('/GradosInstruccion/'.$datos->id.'/edit')!!}" style="text-align: center;">
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