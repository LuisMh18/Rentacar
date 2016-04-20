@extends('layout/plantilla')

@section('title')
<title>Admin | Reservas</title>
@show

@section('scripts')
 @parent
 {{ HTML::Script('js/jquery.js') }}
@show

<script>

	$(document).ready(function(){
		
  	$('.t-reservas').addClass('dahs_active');
		
			$('.reservas_v').slideDown();
		
			$('.flechita3').addClass('glyphicon glyphicon-menu-down');
			$('.flechita2').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita1').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita2').addClass('glyphicon glyphicon-menu-right');
			$('.flechita1').addClass('glyphicon glyphicon-menu-right');
		
		
	});
	
</script>


@section('content')

@stop
