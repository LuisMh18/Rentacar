@extends('layout/plantilla')

@section('title')
<title>Admin | Dashboard</title>
@show

@section('scripts')
 @parent
 {{ HTML::Script('js/jquery.js') }}
@show

<script>

	$(document).ready(function(){
		
  	$('.t-admin').addClass('dahs_active');
		 $('.titular_seccion').text('Dashboard');
		
	});
	
</script>


 
@section('content')
 	<div class="t_cantidad">
 			<h3>N° de reservaciones</h3>
 				<div class="caja">
 					<span>#789</span>
 				</div>
 	</div>
 	<div class="t_totales">
 		<h3>Total</h3>
 		<div class="caja">
 					<span>$1256</span>
 				</div>
 	</div>
@stop
 	
 

