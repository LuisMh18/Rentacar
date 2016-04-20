<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reservaciones</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}
</head>
<body>
	<div class="container section">
		<div class="row">
			<div class="header">
				<img src="/img/newlogo_emotions60.png" alt="Imagen de la cabecera" width="890px">
							<nav class="menu">
										<ul class="nav-menu">
														<li><a href="#">Inicio</a></li>
														<li><a href="#">Acerca de nosotros</a></li>
														<li><a href="#">Nuestra flotilla</a></li>
														<li><a href="#">Facturación</a></li>
														<li><a href="#">Sucursales</a></li>
														<li><a href="#">Reservaciones</a></li>
										</ul>
						</nav>
			</div>
			<div class="section_contenidos">
				<h1>Reservaciones</h1>
				<p class="nota1">Llena los datos para hacer la reservación.</p>
				<section class="section_articulos">
					<div class="contenidos">
						<article class="entrega">
							<div class="form1">
								<div class="c1">
									<div class="tx-requerido">
										<h3>Entrega</h3>
										<span>*</span>
									</div>
									<select name="hora" id="">
										<option value="" selected>Día</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
									</select>
									<select name="mes" id="">
										<option value="" selected>Mes</option>
										<option value="">Enero</option>
										<option value="">Febrero</option>
										<option value="">Marzo</option>
										<option value="">Abril</option>
										<option value="">Mayo</option>
									</select>
									<select name="year" id="">
										<option value="" selected>Año</option>
										<option value="">2016</option>
									</select>
								</div>
								<div class="c2">
									<div class="tx-requerido">
										<h3>Hora de entrega</h3>
										<span>*</span>
									</div>
										<select id="">
										<option value="">01</option>
										<option value="">02</option>
										<option value="">03</option>
										<option value="">04</option>
										<option value="">05</option>
										<option value="">06</option>
										<option value="">07</option>
										<option value="">08</option>
										<option value="">09</option>
										<option value="">10</option>
										<option value="">11</option>
										<option value="" selected>12</option>
									</select>
									<select id="">
										<option value="">00</option>
										<option value="">01</option>
										<option value="">02</option>
										<option value="">03</option>
										<option value="">04</option>
										<option value="">05</option>
									</select>
									<select id="">
										<option value="" selected>am</option>
										<option value="">pm</option>
									</select>
								</div>
							</div><!--END FORM 1-->
							<div class="form2">
							<div class="cen">
							<div class="tx-requerido">
										<h3>Lugar de entrega</h3>
										<span>*</span>
									</div>
								<select id="select-sucursal">
										<option value="">Sucursal Aguscalientes</option>
										<option value="">Sucursal Monterrey</option>
										<option value="">Sucursal Toluca</option>
										<option value="">Aeropuero Cd Mexico</option>
									</select>
							</div>
							<div class="c4">
							</div>
							</div><!--END FORM 2-->
						</article>
						<p class="nota2">Nota: si el auto se devuelve en una ciudad diferente a la ciudad en donde se hace la renta, existe un costo por devolución del auto a la ciudad de origen.</p>
						
						<article class="devolucion">
							<div class="form1_d">
								<div class="c1">
									<div class="tx-requerido">
										<h3>Devolución</h3>
										<span>*</span>
									</div>
									<select name="hora" id="">
										<option value="" selected>Día</option>
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
									</select>
									<select name="mes" id="">
										<option value="" selected>Mes</option>
										<option value="">Enero</option>
										<option value="">Febrero</option>
										<option value="">Marzo</option>
										<option value="">Abril</option>
										<option value="">Mayo</option>
									</select>
									<select name="year" id="">
										<option value="" selected>Año</option>
										<option value="">2016</option>
									</select>
								</div>
								<div class="c2">
									<div class="tx-requerido">
										<h3>Hora de devolución</h3>
										<span>*</span>
									</div>
										<select id="">
										<option value="">01</option>
										<option value="">02</option>
										<option value="">03</option>
										<option value="">04</option>
										<option value="">05</option>
										<option value="">06</option>
										<option value="">07</option>
										<option value="">08</option>
										<option value="">09</option>
										<option value="">10</option>
										<option value="">11</option>
										<option value="" selected>12</option>
									</select>
									<select id="">
										<option value="">00</option>
										<option value="">01</option>
										<option value="">02</option>
										<option value="">03</option>
										<option value="">04</option>
										<option value="">05</option>
									</select>
									<select id="">
										<option value="" selected>am</option>
										<option value="">pm</option>
									</select>
								</div>
							</div>
							<div class="form2_d">
							<div class="cde">
							<div class="tx-requerido">
										<h3>Lugar de devolución</h3>
										<span>*</span>
									</div>
								<select id="select-sucursal">
										<option value="">Sucursal Aguscalientes</option>
										<option value="">Sucursal Monterrey</option>
										<option value="">Sucursal Toluca</option>
										<option value="">Aeropuero Cd Mexico</option>
									</select>
							</div>
							<div class="c4">
							</div>
							</div>
							
						</article>
						
			 	<article class="tipo">
							<div class="form1">
								<div class="c1">
									<div class="tx-requerido">
										<h3>Tipo de Automóvil</h3>
										<span>*</span>
									</div>
									
								<div class="tipo-carro">
										<div class="radio">
												<label>
														<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
														Chico
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
														Mediano
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
														Grande
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
														Camioneta
												</label>
										</div>
									</div>

								</div>
								<div class="c2">

								</div>
							</div>
							<div class="form2">
								<div class="ctra">
										<div class="tx-requerido">
											<h3>Transmisión</h3>
											<span>*</span>
										</div>

									<div class="tipo-v">
											<div class="radio">
													<label>
															<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
															Automático
													</label>
											</div>
											<div class="radio">
													<label>
															<input type="radio" name="opciones" id="opciones_1" value="opcion_1">
															Estándard
													</label>
											</div>
										</div>

								</div>
								<div class="c4">
								</div>
						</div>
						
						<div class="form3 elegir_v">
								<div class="c3">
									<img src="img/vehiculos/chicos.jpg" alt="Imagen del vehiculo">

								</div>
								<div class="c4">
											<span>$ 650 x día</span>
											<span>$ 3900 x semana</span>
											<span>Seguro cubierto contra daños a terceros.</span>
											<span>Colisiones con un 10% por el deducible.</span>		
								</div>
						</div>
							
						</article>
						
					<article class="form-ped">
							<div class="form1">
								<div class="c1">
									<div class="tx-requerido">
										<h3>Nombre</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="c2">
									<div class="tx-requerido">
										<h3>Apellidos</h3>
										<span>*</span>
									</div>
									 <input type="text" class="form-control">
								</div>
							</div><!--END FORM 1-->
							<div class="form2">
							<div class="ce">
									<div class="tx-requerido">
										<h3>Email</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="ct">
									<div class="tx-requerido">
										<h3>Teléfono</h3>
										<span>*</span>
									</div>
									 <input type="text" class="form-control">
								</div>
							</div><!--END FORM 2-->
							<div class="form3">
							<div class="cn">
									<div class="tx-requerido">
										<h3>N° de Licencia</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="cc">
									<div class="tx-requerido">
										<h3>Comentarios</h3>
										<span>*</span>
									</div>
									 <textarea id="" cols="30" rows="1" class="form-control"></textarea>
								</div>
							</div><!--END FORM 2-->
							
						</article>
						
						<button class="btn" id="reservar">Reservar Ahora</button>
						
					</div>
					<aside>
						<div class="imagen1">
							<img src="img/escribenos_email.png">
						</div>
						<div class="imagen2">
							<img src="img/coduce_contacto.png">
						</div>
					</aside>
				</section>
			</div>
		</div>
	</div>
				<footer>
					<small>EMOTIONS RENT A CAR - renta de autos en toluca - renta de autos df - renta de autos en monterrey - renta de autos en aguascalientes</small>
					<strong>Aviso de privacidad</strong>
				</footer>
	
	<script>
		$(document).on('change', '#select-sucursal', function(){
			
		});
	</script>
	
</body>
</html>