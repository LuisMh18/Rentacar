<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	@yield('title')
	
	@section('scripts')
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/estilos.css') }}
		{{ HTML::Script('js/jquery.js') }}
		{{ HTML::Script('js/bootstrap.min.js') }}
	@show
	
  <script>
        $(document).ready(function(){
									
          $("#acordeon h3").click(function(){
               $("#acordeon ul ul").slideUp();
                if(!$(this).next().is(":visible")){
                  $(this).next().slideDown();
                }
          })
										
										$("#acordeon .t-catalogos").click(function(){
											    $('.flechita1').addClass('glyphicon glyphicon-menu-down');
											    $('.flechita2').removeClass('glyphicon glyphicon-menu-down');
											    $('.flechita3').removeClass('glyphicon glyphicon-menu-down');
										     $('.flechita2').addClass('glyphicon glyphicon-menu-right');
											    $('.flechita3').addClass('glyphicon glyphicon-menu-right');
          })
										
										$("#acordeon .t-config").click(function(){
											    $('.flechita2').addClass('glyphicon glyphicon-menu-down');
											    $('.flechita1').removeClass('glyphicon glyphicon-menu-down');
											    $('.flechita3').removeClass('glyphicon glyphicon-menu-down');
										     $('.flechita1').addClass('glyphicon glyphicon-menu-right');
											    $('.flechita3').addClass('glyphicon glyphicon-menu-right');
          })
										
										$("#acordeon .t-reservas").click(function(){
											    $('.flechita3', this).addClass('glyphicon glyphicon-menu-down');
											    $('.flechita1').removeClass('glyphicon glyphicon-menu-down');
											    $('.flechita2').removeClass('glyphicon glyphicon-menu-down');
										     $('.flechita1').addClass('glyphicon glyphicon-menu-right');
											    $('.flechita2').addClass('glyphicon glyphicon-menu-right');
          })
										
										contador = 1;
										
										$(document).on('click', '#mostrar-menu', function(){
												// $('.div_acordeon').toggle(500);
											
											if(contador == 1){
												 $('.div_acordeon').animate({
														left: '0'
													});
												 contador = 0;
											} else {
												 contador = 1;
													$('.div_acordeon').animate({
														left: '-100%'
													});
											}
											
										});
										
      });
    </script>
	
</head>
<body class="body_dashboard">

<!-- ///// Menu para dispositivos moviles /////// -->

	<aside class="div_acordeon-md"> 
   <div class="logo_em">
   	<img src="/img/logo.png" alt="">
   </div>
		<div id="acordeon">
    <ul>
        <a class="admin" id="dashboard" href="{{ URL::to('admin/dashboard') }}">
            <h3 class="t-admin"><span class="glyphicon glyphicon-scale"></span>Dashboard</h3>
        </a>
        <!-- we will keep this LI open by default -->
        <li class="catalogos">
            <h3 class="c-icon-g t-catalogos">
               <span class="glyphicon glyphicon-folder-open"></span>
                <span class="txt-icon">
                 Catalogos
                 <span class="flechita1 glyphicon glyphicon-menu-right"></span>
												   	</span>
            </h3>
            <ul class="sucursal_v">
                <li><a href="{{ URL::to('/admin/sucursal') }}">Sucursales</a></li>
                <li><a href="{{ URL::to('/admin/telefonos') }}">Teléfonos</a></li>
                <li><a href="{{ URL::to('/admin/gerentes') }}">Gerentes</a></li>
                <li><a href="{{ URL::to('/admin/plazas') }}">Plazas</a></li>
                <li><a href="{{ URL::to('/admin/oficinas') }}">Oficinas</a></li>
                <li><a href="{{ URL::to('/admin/grupos') }}">Grupos</a></li>
                <li><a href="{{ URL::to('/admin/coberturas') }}">Coberturas</a></li>
                <li><a href="{{ URL::to('/admin/codigos') }}">Códigos</a></li>
                <li><a href="{{ URL::to('/admin/vehiculos') }}">Vehículos</a></li>
                <li><a href="{{ URL::to('/admin/usuarios') }}">Usuarios</a></li>
            </ul>
        </li>
        <li class="Configuración">
            <h3 class="c-icon-g t-config">
               <span class="glyphicon glyphicon-cog"></span>
                <span class="txt-icon">
                 Configuración
                 <span class="flechita2 glyphicon glyphicon-menu-right"></span>
													   </span>
            </h3>
            <ul class="config_v">
                <li><a href="{{ URL::to('/admin/config') }}">Tarifas</a></li>
            </ul>
        </li>
        <li class="Reservas">
           <h3 class="c-icon-g t-reservas">
              <span class="glyphicon glyphicon-list-alt"></span>
                <span class="txt-icon">
                Reservas
                <span class="flechita3 glyphicon glyphicon-menu-right"></span>
              </span>
           </h3>
            <ul class="reservas_v">
                <li><a href="{{ URL::to('/admin/reservas') }}">Reservas</a></li>
            </ul>
        </li>

    </ul>
  </div><!-- END DIV ACORDEON-->
	</aside>
	
	<!-- ///// Menu para dispositivos grandes /////// -->
		<aside class="div_acordeon"> 
   <div class="logo_em">
   	<img src="/img/logo.png" alt="">
   </div>
		<div id="acordeon">
    <ul>
        <a class="admin" id="dashboard" href="{{ URL::to('admin/dashboard') }}">
            <h3 class="t-admin"><span class="glyphicon glyphicon-scale"></span>Dashboard</h3>
        </a>
        <!-- we will keep this LI open by default -->
        <li class="catalogos">
            <h3 class="c-icon-g t-catalogos">
               <span class="glyphicon glyphicon-folder-open"></span>
                <span class="txt-icon">
                 Catalogos
                 <span class="flechita1 glyphicon glyphicon-menu-right"></span>
												   	</span>
            </h3>
            <ul class="sucursal_v">
                <li><a href="{{ URL::to('/admin/sucursal') }}">Sucursales</a></li>
                <li><a href="{{ URL::to('/admin/telefonos') }}">Teléfonos</a></li>
                <li><a href="{{ URL::to('/admin/gerentes') }}">Gerentes</a></li>
                <li><a href="{{ URL::to('/admin/plazas') }}">Plazas</a></li>
                <li><a href="{{ URL::to('/admin/oficinas') }}">Oficinas</a></li>
                <li><a href="{{ URL::to('/admin/grupos') }}">Grupos</a></li>
                <li><a href="{{ URL::to('/admin/coberturas') }}">Coberturas</a></li>
                <li><a href="{{ URL::to('/admin/codigos') }}">Códigos</a></li>
                <li><a href="{{ URL::to('/admin/vehiculos') }}">Vehículos</a></li>
                <li><a href="{{ URL::to('/admin/usuarios') }}">Usuarios</a></li>
            </ul>
        </li>
        <li class="Configuración">
            <h3 class="c-icon-g t-config">
               <span class="glyphicon glyphicon-cog"></span>
                <span class="txt-icon">
                 Configuración
                 <span class="flechita2 glyphicon glyphicon-menu-right"></span>
													   </span>
            </h3>
            <ul class="config_v">
                <li><a href="{{ URL::to('/admin/config') }}">Tarifas</a></li>
            </ul>
        </li>
        <li class="Reservas">
           <h3 class="c-icon-g t-reservas">
              <span class="glyphicon glyphicon-list-alt"></span>
                <span class="txt-icon">
                Reservas
                <span class="flechita3 glyphicon glyphicon-menu-right"></span>
              </span>
           </h3>
            <ul class="reservas_v">
                <li><a href="{{ URL::to('/admin/reservas') }}">Reservas</a></li>
            </ul>
        </li>

    </ul>
  </div><!-- END DIV ACORDEON-->
	</aside>
	
	
	
<div class="principal_dashboard">

	<div class="col-xs-12 header_dashboard">
      
								<h3 class="text-align-left titular_seccion"></h3><!-- Titulo que aparece en el header dependiendo de la seccion-->
							<div class="c-header">
		      <div class="menu_admin">
          <ul class="nav navbar-nav pull-right menu-sm">
              <li id="fat-menu" class="dropdown">
                 
                  <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span>
                      Bienvenido: {{ Auth::user()->usuario }}
                  </a>

                  <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li><a class="liga-salir" href="/logout"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
                      <li class="divider"></li>
                  </ul>
              </li>

          </ul>
          
      </div><!--/.navbar-collapse -->
      <div class="menu_admin2">

                  <a href="/logout" title="Cerrar Sesión">
                      <span class="glyphicon glyphicon-off"></span>
                  </a>
          
      </div><!--/.navbar-collapse -->
      
          <div class="menu-oculto">
          	<span id="mostrar-menu" class="glyphicon glyphicon-th-list"></span>
          </div>
      </div>
		
	</div>
		
 <div class="section_dashboard">
			<div class="contenido_dashboard">
				
				<div class="seccion_1">
			  
				  @yield('content')
					
				</div>
			
			</div>

				<footer class="f_admin">
					<small>&copy; Copyright: Todos los derechos reservados. Emotions Rent a Car</small>
			</footer>
 </div>
	

</div><!-- END principal_dashboard -->
	
	
		@section('mis_scripts')	@show
		
		
</body>
</html>