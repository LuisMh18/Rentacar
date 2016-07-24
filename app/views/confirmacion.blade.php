<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Detalle reserva</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/estilos_reserva.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}

</head>

<style>
	.nota1{
		padding-bottom:0!important;
		font-size:16px!important;
	}
</style>
<body>
	<div class="container section">

			 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
<div class="notifications bottom-right" data-html="true"></div>

		<div class="row">
			<div class="section_contenidos">
				<div class="logo-cabecera">
				 <div>
		      <img class="imagen-grande" src="/img/a1.png" alt="Logo">
				 </div>
				 <div>
		      <img class="imagen-grande" src="/img/a2.png" alt="Teléfono">
				 </div>
				</div>
				<div class="menu-cabecera">
				  <div class="menu-icon">
				  	<span class="txt-menu">Menú</span>
				    <span class="glyphicon glyphicon-th-list gly-menu"></span>
				  </div>
					<li><a class="enlace" href="#">Inicio</a></li>
					<li><a class="enlace" href="#">Acerca de nosotros</a></li>
					<li><a class="enlace" href="#">Nuestra flotilla</a></li>
					<li><a class="enlace" href="#">Facturación</a></li>
					<li><a class="enlace" href="#">Sucursales</a></li>
					<li><a class="enlace" href="#">Reservaciones</a></li>
				</div>
			<div class="contenedor-section-aside">
				<section class="section_articulos">
					<div class="contenidos">

			<div class="section_contenidos">

				<section class="section_cliente">

				<h1 class="text-center">Detalle de la reserva</h1>
				@foreach($reserva as $r)
					<p class="nota1 text-center"><span class="text-info">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<p class="nota1 text-center"><span class="text-info">N° reserva: </span><span class="dato-p-1">{{ $r->num_reserva }}</span></p>
				@endforeach

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
							<td>“Incluye Renta, KM Libre, Coberturas e IVA”.</td>
					</tr>

				<tr>
						<td>Lugar de entrega: {{ $r->lugar_entrega }}<span>• </span>Dirección 1: {{ $r->direccion1_e }} @if($r->direccion2_e == '') @else <span>• </span>Dirección 2: {{ $r->direccion2_e }} @endif <span>• </span>Colonia: {{ $r->colonia_e }} <span>• </span>Estado: {{ $r->estado_e }} <span>• </span>Municipio: {{ $r->municipio_e }} <span>• </span>CP: {{ $r->cp_e }} @if($r->referencias_e == '') @else <span>• </span>Referencias: {{ $r->referencias_e }} @endif <span>• </span>Fecha de entrega: {{ $r->fecha_entrega }}<span>• </span>Hora de entrega: {{ $r->hora_entrega }} @if($r->telefono1_e == '') @else <span>• </span>Teléfono: {{ $r->telefono1_e }} @endif
							@if($r->telefono2_e == '') @else {{ $r->telefono2_e }} @endif
							@if($r->telefono3_e == '') @else {{ $r->telefono3_e }} @endif
							@if($r->telefono4_e == '') @else {{ $r->telefono4_e }} @endif
			 </tr>
				<tr>
					<td>Lugar de devolución: {{ $r->lugar_devolucion }}<span>• </span>Dirección 1: {{ $r->direccion1_d }} @if($r->direccion2_d == '') @else <span>• </span>Dirección 2: {{ $r->direccion2_d }} @endif <span>• </span>Colonia: {{ $r->colonia_d }} <span>• </span>Estado: {{ $r->estado_d }} <span>• </span>Municipio: {{ $r->municipio_d }} <span>• </span>CP: {{ $r->cp_d }} @if($r->referencias_d == '') @else <span>• </span>Referencias: {{ $r->referencias_d }} @endif <span>• </span>Fecha de devolución: {{ $r->fecha_devolucion }}<span>• </span>Hora de devolución: {{ $r->hora_devolucion }} @if($r->telefono1_d == '') @else <span>• </span>Teléfono: {{ $r->telefono1_d }} @endif
						@if($r->telefono2_d == '') @else {{ $r->telefono2_d }} @endif
						@if($r->telefono3_d == '') @else {{ $r->telefono3_d }} @endif
						@if($r->telefono4_d == '') @else {{ $r->telefono4_d }} @endif
			 </td>
		 </tr>
		@endforeach

			</tbody>
	</table>

	<a href="{{ URL::to('confirmar/imprimir',$id) }}" id="imprimir" target="_blank" class="btn btn-default">Imprimir en pdf</a>

	<div>
			<a class="btn btn-info regresar_inicio">
					<span class="glyphicon glyphicon-chevron-left"></span>
								Regresar
			</a>
 </div>

	</div>
</div>

				<input type="text" name="name" value="{{ $id }}" id="id_sesion" class="hidden">
				</section>


					</div>
				</section>

				<aside class="aside-imagen">
				  <div class="aside-c">
				  	<a href="#">
						 <img src="/img/escribenos_email.png" alt="Imagen 1">
					  </a>
					  <a href="#">
						 <img src="/img/coduce_contacto.png" alt="Imagen 2">
					  </a>
				  </div>
				</aside>
			</div>
						<!-- Campo escondido con el id del codigo del vehiculo -->
						<input type="text" class="hidden" name="idcodigo" id="idcodigo">
				<footer>
					<small>
						EMOTIONS RENT A CAR - renta de autos en toluca - renta de autos df - renta de autos en monterrey - renta de autos en aguascalientes
					</small>
					<strong>
						<a href="#">
							Aviso de privasidad
						</a>
					</strong>
				</footer>

			</div>
		</div>
	</div>


	<script>

	$(document).on('click', '.regresar_inicio', function(){
						id = $('#id_sesion').val();

							$.ajax({
									url:  "/confirmar/eliminarsesion",
									type: "GET",
									data:{id: id},
									success: function(e){

		                 window.location.href = '/';


									},

									error: function(){
										alert('failure');
									}

						});



	});

	/*	$(document).on('click', '.enlace', function(){
						id = $('#id_sesion').val();

							$.ajax({
									url:  "/confirmar/eliminarsesion",
									type: "GET",
									data:{id: id},
									success: function(e){

									},

									error: function(){
										alert('failure');
									}

						});



	}); */

	</script>


</body>
</html>
