<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::Script('js/jquery.js') }}
  {{ HTML::Script('js/bootstrap.min.js') }}

  <style>

			.header{
				border-bottom: 2px solid #F2F2F2;
    background: #FAFAFA;
				margin-bottom:1em;
			}
			
			.header h1{
				color: #31708f;
				font-size:2em;
			}
			
			.alerts{
				width:300px;
				margin:0 auto;
				padding-top:1em;
			}
			
			.contenedor-principal{
				width:90%;
				margin:0 auto;
					
			}
			
			@media(min-width:620px){
				.header{
					padding-left:20%;
				}
				
				 .contenedor-principal{
						width:70%;

					}
			}
			
			@media(min-width:1000px){
				.header{
					padding-left:30%;
				}
				
				 .contenedor-principal{
						width:50%;

					}
			}


  </style>
  
</head>
<body>

  <div class="col-xs-12 header">
    <h1 class="txt-dash">Restablecer contraseña.</h1>
  </div>
      <div class="alerts">
								@if(Session::has('messageOK'))
											<div class="alert alert-success fade in">
											<button class="close" data-dismiss="alert" type="button">
															<span class="glyphicon glyphicon-remove"></span>
											</button>
													{{ Session::get('messageOK') }}
											</div>
									@endif

								@if(Session::has('messageDanger'))
											<div class="alert alert-danger fade in">
											<button class="close" data-dismiss="alert" type="button">
															<span class="glyphicon glyphicon-remove"></span>
											</button>
													{{ Session::get('messageDanger') }}
											</div>
									@endif
     </div>
  <div class="container contenedor-principal">
    <div class="row">


            <div class="form">
               {{ Form::open() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                 <h4 class="text-info">Ingresa tu dirección de correo electrónico</h4>
                 {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
                </div>
                <div class="form-group">
                 <h4 class="text-info">Ingresa tu nueva contraseña</h4>
                 {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña nueva')) }}
                </div>
                <div class="form-group">
                 <h4 class="text-info">Repite tu nueva contraseña</h4>
                 {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Repite tu nueva contraseña')) }}
                </div>

                <div class="div-btn">
                    {{ Form::submit('Cambiar contraseña', array('class' => 'btn-c btn btn-primary' )) }}
                </div>
              {{ Form::close() }}
            </div>

    </div>
  </div>
  
</body>
</html>