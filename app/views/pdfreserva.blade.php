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
			font-size: 22px;
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
		

		
	.table-d-xs{
				width: 60%;
    margin: auto;
    padding: .4em .3em .2em .3em;
    background: #214878;
}

#body-det tr td{
    text-align:center;
    font-size:.9em;
    background:#fff;
	   padding:8px;
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
	</style>
</head>
<body>
	<div class="container section">
	
		<div class="row">
			<div class="section_contenidos">
	<h1 class="text-conf-pedido">Emotions Rent a Car</h1>
		<img src="img/newlogo_emotions60.png" alt="Logo">
			@foreach($reserva as $r)
			<div class="divh4">
				 <h4 class="text-da text-da-pd"><span class="text-p">Fecha: </span><span class="dato-p-1">{{ $r->created_at }}</span></h4>
				<h4 class="text-da"><span class="text-p">N° reserva: </span><span class="dato-p-1">{{ $r->num_reserva }}</span></h4>
			</div>
			@endforeach
				<section class="section_cliente">
				
				
						  <h4 class="text-info text-cli">Datos del cliente</h4>
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
	<h4 class="text-info text-cli">Datos de la reserva</h4>
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
		
	
	</div>
</div>


				</section>
			</div>
		</div>
	</div>	
	
  
	
</body>
</html>