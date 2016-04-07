<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::Script('js/jquery.min.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}

	<style>
		html{
			height:100%;
		}

		body{
			font-family: Arial, Helvetica, 'Sans-serif';
			font-size:16px;
			height:100%;
		}

		.container{

		}

		.header{
			padding:.5em 2em;
			border-bottom:2px solid #F2F2F2;
			background:#FAFAFA;
			display: -webkit-box;
		    display: -webkit-flex;
		    display: -ms-flexbox;
		    display: flex;
		    -webkit-box-pack:justify;
			 -webkit-justify-content:space-between;
			     -ms-flex-pack:justify;
			         justify-content:space-between;
			 -webkit-box-align:center;
			  -webkit-align-items:center;
			      -ms-flex-align:center;
			          align-items:center;
		}

		.txt-dash, .liga-salir{
			color:#BDBDBD;
		}

		.liga-salir{
			font-size:1.5em;
		}


	</style>
	
</head>
<body>

	<div class="col-xs-12 header">
		<h1 class="txt-dash">Dashboard</h1>
		<a class="liga-salir" href="/logout">Salir</a>
	</div>
	<div class="container">
		<div class="row">
		</div>
	</div>
	
</body>
</html>