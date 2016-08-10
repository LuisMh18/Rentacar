<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>PDF</title>

	<style>


		.text-conf-pedido{
			text-align: left;
			font-size: 32px;
			color: #337ab7;
			margin-bottom:0;
		}

		.text-cli{
			text-align: center;
			font-size: 20px;
			color: #337ab7;
			margin-bottom:5px;
		}

		.divh4{
			width:250px;
			position:absolute;
			top:50px;
			right:10px;
			text-align:right;
		}

		.text-da-pd{
			margin-bottom:9px!important;
		}

		.text-da{
			text-align: right;
			font-size: 16px;
			margin:0;
		}



/*   --Nuevos estilos---  */

.form3 {
  width: 100%;
  border-bottom: 1px solid #CCC;
   }
  .form3:last-child {
    border-bottom: 0; }
  .form3 .c3 {
    width: 50%;
    background: white;
    border-right: solid 1px #CCC; }

.div-numero-reserva{
		padding-bottom:10px;
		width:100%;
		margin:0 auto;
		color:white;
		background:#31708f;
		margin-bottom:5px;
		margin-top:5px;
	}
	.c-d-c{
		padding-left:20px!important;
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
		margin:0 0 5px 0!important;
		padding: 5px 0;

	}

	.datos-del-vehiculo{
		display:inline-block;
		width:200px;
	}


	.datos-del-vehiculo2{
		padding:10px!important;
		display:inline-block;
	}

	.f-vehiculo{
		font-weight:bold;
		color: #31708f;
	}

	.f-vehiculo-t{
		font-weight:bold;
		color: #31708f;
		font-size:17px;
	}

	.datos-del-vehiculo-2{
		padding-left:20px!important;
	}
	</style>
</head>
<body>
	<div class="container section">

		<div class="row">
			<div class="section_contenidos">
	<h1 class="text-conf-pedido">Emotions Rent a Car</h1>
		<img src="img/a1.png" alt="Logo">





<div class="section_contenidos">

				<h1 style="margin-bottom:0; color:#337ab7; text-align:center; font-size:28px;">Detalle de la reserva</h1>

				<hr style="margin-top:5px!important; color:#eee;">

				@foreach($reserva as $r)
					<p style="text-align:center;"><span style="color:#31708f;">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<div class="div-numero-reserva" >
						<p style="margin-bottom:0; text-align:center;"><span>Número de reserva: </span><span>{{ $r->num_reserva }}</span></p>
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


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style="width:270px!important">

						<span class="f-cliente">Teléfono:</span> {{ $c->telefono }} <br>
						<hr class="hr-oculto">
						<span class="f-cliente">N° de Licencia:</span> {{ $c->num_licencia }} <br>
						<hr class="hr-oculto">
						@if($c->comentarios == '') @else <span class="f-cliente">Comentarios:</span> {{ $c->comentarios }} @endif
						
					</div>

				  @endforeach
				  
				</div>



				<div class="contenedor-datos-vehiculo form3 tipo-transmision" >
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c" style="text-align:center;margin-top:20px;">
							<img width="200px" src="img/vehiculos/{{ $r->foto }}" alt="Foto del vehículo">
					</div>
					<div class="datos-del-vehiculo datos-del-vehiculo-2" style=" width:270px!important">

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

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

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


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style=" width:270px!important">

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

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

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



					<div class="datos-del-vehiculo datos-del-vehiculo-2 " style=" width:270px!important">

						<span class="f-vehiculo">{{ $r->direccion1_d }} </span><br>
						<hr class="hr-oculto">
						@if($r->direccion2_e == '') @else <span class="f-vehiculo">{{ $r->direccion2_d }} </span><br> <hr class="hr-oculto">@endif 

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

			</div><!-- end section_contenidos -->


			</div>
		</div>
	</div>



</body>
</html>
