<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::Script('js/jquery.js') }}
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
			height:100%;
			display -webkit-box;
			display -moz-box;
			display -ms-flexbox;
			display -webkit-flex;
			display flex;
			position:relative;
		}

		.contenedor{
			position:relative;
			top:150px;
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
                          <input type="text" name="username" value="{{ $username or '' }}" class="form-control" id="username" placeholder="Usuario", required>
                    </div>
                    <div class="input-group has-feedback">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
                   </div>

                   <!--	<a href="#" data-toggle="modal" data-target="#restpass">¿Olvidaste tu contraseña?</a>-->
                    <div class="login-pass">
                       <small class="rest-password text-info">¿Olvidaste tu contraseña?</small>
                    </div>
                    <div class="btn-login">
                       <button class="btn btn-info btn-md">
                       	Login
                       	<span class="glyphicon glyphicon-chevron-right"></span>
                       </button>
                    	
                    </div>
                {{ Form::close() }}

				</div>
			</div>
		</div>
	</div>

	
	 <!-- Modal para restablecer contraseña -->
      <div id="restpass" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h3 class="modal-title text-danger title-rpass"><span class="glyphicon glyphicon-lock"></span> Restablecer tu contraseña</h3>
                  </div>
                  <div class="modal-body modal-r">
                     {{ Form::open(array('url' => 'password/remind')) }}
                       <h4 class="text-info title-ingres">Ingresa tu dirección de correo electrónico</h4>

                    <div class="form-group formREmail has-feedback">
                          {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required','id' => 'restp')) }}
                          <span class=" spanREmail help-block" ></span>
                          <h4 class="email-r" id="msgREmail"></h4>
                      </div>

                  </div>
                  <div class="modal-footer modal-rest">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                      {{ Form::submit('Enviar', array('class' => 'btn btn-primary','id' => 'rest-p')) }}
                    {{ Form::close() }}
                  </div>
              </div>
          </div>
      </div>

   <script>

   	$(document).on('click', '.rest-password', function(){
   		$('#restpass').modal({
   			show: 'false',
   		});
   	});

   </script>


	
</body>
</html>