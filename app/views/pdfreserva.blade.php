<!DOCTYPE html>
<html lang="es">
<head>
	
	<!--<meta charset="UTF-8">-->
	<title>PDF</title>

	<style>


		.text-conf-pedido{
			text-align: left;
			font-size: 28px;
			color: #337ab7;
			margin-bottom:0;
			width:50%;
			display:inline-block;
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
		padding:5px 0;
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
		font-size:13px;
	}

	.hr-oculto{
		margin:1px;
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
		font-size:13px;
	}

	.datos-r{
		font-size:13px;
	}


	.f-vehiculo-t{
		font-weight:bold; 
		color: #31708f;
		font-size:15px;
	}

	.datos-del-vehiculo-2{
		padding-left:20px!important;
	}


	.img-logo{
		margin-left:18%;
	}
	</style>
</head>
<body>
	<div class="container section">

		<div class="row">
			<div class="section_contenidos">

	<div class="div-texto-logo">
	   <h1 class="text-conf-pedido">Emotions Rent a Car</h1>
	  <img src="img/a1.png" alt="Logo" class="img-logo">
	</div>

	
		


<div class="section_contenidos">

				<h1 style="margin-bottom:0; color:#337ab7; text-align:center; font-size:24px;">Detalle de la reserva</h1>

				<hr style="margin-top:5px!important; color:#eee;">

				@foreach($reserva as $r)
					<p style="text-align:center; margin:10px 0;"><span style="color:#31708f;">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<div class="div-numero-reserva" >
						<p style="margin-bottom:0; margin-top:0; text-align:center;"><span>N&uacute;mero de reserva: </span><span>{{ $r->num_reserva }}</span></p>
					</div>
				@endforeach


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				   @foreach($cliente as $c)

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

						<span class="f-cliente">Nombre:</span> <span class="datos-r"> {{ utf8_decode($c->nombre) }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-cliente">Apellidos:</span> <span class="datos-r">{{ utf8_decode($c->apellidos) }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-cliente">Email:</span> <span class="datos-r">{{ $c->email }}</span> <br>
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style="width:270px!important">

						<span class="f-cliente">Tel&eacute;fono:</span> <span class="datos-r">{{ $c->telefono }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-cliente">N&#176; de Licencia:</span> <span class="datos-r">{{ $c->num_licencia }}</span> <br>
						<hr class="hr-oculto">
						@if($c->comentarios == '') @else <span class="f-cliente">Comentarios:</span> <span class="datos-r">{{ utf8_decode($c->comentarios) }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>



				<div class="contenedor-datos-vehiculo form3 tipo-transmision" >
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c" style="text-align:center;margin-top:20px;">
							<img width="200px" src="img/vehiculos/{{ $r->foto }}" alt="Foto del vehículo">
					</div>
					<div class="datos-del-vehiculo datos-del-vehiculo-2" style=" width:270px!important">

					<span class="f-vehiculo">Veh&iacute;culo:</span> <span class="datos-r">{{ utf8_decode($r->vehiculo) }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Transmisi&oacute;n:</span> @if($r->transmision == 1) <span class="datos-r">Autom&aacute;tico</span> @else <span class="datos-r">Est&aacute;ndard</span> @endif <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Tarifa por d&iacute;a:</span> <span class="datos-r">${{ number_format($r->tarifa_por_dia, 2) }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">D&iacute;as de reservaci&oacute;n:</span> <span class="datos-r">{{ $r->dias }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Total:</span> <span class="datos-r">${{ number_format($r->dias * $r->tarifa_por_dia, 2) }}</span> <br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">"Incluye Renta, KM Libre, Coberturas e IVA".</span> <br> 
						<hr class="hr-oculto">

						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

						<span class="f-vehiculo-t">Informaci&oacute;n de entrega</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Fecha: </span><span class="datos-r">{{ $r->fecha_entrega }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Hora: </span><span class="datos-r">{{ $r->hora_entrega }}</span>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Lugar: </span><span class="datos-r">{{ utf8_decode($r->lugar_entrega) }}</span> <br>
						<hr class="hr-oculto">
						@if($r->telefono1_e == '') @else<span class="f-vehiculo">Tel&eacute;fono: </span> <span class="datos-r">{{ utf8_decode($r->telefono1_e) }}</span> <br>@endif  @if($r->telefono2_e == '') @else <span class="datos-r">{{ utf8_decode($r->telefono2_e) }}</span> <br>@endif
							@if($r->telefono3_e == '') @else <span class="datos-r">{{ utf8_decode($r->telefono3_e) }}</span> <br>@endif
							@if($r->telefono4_e == '') @else <span class="datos-r">{{ utf8_decode($r->telefono4_e) }}</span> <br>@endif
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style=" width:270px!important">

						<span class="f-vehiculo">{{ utf8_decode($r->direccion1_e) }} </span><br>
						<hr class="hr-oculto">
						@if($r->direccion2_e == '') @else <span class="f-vehiculo">{{ utf8_decode($r->direccion2_e) }} </span><br> <hr class="hr-oculto">@endif 

						<span class="f-vehiculo">{{ utf8_decode($r->colonia_e) }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ utf8_decode($r->estado_e) }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ utf8_decode($r->municipio_e) }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">CP: {{ $r->cp_e }}</span><br>
						<hr class="hr-oculto">
						@if($r->referencias_e == '') @else <span class="f-vehiculo">Referencias: {{ utf8_decode($r->referencias_e) }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c">

						<span class="f-vehiculo-t">Informaci&oacute;n de Devoluci&oacute;n</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Fecha: </span><span class="datos-r">{{ $r->fecha_devolucion }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Hora: </span><span class="datos-r">{{ $r->hora_devolucion }}</span>
						<hr class="hr-oculto">
						<span class="f-vehiculo">Lugar: </span><span class="datos-r">{{ utf8_decode($r->lugar_devolucion) }}</span> <br>
						<hr class="hr-oculto">
						@if($r->telefono1_d == '') @else<span class="f-vehiculo">Tel&eacute;fono: </span> <span class="datos-r">{{ utf8_decode($r->telefono1_d) }}</span> <br>@endif  @if($r->telefono2_d == '') @else <span class="datos-r">{{ utf8_decode($r->telefono2_d) }}</span> <br>@endif
							@if($r->telefono3_d == '') @else <span class="datos-r">{{ utf8_decode($r->telefono3_d) }}</span> <br>@endif
							@if($r->telefono4_d == '') @else <span class="datos-r">{{ utf8_decode($r->telefono4_d) }}</span> <br>@endif
						
					</div>



					<div class="datos-del-vehiculo datos-del-vehiculo-2 " style=" width:270px!important">

						<span class="f-vehiculo">{{ utf8_decode($r->direccion1_d) }} </span><br>
						<hr class="hr-oculto">
						@if($r->direccion2_d == '') @else <span class="f-vehiculo">{{ utf8_decode($r->direccion2_d) }} </span><br> <hr class="hr-oculto">@endif 

						<span class="f-vehiculo">{{ utf8_decode($r->colonia_d) }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ utf8_decode($r->estado_d) }} </span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">{{ utf8_decode($r->municipio_d) }}</span><br>
						<hr class="hr-oculto">
						<span class="f-vehiculo">CP: {{ $r->cp_d }}</span><br>
						<hr class="hr-oculto">
						@if($r->referencias_d == '') @else <span class="f-vehiculo">Referencias: {{ utf8_decode($r->referencias_d) }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>

			</div><!-- end section_contenidos -->


			</div>
		</div>
	</div>



</body>
</html>
