<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Detalle reserva</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
	{{ HTML::style('css/bootstrap-select.min.css') }}
	{{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}
	{{ HTML::Script('js/moment.min.js') }}
	{{ HTML::Script('js/bootstrap-datetimepicker.min.js') }}
	{{ HTML::Script('js/bootstrap-select.min.js') }}
	{{ HTML::Script('js/i18n/defaults-es_CL.min.js') }}
	{{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
</head>
<body>
	<div class="container section">
	
			 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
		<div class="row">
			<div class="section_contenidos">
	<h1 class="text-primary text-center conf-pedido" style="font-size:38px;">Detalle de la reserva</h1>
			@foreach($reserva as $r)
				<h4 class="text-da text-center"><span class="text-info">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></h4>
				<h4 class="text-da text-center"><span class="text-info">N° reserva: </span><span class="dato-p-1">{{ $r->num_reserva }}</span></h4>
			@endforeach
				<section class="section_cliente">
				
				
						  <h4 class="text-info text-center">Datos del cliente</h4>
          <table class="table table-d-xs">
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>
            <tbody id="body-det">
             @foreach($cliente as $c)
              <tr>
                <td>Nombre: <span class="rfc">{{ $c->nombre }}</span> <span>• </span>Apellidos: {{ $c->apellidos }} <span>• </span>Email: {{ $c->email }} <span>• </span></td>
              </tr>
              <tr>
                <td>Teléfono: {{ $c->telefono }} <span>• </span>N° de Licencia: {{ $c->num_licencia }} <span>• </span>Comentarios: {{ $c->comentarios }}</td>
              </tr>
													@endforeach
            </tbody>
          </table>
          
	<div class="seccion_tabla section-reserva">

	<div class="tabla-sucursal">
	<h4 class="text-info text-center">Datos de la reserva</h4>
		<table class="table table-d-xs table-de-ped">
			<thead>
					<tr>
							<th></th>
					</tr>
			</thead>
			<tbody id="body-det">
				@foreach($reserva as $r)
					<tr>
							<td>Vehículo: <span class="rfc">{{ $r->vehiculo }}</span> <span>• </span>Transmisión: @if($r->transmision == 1) Automático @else Estándard @endif <span>• </span>Tarifa por día: ${{ number_format($r->tarifa_por_dia, 2) }} <span>• </span>Días: {{ $r->dias }}<span>• </span> Total: ${{ number_format($r->tarifa_por_dia * $r->dias, 2) }} </td>
					</tr>
					<tr>
							<td>Lugar de entrega: {{ $r->lugar_entrega }}<span>• </span>Fecha de entrega: {{ $r->fecha_entrega }}<span>• </span>Hora de entrega: {{ $r->hora_entrega }}</td>
					</tr>
					<tr>
							<td>Lugar de devolucion: {{ $r->lugar_devolucion }}<span>• </span>Fecha de devolucion: {{ $r->fecha_devolucion }}<span>• </span>Hora de devolucion: {{ $r->hora_devolucion }}</td>
					</tr>
			@endforeach
			</tbody>
	</table>
		
	<a href="{{ URL::to('confirmar/imprimir',$id) }}" id="imprimir" target="_blank" class="btn btn-default">Imprimir en pdf</a>
	
	<div>
			<a id="regresar" href="{{ URL::to('/') }}" class="btn btn-info">
					<span class="glyphicon glyphicon-chevron-left"></span>
								Regresar
			</a>
 </div>
	
	</div>
</div>


				</section>
			</div>
		</div>
	</div>	
	
  
	
</body>
</html>