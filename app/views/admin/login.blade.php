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
			background:#FAFAFA;
			height:100%;
		}

		.container{
			height:80%;
			display: -webkit-box;
		    display: -webkit-flex;
		    display: -ms-flexbox;
		    display: flex;
		    -webkit-box-align:center;
		    -webkit-align-items:center;
		      -ms-flex-align:center;
		          align-items:center;
		}

		.contenedor{
			background:white;
			border-radius:5px;
			box-shadow:0px 0px 1px black;
			padding:1em 2em;
			width:40%;
			margin:0 auto;
		}

		.inp-user{
			margin-bottom:1em;
		}

		.login-pass{
			width:100%;
			font-size:.9em;
			text-align: center;
			cursor:pointer;
		}
		
		.btn-login{
			text-align:right;
		}


	</style>
	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="contenedor">
				{{ Form::open(['url' => 'login', 'autocomplete' => 'off', 'class' => 'form-signin', 'role' => 'form']) }}

					<h2 class="text-center">Login</h2>
					 <div class="input-group has-feedback inp-user">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-user"></span>
                        </span>
                          <input type="text" name="username" value="{{ $username or '' }}" class="form-control" id="username" placeholder="Nombre de usuario", 'required'>
                    </div>
                    <div class="input-group has-feedback">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      {{ Form::password('password',array('class' => 'form-control', 'id' => 'password', 'data-id' => '' ,'placeholder' => 'Contraseña', 'required')) }}
                   </div>

                   <!--	<a href="#" data-toggle="modal" data-target="#restpass">¿Olvidaste tu contraseña?</a>-->
                    <div class="login-pass">
                       <small class="text-info">¿Olvidaste tu contraseña?</small>
                    </div>
                    <div class="btn-login">
                       <button class="btn btn-info btn-md">
                       	Login
                       </button>
                    	
                    </div>
                {{ Form::close() }}

				</div>
			</div>
		</div>
	</div>
	
</body>
</html>