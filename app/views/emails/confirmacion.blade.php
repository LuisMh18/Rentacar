<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Detalle reserva</title>

</head>

<body>
	<div  style="width: 95%; margin: 0 auto;">

		<div class="row">
			<div class="section_contenidos">
				<div style="width:100%;">
				 <div style="width:45%; display:inline-block">
		            <img class="imagen-grande" src="<?php echo $message->embed('img/a1.png') ?>" alt="Logo">
				 </div>
				 <div class="div-logo-img2" style="width:50%; display:inline-block; text-align:right;">
		            <img class="imagen-grande" src="<?php echo $message->embed('img/a2.png') ?>" alt="Numero" style="margin-top: 10px;">
				 </div>
				</div>
			<div class="contenedor-section-aside">
				<section class="section_articulos">
					<div class="contenidos">

			<div class="section_contenidos">

				
				<h1 style="margin-bottom:0; color:#337ab7; text-align:center; font-size:24px;">Detalle de la reserva</h1>

				<hr style="margin-top:5px!important; color:#eee;">

				@foreach($reserva as $r)
					<p style="text-align:center;"><span style="color:#31708f;">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<div style="padding: 1px 0 10px 0; width: 100%; margin: 0 auto; color: white; background: #31708f; margin-bottom: 5px; margin-top: 5px;" >
						<p style="margin-bottom:0; text-align:center;"><span>Número de reserva: </span><span>{{ $r->num_reserva }}</span></p>
					</div>
				@endforeach


				<div style="width: 100%; border-bottom: 1px solid #CCC; margin-top: .5em; margin: 0 0 10px 0 !important; padding: 10px 0;">
				   @foreach($cliente as $c)

					<div style="width: 50%; background: white; border-right: solid 1px #CCC; display:inline-block; vertical-align: top; font-size:13px;">

						<span style="font-weight: bold; color: #31708f;">Nombre:</span> {{ $c->nombre }} <br>
						
						<span style="font-weight: bold; color: #31708f;">Apellidos:</span> {{ $c->apellidos }} <br>
						
						<span style="font-weight: bold; color: #31708f;">Email:</span> {{ $c->email }} <br>
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style="margin-left: 5px; width: 270px !important; display:inline-block; background:white; font-size:13px;">

						<span style="font-weight: bold; color: #31708f;">Teléfono:</span> {{ $c->telefono }} <br>
						
						<span style="font-weight: bold; color: #31708f;">N° de Licencia:</span> {{ $c->num_licencia }} <br>
						
						@if($c->comentarios == '') @else <span style="font-weight: bold; color: #31708f;">Comentarios:</span> {{ $c->comentarios }} @endif
						
					</div>

				  @endforeach
				  
				</div>



				<div class="contenedor-datos-vehiculo form3 tipo-transmision" style="width: 100%; border-bottom: 1px solid #CCC; margin-top: .5em;  margin: 0 0 10px 0 !important; padding: 10px 0; margin: 0 0 20px 0 !important;">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c" style="text-align:center; overflow:hidden; display: inline-block; width: 200px; margin-bottom: 10px; width: 50%; background: white; border-right: solid 1px #CCC;">
							<img id="imagen-ve" style="max-width:200px;" width="200px" src="<?php echo $message->embed('img/vehiculos/'.$r->foto) ?>" alt="Foto del vehículo">
					</div>
					<div class="datos-del-vehiculo datos-del-vehiculo-2" style="margin-left: 5px; width: 270px !important; display:inline-block; font-size:13px; vertical-align:top;">

					<span style="font-weight: bold; color: #31708f;">Vehículo:</span> {{ $r->vehiculo }} <br>
						
						<span style="font-weight: bold; color: #31708f;">Transmisión:</span> @if($r->transmision == 1) Automático @else Estándard @endif <br>
						
						<span style="font-weight: bold; color: #31708f;">Tarifa por día:</span> ${{ number_format($r->tarifa_por_dia, 2) }} <br>
						
						<span style="font-weight: bold; color: #31708f;">Días de reservación:</span> {{ $r->dias }} <br>
						
						<span style="font-weight: bold; color: #31708f;">Total:</span> ${{ number_format($r->dias * $r->tarifa_por_dia, 2) }} <br>
						
						<span style="font-weight: bold; color: #31708f;">“Incluye Renta, KM Libre, Coberturas e IVA”.</span> <br> 
						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision" style="width: 100%; border-bottom: 1px solid #CCC; margin-top: .5em;  margin: 0 0 10px 0 !important; padding: 10px 0; margin: 0 0 10px 0 !important;">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c" style="width: 50%; background: white; border-right: solid 1px #CCC; display:inline-block; vertical-align: top; font-size:13px;">

						<span class="f-vehiculo-t" style="font-weight: bold; color: #31708f; font-size: 17px;">Información de entrega</span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Fecha: </span>{{ $r->fecha_entrega }}<br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Hora: </span>{{ $r->hora_entrega }}
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Lugar: </span>{{ $r->lugar_entrega }} <br>
						
						@if($r->telefono1_e == '') @else<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Teléfono: </span> {{ $r->telefono1_e }} <br>@endif  @if($r->telefono2_e == '') @else {{ $r->telefono2_e }} <br>@endif
							@if($r->telefono3_e == '') @else {{ $r->telefono3_e }} <br>@endif
							@if($r->telefono4_e == '') @else {{ $r->telefono4_e }} <br>@endif
						
					</div>


					<div class="datos-del-vehiculo datos-del-vehiculo-2" style="margin-left: 5px; width: 270px !important; display:inline-block; font-size:13px;">

						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->direccion1_e }} </span><br>
						
						@if($r->direccion2_e == '') @else <span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->direccion2_e }} </span><br> @endif 

						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->colonia_e }} </span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->estado_e }} </span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->municipio_e }}</span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">CP: {{ $r->cp_e }}</span><br>
						
						@if($r->referencias_e == '') @else <span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Referencias: {{ $r->referencias_e }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>


				<div class="contenedor-datos-vehiculo form3 tipo-transmision" style="width: 100%; margin-top: .5em;  margin: 0 0 10px 0 !important; padding: 10px 0; margin: 0 0 20px 0 !important; ">
				  @foreach($reserva as $r)

					<div class="c3 img-ve datos-del-vehiculo c-d-c" style="width: 50%; background: white; border-right: solid 1px #CCC; display:inline-block; vertical-align: top; font-size:13px;">

						<span class="f-vehiculo-t" style="font-weight: bold; color: #31708f; font-size: 17px;">Información de Devolución</span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Fecha: </span>{{ $r->fecha_devolucion }}<br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Hora: </span>{{ $r->hora_devolucion }}
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Lugar: </span>{{ $r->lugar_devolucion }} <br>
						
						@if($r->telefono1_d == '') @else<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">Teléfono: </span> {{ $r->telefono1_d }} <br>@endif  @if($r->telefono2_d == '') @else {{ $r->telefono2_d }} <br>@endif
							@if($r->telefono3_d == '') @else {{ $r->telefono3_d }} <br>@endif
							@if($r->telefono4_d == '') @else {{ $r->telefono4_d }} <br>@endif
						
					</div>



					<div class="datos-del-vehiculo datos-del-vehiculo-2 " style="margin-left: 5px; width: 270px !important; display:inline-block; font-size:13px;">

						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->direccion1_d }} </span><br>
						
						@if($r->direccion2_d == '') @else <span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->direccion2_d }} </span><br> @endif 

						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->colonia_d }} </span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->estado_d }} </span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">{{ $r->municipio_d }}</span><br>
						
						<span class="f-vehiculo" style="font-weight: bold; color: #31708f;">CP: {{ $r->cp_d }}</span><br>
						
						@if($r->referencias_d == '') @else <span class="f-vehiculo">Referencias: {{ $r->referencias_d }}</span> @endif
						
					</div>

				  @endforeach
				  
				</div>

				

					</div><!-- end section_contenidos -->
				</section>
			</div>

			</div>
		</div>
	</div>

</body>
</html>
