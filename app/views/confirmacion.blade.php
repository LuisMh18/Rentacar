<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<title>Detalle reserva</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/estilos_reserva.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}

</head>

<style>
	.nota1{
		padding-bottom:0!important;
		font-size:18px!important;
	}
	.bolita{
		color:#31708f;
	}
	.div-numero-reserva{
		padding:5px 0;
		width:100%;
		margin:0 auto;
		color:white;
		background:#31708f;
		margin-bottom:5px;
		margin-top:5px;
	}
	.c-d-c{
		padding-left:40px!important;
	}

	.f-cliente{
		font-weight:bold;
		color: #31708f;
	}

	.hr-oculto{
		margin:3px;
		opacity:0;
	}

	.contenedor-datos-vehiculo{
		margin:0 0 20px 0!important;
		padding: 20px 0;
	}

	.datos-del-vehiculo{
		padding:10px!important;
	}

	.f-vehiculo{
		font-weight:bold;
		color: #31708f;
	}

	.f-vehiculo-t{
		font-weight:bold;
		color: #31708f;
		font-size:18px;
	}

	.datos-del-vehiculo-2{
		padding-left:20px!important;
	}

	.form3 .c3 {
    max-width: 50%;
    min-width: 50%;
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

				<h1 style="margin-bottom:0;" class="text-center text-primary">Detalle de la reserva</h1>

				<hr style="margin-top:5px!important">

				@foreach($reserva as $r)
					<p class="nota1 text-center"><span class="text-info">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<div class="div-numero-reserva">
						<p style="margin-bottom:0;" class="text-center"><span>Número de reserva: </span><span>{{ $r->num_reserva }}</span></p>
					</div>
				@endforeach


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				   @foreach($cliente as $c)

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

						<span class="f-cliente">Nombre:</span> {{ $c->nombre }} <br>
						<hr class="hr-oculto">
						<span class="f-cliente">Apellidos:</span> {{ $c->apellidos }} <br>
						<hr class="hr-oculto">
						<span class="f-cliente">Email:</span> {{ $c->email }} <br>
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2">

						<span class="f-cliente">Teléfono:</span> {{ $c->telefono }} <br>
						<hr class="hr-oculto">
						<span class="f-cliente">N° de Licencia:</span> {{ $c->num_licencia }} <br>
						<hr class="hr-oculto">
						@if($c->comentarios == '') @else <span class="f-cliente">Comentarios:</span> {{ $c->comentarios }} @endif
						
					</div>

				  @endforeach
				  
				</div>



				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				  @foreach($reserva as $r)

					<div class="c3 img-ve" style="text-align:center">
							<img width="200px" src="/img/vehiculos/{{ $r->foto }}" alt="Foto del vehículo">
					</div>
					<div class="datos-del-vehiculo datos-del-vehiculo-2">

						<span class="f-vehiculo">Vehículo:</span> {{ $r->vehiculo }} <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Transmisión:</span> @if($r->transmision == 1) Automático @else Estándard @endif <br> 
						<hr class="hr-oculto">
						<span class="f-vehiculo">Tarifa por día:</span> ${{ number_format($r->tarifa_por_dia, 2) }} <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Días de reservación:</span> {{ $r->dias }} <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Total:</span> ${{ number_format($r->dias * $r->tarifa_por_dia, 2) }} <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">“Incluye Renta, KM Libre, Coberturas e IVA”.</span> <br> 
						<hr class="hr-oculto">

						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo ">

						<span class="f-vehiculo-t">Información de entrega</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Fecha: </span>{{ $r->fecha_entrega }}<br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Hora: </span>{{ $r->hora_entrega }}
						<hr class="hr-oculto">
						<span class="f-vehiculo">Lugar: </span>{{ $r->lugar_entrega }} <br>
						<hr class="hr-oculto">
						@if($r->telefono1_e == '') @else<span class="f-vehiculo">Teléfono: </span> {{ $r->telefono1_e }} <br>@endif  @if($r->telefono2_e == '') @else {{ $r->telefono2_e }} <br>@endif
							@if($r->telefono3_e == '') @else {{ $r->telefono3_e }} <br>@endif
							@if($r->telefono4_e == '') @else {{ $r->telefono4_e }} <br>@endif
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2">

						<span class="f-vehiculo">{{ $r->direccion1_e }} </span><br>
						<hr class="hr-oculto">
						@if($r->direccion2_e == '') @else <span class="f-vehiculo">{{ $r->direccion2_e }} </span><br> <hr class="hr-oculto">@endif 

						<span class="f-vehiculo">{{ $r->colonia_e }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ $r->estado_e }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ $r->municipio_e }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">CP: {{ $r->cp_e }}</span><br>
						<hr class="hr-oculto">
						@if($r->referencias_e == '') @else <span class="f-vehiculo">Referencias: {{ $r->referencias_e }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo ">

						<span class="f-vehiculo-t">Información de Devolución</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Fecha: </span>{{ $r->fecha_devolucion }}<br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Hora: </span>{{ $r->hora_devolucion }}
						<hr class="hr-oculto">
						<span class="f-vehiculo">Lugar: </span>{{ $r->lugar_devolucion }} <br>
						<hr class="hr-oculto">
						@if($r->telefono1_d == '') @else<span class="f-vehiculo">Teléfono: </span> {{ $r->telefono1_d }} <br>@endif  @if($r->telefono2_d == '') @else {{ $r->telefono2_d }} <br>@endif
							@if($r->telefono3_d == '') @else {{ $r->telefono3_d }} <br>@endif
							@if($r->telefono4_d == '') @else {{ $r->telefono4_d }} <br>@endif
						
					</div>



					<div class="datos-del-vehiculo datos-del-vehiculo-2 ">

						<span class="f-vehiculo">{{ $r->direccion1_d }} </span><br>
						<hr class="hr-oculto">
						@if($r->direccion2_d == '') @else <span class="f-vehiculo">{{ $r->direccion2_d }} </span><br> <hr class="hr-oculto">@endif 

						<span class="f-vehiculo">{{ $r->colonia_d }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ $r->estado_d }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ $r->municipio_d }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">CP: {{ $r->cp_d }}</span><br>
						<hr class="hr-oculto">
						@if($r->referencias_d == '') @else <span class="f-vehiculo">Referencias: {{ $r->referencias_d }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>

					

				<section class="section_cliente">


	<div class="seccion_tabla section-reserva">

	<div class="tabla-sucursal">
		

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
