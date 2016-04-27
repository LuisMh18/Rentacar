<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reservaciones</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
	{{ HTML::style('css/bootstrap-select.min.css') }}
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}
	{{ HTML::Script('js/moment.min.js') }}
	{{ HTML::Script('js/bootstrap-datetimepicker.min.js') }}
	{{ HTML::Script('js/bootstrap-select.min.js') }}
	{{ HTML::Script('js/i18n/defaults-es_CL.min.js') }}
</head>
<body>
	<div class="container section">
		<div class="row">
			<div class="section_contenidos">
				<h1>Reservaciones</h1>
				<p class="nota1">Llena los datos para hacer la reservación.</p>
				<section class="section_articulos">
					<div class="contenidos">
					
						<article class="entrega">
							<div class="bloque1">
								<div class="dia_entrega">
									<div class="tx-requerido">
										<h3>Día y hora de entrega</h3>
										<span>*</span>
									</div>
									
									
									<div class="form-group form-fecha">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control entrega" id='datetimepicker2' >
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

							
								</div><!-- end dia_entrega -->

						
							<div class="lugar_entrega">
							  <div class="tx-requerido">
										<h3>Lugar de entrega</h3>
										<span>*</span>
									</div>
								<select class="selectpicker" data-size="5" id="select-sucursal-entrega">
									 <option value="0" selected>-- Seleccione --</option>
									 @foreach($sucursal as $su)
            <option value="{{ $su->id }}">{{ $su->nombre_sucursal }}</option>
          @endforeach
									</select>
							</div><!-- end dia_entrega -->
							
							</div><!--END Bloque 1-->
							<div class="bloque2">
								 <h1 id="nombre_su"></h1>
								 <hr class="hr">
								 <h4 class="nombre_direcc">Dirección</h4><!-- Texto oculto -->
								 <div class="datos-d">
								 	<span id="direccion1"></span>
								 	<span id="direccion2"></span>
								 	<span id="colonia"></span>
								 	<span id="estado"></span>
								 	<div class="m_d_c">
								 		<span id="m_d"></span>
								  	<span class="nombre_cp">C.P.<span id="cp"></span></span>
								 	</div>
								 	<span id="referencia"></span>
								 </div>
							</div>
						</article>
						<p class="nota2">Nota: si el auto se devuelve en una ciudad diferente a la ciudad en donde se hace la renta, existe un costo por devolución del auto a la ciudad de origen.</p>
						
						<article class="devolucion">
							<div class="bloque1">
								<div class="dia_entrega">
									<div class="tx-requerido">
										<h3>Día y hora de devolución</h3>
										<span>*</span>
									</div>
									
									
									<div class="form-group form-fecha">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control devolucion" id='datetimepicker4' >
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

							
								</div><!-- end dia_entrega -->

						
							<div class="lugar_entrega">
							  <div class="tx-requerido">
										<h3>Lugar de devolución</h3>
										<span>*</span>
									</div>
								<select class="selectpicker" data-size="5" id="select-sucursal-devolucion">
									 <option value="0" selected>-- Seleccione --</option>
									 @foreach($sucursal as $su)
            <option value="{{ $su->id }}">{{ $su->nombre_sucursal }}</option>
          @endforeach
									</select>
							</div><!-- end dia_entrega -->
							
							</div><!--END Bloque 1-->
							<div class="bloque2">
								 <h1 id="nombre_su-d"></h1>
								 <hr class="hr-d">
								 <h4 class="nombre_direcc-d">Dirección</h4><!-- Texto oculto -->
								 <div class="datos-d">
								 	<span id="direccion1-d"></span>
								 	<span id="direccion2-d"></span>
								 	<span id="colonia-d"></span>
								 	<span id="estado-d"></span>
								 	<div class="m_d_c">
								 		<span id="m_d-d"></span>
								  	<span class="nombre_cp-d">C.P.<span id="cp-d"></span></span>
								 	</div>
								 	<span id="referencia-d"></span>
								 </div>
							</div>
						</article>
						
			 	<article class="tipo">
							<div class="form1">
									<div class="tx-requerido">
										<h3>Tipo de Automóvil</h3>
										<span>*</span>
									</div>
									
								<div class="tipo-carro">
										<div class="radio">
												<label>
														<input type="radio" name="opcion_chico" id="opcion_chico" >
														Chico
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opcion_mediano" id="opcion_mediano" >
														Mediano
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opcion_grande" id="opcion_grande" >
														Grande
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="opcion_camioneta" id="opcion_camioneta">
														Camioneta
												</label>
										</div>
									</div>

							</div>
							
							<div class="form2 transmision">
								<div class="ctra">
										<div class="tx-requerido">
											<h3>Transmisión</h3>
											<span>*</span>
										</div>

									<div class="tipo-v">
											<div class="radio">
													<label>
															<input type="radio" name="opcion_automatico" id="opcion_automatico">
															Automático
													</label>
											</div>
											<div class="radio">
													<label>
															<input type="radio" name="opcion_estandar" id="opcion_estandar">
															Estándard
													</label>
											</div>
										</div>

								</div>
								<div class="c4">
								</div>
						</div>
						
						<div class="oculto">
						<div class="form3 tipo-transmision">
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
						</div>
							
						</article>
						
					<article class="form-ped">
							<div class="dato1-p">
								<div class="c_subdato1">
									<div class="tx-requerido">
										<h3>Nombre</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="c_subdato2">
									<div class="tx-requerido">
										<h3>Apellidos</h3>
										<span>*</span>
									</div>
									 <input type="text" class="form-control">
								</div>
							</div><!--END FORM 1-->
							<div class="dato1-p dato-d">
							<div class="c_subdato1">
									<div class="tx-requerido">
										<h3>Email</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="c_subdato2">
									<div class="tx-requerido">
										<h3>Teléfono</h3>
										<span>*</span>
									</div>
									 <input type="text" class="form-control">
								</div>
							</div><!--END FORM 2-->
							<div class="dato1-p dato-d dato-d-p">
							<div class="c_subdato1">
									<div class="tx-requerido">
										<h3>N° de Licencia</h3>
										<span>*</span>
									</div>
							 	<input type="text" class="form-control">
								</div>
								<div class="c_subdato2">
									<div class="tx-requerido">
										<h3>Comentarios</h3>
										<span>*</span>
									</div>
									 <textarea id="refrencia_d" cols="30" rows="1" class="form-control"></textarea>
								</div>
							</div><!--END FORM 2-->
							
						</article>
						
						<button class="btn" id="reservar">Reservar Ahora</button>
						
					</div>

				</section>
			</div>
		</div>
	</div>	
	
	<script>
		
				$(function () {
					
								$('#datetimepicker1').datetimepicker({
												minDate: moment()
									    
								});

				});

				$(function () {
								$('#datetimepicker2').datetimepicker({
									minDate: moment()
								});
				});
		
				$(function () {
								$('#datetimepicker3').datetimepicker({
									minDate: moment()
								});
				});
		
			$(function () {
								$('#datetimepicker4').datetimepicker({
									minDate: moment()
								});
				});
		
				
				$(document).on('change', '#select-sucursal-entrega', function(){
					id = $(this).val();
				 
					if(id == 0){
						
						$('.nombre_cp').hide();
						$('.nombre_direcc').hide();
						$('.hr').hide();
						$('#nombre_su').text('');
						$('#direccion1').text('');
						$('#direccion2').text('');
						$('#colonia').text('');
						$('#estado').text('');
						$('#m_d').text('');
						$('#cp').text('');
						$('#referencia').text('');
						
					} else {
						
						$.ajax({
								url:  "/admin/mostrarsucursales",
								type: "GET",
					   data:{id: id},
								success: function(s){

									$('.nombre_cp').show();
									$('.nombre_direcc').show();
									$('.hr').show();
									$('#nombre_su').text(s.nombre_sucursal);
									$('#direccion1').text(s.direccion1);
									$('#direccion2').text(s.direccion2);
									$('#colonia').text(s.colonia);
									$('#estado').text(s.estado);
									$('#m_d').text(s.municipio_delegacion);
									$('#cp').text(s.cp);
									$('#referencia').text(s.referencia);
									

								},
			
								error: function(){
									alert('failure');
								}
																
					});
						
						
					}//end else
					
					
				});
		
						$(document).on('change', '#select-sucursal-devolucion', function(){
					id = $(this).val();
				 
					if(id == 0){
						
						$('.nombre_cp-d').hide();
						$('.nombre_direcc-d').hide();
						$('.hr-d').hide();
						$('#nombre_su-d').text('');
						$('#direccion1-d').text('');
						$('#direccion2-d').text('');
						$('#colonia-d').text('');
						$('#estado-d').text('');
						$('#m_d-d').text('');
						$('#cp-d').text('');
						$('#referencia-d').text('');
						
					} else {
						
						$.ajax({
								url:  "/admin/mostrarsucursales",
								type: "GET",
					   data:{id: id},
								success: function(s){

									$('.nombre_cp-d').show();
									$('.nombre_direcc-d').show();
									$('.hr-d').show();
									$('#nombre_su-d').text(s.nombre_sucursal);
									$('#direccion1-d').text(s.direccion1);
									$('#direccion2-d').text(s.direccion2);
									$('#colonia-d').text(s.colonia);
									$('#estado-d').text(s.estado);
									$('#m_d-d').text(s.municipio_delegacion);
									$('#cp-d').text(s.cp);
									$('#referencia-d').text(s.referencia);
									

								},
			
								error: function(){
									alert('failure');
								}
																
					});
						
						
					}//end else
					
					
				});
		
		//mostrar el bloque de la transmision
		$(document).on('click', '#opcion_chico', function(){
			 $('.transmision').slideDown(400);
		});
		
		$(document).on('click', '#opcion_mediano', function(){
			 $('.transmision').slideDown(400);
		});
		
		$(document).on('click', '#opcion_grande', function(){
			 $('.transmision').slideDown(400);
		});
		
		$(document).on('click', '#opcion_camioneta', function(){
			 $('.transmision').slideDown(400);
		});
		
		//-Seleccionar el tipo de transmision--------------------
			$(document).on('click', '#opcion_automatico', function(){
			 $('.oculto').slideDown(400);
				$('.form-ped').slideDown(400);
		});
		
		$(document).on('click', '#opcion_estandar', function(){
			 $('.oculto').slideDown(400);
				$('.form-ped').slideDown(400);
			 
		});
		
  </script>
  
	
</body>
</html>