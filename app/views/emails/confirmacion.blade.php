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

  #dt-r{
    text-align:center;
    color:#31708f;
    font-size: 18px;
    margin-bottom:5px;
  }

  #da-cli{
    text-align: center;
    color:#31708f;
    font-size: 18px;
    margin-bottom:5px;
  }

	.nota1{
		padding-bottom:0!important;
		font-size:16px!important;
    text-align: center;
    margin:0!important;
	}

  .table-d-xs{
  	   border: 1px solid #DDDDDD;
  				width: 60%;
      margin: auto;
      padding: .4em .3em .2em .3em;
      background: #214878;
  }

  #body-det tr{
      text-align:center;
      font-size:.9em;
      background:#fff;
  }



  .table-d-xs tbody tr td .rfc{
  						text-transform:uppercase;
  						color:black;
  						font-weight:normal;
  	}

  .section-reserva{
  	box-shadow:5px 5px 5px #fff!important;
  	margin-top:1em;
  }

  .table-de-ped{
  	width:80%!important;
  	margin-bottom:1em;
  }

  .t_datos-pedido{
  	margin:.5em 0 1em 0!important;
  }

  #detalle-r{

    margin-top:0;
    text-align:center;
  }

  .txt-azul{
    color:#31708f;
  }

  }
</style>
<body>
	<div class="container section">

		<div class="row">
			<div class="section_contenidos">
				<div class="logo-cabecera">
				 <div class="div-logo-img">
		      <img class="imagen-grande" src="<?php echo $message->embed('img/newlogo_emotions60_cabecera.png') ?>" alt="Logo">
				 </div>
				</div>
			<div class="contenedor-section-aside">
				<section class="section_articulos">
					<div class="contenidos">

			<div class="section_contenidos">

				<section class="section_cliente">

				<h1 class="text-center" id="detalle-r">Detalle de la reserva</h1>
				@foreach($reserva as $r)
					<p class="nota1 text-center"><span class="text-info txt-azul">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></p>
					<p class="nota1 text-center"><span class="text-info txt-azul">N° reserva: </span><span class="dato-p-1">{{ $r->num_reserva }}</span></p>
				@endforeach

						  <h4 class="text-info text-center" id="da-cli">Datos del cliente</h4>
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
	<h4 class="text-info text-center" id="dt-r">Datos de la reserva</h4>
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


	</div>
</div>

				</section>


					</div>
				</section>
			</div>

			</div>
		</div>
	</div>

</body>
</html>
