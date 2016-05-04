<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reservaciones</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
	{{ HTML::style('css/bootstrap-select.min.css') }}
	{{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
	<!--{{ HTML::style('css/estilos_reserva.css') }}-->
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}
	{{ HTML::Script('js/moment.min.js') }}
	{{ HTML::Script('js/bootstrap-datetimepicker.min.js') }}
	{{ HTML::Script('js/bootstrap-select.min.js') }}
	{{ HTML::Script('js/i18n/defaults-es_CL.min.js') }}
	{{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
	{{ HTML::script('js/accounting.min.js') }}
</head>
<body>
	<div class="container section">
	
			 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
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
            
          <div class="form-group form-fecha">
                <div class='input-group date error-hora-entrega' id='datetimepicker_hora1'>
                    <input type='text' class="form-control" id='datetimepicker_hora2'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>

							
								</div><!-- end dia_entrega -->

						
							<div class="lugar_entrega error-lugar-entrega">
							  <div class="tx-requerido">
										<h3>Lugar de entrega</h3>
										<span>*</span>
									</div>
								<select class="selectpicker" data-size="5" id="select-sucursal-entrega">
								  <option value="0" selected>-- Seleccione --</option>
									 @foreach($sucursal as $su)
            <option value="{{ $su->id }}">Sucursal {{ $su->nombre_sucursal }}</option>
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
            
          <div class="form-group form-fecha">
                <div class='input-group date error-hora-devolucion' id='datetimepicker_hora3'>
                    <input type='text' class="form-control" id='datetimepicker_hora4'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>

							
								</div><!-- end dia_entrega -->

						
							<div class="lugar_entrega error-lugar-devolucion">
							  <div class="tx-requerido">
										<h3>Lugar de devolución</h3>
										<span>*</span>
									</div>
								<select class="selectpicker" data-size="5" id="select-sucursal-devolucion">
								  <option value="0" selected>-- Seleccione --</option>
									 @foreach($sucursal as $su)
            <option value="{{ $su->id }}">Sucursal {{ $su->nombre_sucursal }}</option>
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
														<input type="radio" class="tipo_chico" name="opcion_chico" id="" value="4">
														Chico
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" class="tipo_mediano" name="opcion_mediano" id="" value="1">
														Mediano
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" class="tipo_grande" name="opcion_grande" id="" value="2">
														Grande
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" class="tipo_camioneta" name="opcion_camioneta" id="" value="3">
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
															<input type="radio" name="opcion_automatico" class="opcion_automatico" value="0">
															Automático
													</label>
											</div>
											<div class="radio">
													<label>
															<input type="radio" name="opcion_estandar" class="opcion_estandar" value="2">
															Estándard
													</label>
											</div>
										</div>

								</div>
								<div class="c4">
								</div>
						</div>
						
							<div class="div-img-gif">
								<img src="/img/Cargandocc.gif" alt="Cargando" width="50px"> <span class="txt-cargando-vehiculos">Espere un momento por favor..</span>
							</div>
						 <div class="oculto"></div><!-- Div para mostrar la informacion de los vehiculos -->
							
						</article>
						
					<article class="form-ped">
							<div class="dato1-p">
								<div class="c_subdato1 error-email">
									<div class="tx-requerido">
										<h3>Email</h3>
										<span>*</span>
									</div>
									 <div class="c-img">
							 	  <input type="text" id="email-c" class="form-control">
						 	   <div class="div-img">
							 	    <img src="/img/Cargandocc.gif" id="img-gif" width="30px">
							 	  </div>
							 	 </div>
							 	 <span id="txt-espere" class="txt-espere text-warning"></span>
								</div>
								<div class="c_subdato2 error-nombre">
									<div class="tx-requerido">
										<h3>Nombre</h3>
										<span>*</span>
									</div>
							 	<input type="text" id="nombre-c" class="form-control">
								</div>
							</div><!--END FORM 1-->
							<div class="dato1-p dato-d">
								<div class="c_subdato1 error-apellidos">
									<div class="tx-requerido">
										<h3>Apellidos</h3>
										<span>*</span>
									</div>
									 <input type="text" id="ap-c" class="form-control">
								</div>
								<div class="c_subdato2 error-telefono">
									<div class="tx-requerido">
										<h3>Teléfono</h3>
										<span>*</span>
									</div>
									 <input type="text" id="tel-c" class="form-control">
								</div>
							</div><!--END FORM 2-->
							<div class="dato1-p dato-d dato-d-p">
							<div class="c_subdato1 error-lic">
									<div class="tx-requerido">
										<h3>N° de Licencia</h3>
										<span>*</span>
									</div>
							 	<input type="text" id="lic-c" class="form-control">
								</div>
								<div class="c_subdato2">
									<div class="tx-requerido">
										<h3>Comentarios</h3>
										<span></span>
									</div>
									 <textarea id="coment-c" cols="30" rows="1" class="form-control"></textarea>
								</div>
							</div><!--END FORM 2-->
							
						</article>
						
						<button class="btn reservar">Reservar Ahora</button>
						<button class="btn" id="reservar2">Reservar Ahora</button>
						<button class="btn" id="reservar">Reservar Ahora</button>
						
					</div>

				</section>
			</div>
		</div>
	</div>	
	
	          <!--  Modal para confirar la reserva  -->
<div id="modal-confirm-reserva" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
               Confirmar reserva
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-confirm-reserva text-info text-center">¿Están correctos sus datos?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-regist-reserva" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
	
	
	<script>
		
		$(document).on('click', '#mostrar-modal', function(){
			
			$('#modal-mostrar-gif').modal({
				show:'false',
			});
			
		});
		
		
				$(function () {
					
								$('#datetimepicker1').datetimepicker({
												format: 'YYYY-MM-DD',    
												minDate: moment()
									    
								});

				});

				$(function () {
								$('#datetimepicker2').datetimepicker({
									format: 'YYYY-MM-DD',   
									minDate: moment()
								});
				});
		
				$(function () {
								$('#datetimepicker3').datetimepicker({
									format: 'YYYY-MM-DD',   
									minDate: moment()
								});
				});
		
			$(function () {
								$('#datetimepicker4').datetimepicker({
									format: 'YYYY-MM-DD',   
									minDate: moment()
								});
				});
		
		//Para la hora
		$(function () {
					$('#datetimepicker_hora1').datetimepicker({
								format: 'LT'

				});

				});

				$(function () {
								$('#datetimepicker_hora2').datetimepicker({
									format: 'LT'
								});
				});
		
				$(function () {
					$('#datetimepicker_hora3').datetimepicker({
								format: 'LT'

				});

				});

				$(function () {
								$('#datetimepicker_hora4').datetimepicker({
									format: 'LT'
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
					
					
					$comprobar = $('.opcion_automatico').attr('value');
					
					if($comprobar == 0){

					} else {
							$('.oculto').html('');
						 tipo = $('#tipo').val();
       transmision = $('#tipo_transmision').attr('value');
       compararfechas(tipo, transmision);
					}
					
					
					
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
		

		
		$(document).on('click', '.tipo_chico', function(){
			 $('.transmision').slideDown(400);
				$(this).attr('id', 'tipo');
			 $(this).attr('value', '0');
			
				 tipo = $(this).attr('value');
				 transmision = $('#tipo_transmision').attr('value');
					
					if(transmision == undefined){
						
					} else {
						$('.oculto').html('');
						compararfechas(tipo, transmision);
					}
			
				$('.tipo_mediano').attr('id', '');
			 $('.tipo_mediano').removeAttr('checked');
			 $('.tipo_grande').attr('id', '');
			 $('.tipo_grande').removeAttr('checked');
			 $('.tipo_camioneta').attr('id', '');
			 $('.tipo_camioneta').removeAttr('checked');
			
				$(".reservar").hide();
				$('#reservar2').show();
			
			
		});
		
		$(document).on('click', '.tipo_mediano', function(){
			 $('.transmision').slideDown(400);
				$(this).attr('id', 'tipo');
			
					tipo = $(this).attr('value');
				 transmision = $('#tipo_transmision').attr('value');
					
					if(transmision == undefined){
						
					} else {
						$('.oculto').html('');
						compararfechas(tipo, transmision);
					}
					
					$('.tipo_chico').attr('value', '0');
					$('.tipo_chico').attr('id', '');
			  $('.tipo_chico').removeAttr('checked');
			  $('.tipo_grande').attr('id', '');
			  $('.tipo_grande').removeAttr('checked');
			  $('.tipo_camioneta').attr('id', '');
			  $('.tipo_camioneta').removeAttr('checked');
			
					$(".reservar").hide();
			 	$('#reservar2').show();
					
	 	});
		
		$(document).on('click', '.tipo_grande', function(){
			 $('.transmision').slideDown(400);
				$(this).attr('id', 'tipo');
			
			 	tipo = $(this).attr('value');
				 transmision = $('#tipo_transmision').attr('value');
					
					if(transmision == undefined){
						
					} else {
						$('.oculto').html('');
						compararfechas(tipo, transmision);
					}
					
					$('.tipo_chico').attr('value', '0');
					$('.tipo_chico').attr('id', '');
			  $('.tipo_chico').removeAttr('checked');
			  $('.tipo_mediano').attr('id', '');
			  $('.tipo_mediano').removeAttr('checked');
			  $('.tipo_camioneta').attr('id', '');
			  $('.tipo_camioneta').removeAttr('checked');
			
			  $(".reservar").hide();
				 $('#reservar2').show();
					
	 	});
		
		$(document).on('click', '.tipo_camioneta', function(){
			 $('.transmision').slideDown(400);
				$(this).attr('id', 'tipo');
			
					tipo = $(this).attr('value');
				 transmision = $('#tipo_transmision').attr('value');
					
					if(transmision == undefined){
						
					} else {
						$('.oculto').html('');
						compararfechas(tipo, transmision);
					}
			
					$('.tipo_chico').attr('value', '0');
				 $('.tipo_chico').attr('id', '');
			  $('.tipo_chico').removeAttr('checked');
			  $('.tipo_mediano').attr('id', '');
			  $('.tipo_mediano').removeAttr('checked');
			  $('.tipo_grande').attr('id', '');
			  $('.tipo_grande').removeAttr('checked');
			
					$(".reservar").hide();
			 	$('#reservar2').show();
			
	 	});
		
		
		
		
		//-Seleccionar el tipo de transmision--------------------
			$(document).on('click', '.opcion_automatico', function(){
				$('.opcion_estandar').attr('id', '');
				$(this).attr('id', 'tipo_transmision');
				$(this).attr('value', '1');
			 $('.oculto').slideDown(400);
				$('.opcion_estandar').removeAttr('checked');
				tipo = $('#tipo').val();
				transmision = $(this).val();
				
				//funcion para mostrar los datos del vehiculo
				$('.oculto').html('');
				compararfechas(tipo, transmision);
				
				$("#reservar2").hide();
				$('#reservar2').attr('id','');
				$('#reservar').show();
				
		});
		
		$(document).on('click', '.opcion_estandar', function(){
				$('.opcion_automatico').attr('id', '');
				$(this).attr('id', 'tipo_transmision');
			 $('.opcion_automatico').attr('value', '1');
			 $('.oculto').slideDown(400);
			 $('.opcion_automatico').removeAttr('checked');
				$('.oculto').html('');
			 tipo = $('#tipo').val();
				transmision = $(this).val();
			 compararfechas(tipo, transmision);
			 
			 $("#reservar2").hide();
			 $('#reservar2').attr('id','');
				$('#reservar').show();
		});
		
		
	function compararfechas(tipo, transmision){
		
		
		tipo_v = tipo;
		transmision_v = transmision;

		fecha_entrega = $('#datetimepicker2').val();
	 lugar_entrega = $('#select-sucursal-entrega option:selected').attr('value');
	
	//Datos de devolucion
		fecha_devolucion = $('#datetimepicker4').val();
	 lugar_devolucion = $('#select-sucursal-devolucion option:selected').attr('value');
		
		if(lugar_entrega == 0){
			alertas("danger","Selecciona el lugar de entrega");
		} else {
				$('.div-img-gif').show();
				$.ajax({
						url:  "/admin/compararfechas",
						type: "GET",
						data:{lugar_entrega: lugar_entrega},
						success: function(comparar){								
							for(datos in comparar.f){

															if(comparar.f[datos].fecha_fin < fecha_devolucion){

																} else if(comparar.f[datos].fecha_fin >= fecha_devolucion) {

																	id_t = comparar.f[datos].id;
																	//En la primera que sea mayor cortamos el ciclo
																	//y llamamos a la funcion para mostrar los daos del vehiculo
																	mostrardatos(tipo_v, transmision_v, id_t);

																	break; 
																}




														}


						},

						error: function(){
							alert('failure');
						}

			});
		} //end else
			
			
			
	}
		
			function mostrardatos(tipo, transmision, id_t){
				
					$.ajax({
								url:  "/admin/datosvehiculo",
								type: "GET",
								data:{tipo: tipo, transmision: transmision, id_t: id_t},
								success: function(v){								

										for(datos in v.vehiculo){


												id_v = v.vehiculo[datos].id;
												//En la primera que sea mayor cortamos el ciclo
												//y llamamos a la funcion para mostrar los daos del vehiculo
											 mostrardatostarifa(id_t, id_v);


									}
									
							

							   },
			
			 					error: function(){
									alert('failure');
								}
																
					});
				
			}
		
		function mostrardatostarifa(id_t, id_v){
			
					$.ajax({
								url:  "/admin/datostarifadetalle",
								type: "GET",
								data:{id_t: id_t, id_v: id_v },
								success: function(t){								
								div = $('.oculto');
									contenido = "";
									
									$('.div-img-gif').hide();
									
									for(datos in t.tarifa){
																							
												contenido += '<div class="form3 tipo-transmision">'+
																											'<div class="c3">'+
																													'<img width="200px" src="img/vehiculos/'+t.tarifa[datos].foto+'" alt="Imagen del vehiculo">'+
																											'</div>'+
																											'<div class="c4">'+
																													'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																													'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
													                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
													                '<span>'+t.tarifa[datos].cobertura+'</span>'+
																													'<div>'+
																														'<label class="radio-v text-info">Seleccionar este vehículo:'+
																																'<input type="radio" name="tipo_vehiculo" id="" value="'+t.tarifa[datos].id+'" data-id="'+t.tarifa[datos].tarifa_por_dia+'">'+
																														'</label>'+
																													'</div>'+
																											'</div>'+
	                        '</div>';


											}//end for

											div.append(contenido);
									
										$('.form-ped').slideDown(400);
									
			 					 //$('.transmision').slideDown(400);									

							    },
			
			 					error: function(){
									alert('failure');
								}
																
					});
			
		}
		
		
		
		//Mostrar si el cliente tiene datos
		$(document).on('blur', '#email-c', function(){
			 email = $(this).val();
				$('#txt-espere').text('Espere por favor, buscando cliente…');
						$.ajax({
								url:  "/admin/comprobardatos",
								type: "GET",
								data:{email: email},
								beforeSend: function(){
								    $('#img-gif').show();
												$('#txt-espere').show();
        },
							
								success: function(d){
									
									if(d.email == undefined){
										$('#txt-espere').text('Sin resultados de búsqueda.');
										$('#img-gif').hide();
									} else {
										
												$('#img-gif').hide();
												$('#txt-espere').hide();
										
									   $('#email-c').val(d.email);
										  $('#nombre-c').val(d.nombre);
										  $('#ap-c').val(d.apellidos);
												$('#tel-c').val(d.telefono);
										  $('#lic-c').val(d.num_licencia);
										  $('#coment-c').val(d.comentarios);
									}
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			$(document).on('focus', '#email-c', function(){
				
				$('#txt-espere').hide();
				$('#txt-espere').text('Espere por favor, buscando cliente…');
				
			});
			
			
			
		});
		
		
		
		
		//Validaciones --------------------------------------------------------
	
	/*****************
	------Validaciones al agregar tarifa
	******************************************************************/
	  $(".reservar").click(function () {

      if($("#datetimepicker_hora2").val().length == 0){
														$('.error-hora-entrega').addClass('has-error has-feedback');
						        alertas("danger","Selecciona la hora de entrega");
              return false;

      } else {
          return true;
      }
});
		
		
	  $(".reservar").click(function () {

      if($("#select-sucursal-entrega").val() == 0){
														$('.error-lugar-entrega').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de entrega");
              return false;

      }  else {
          return true;
      }
});
	
	 $(".reservar").click(function () {
				if($("#datetimepicker_hora4").val().length == 0){
													$('.error-hora-devolucion').addClass('has-error has-feedback');
		           alertas("danger","Selecciona la hora de devolución");
														return false;

								}  else {
												return true;
								}
		});
		
			$(".reservar").click(function () {

      if($("#select-sucursal-devolucion").val() == 0){
														$('.error-lugar-devolucion').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de devolución");
              return false;

      }  else {
          return true;
      }
});
		
		$(".reservar").click(function () {
				if($(".tipo_chico").val() == 4){
													//$('.error-hora-devolucion').addClass('has-error has-feedback');
		           alertas("danger","Selecciona el tipo de automóvil");
														return false;

								}  else {
												return true;
								}
		});

		
		
	$("#datetimepicker_hora2").focus(function () {
      $('.error-hora-entrega').removeClass('has-error has-feedback');
});
		
	$("#select-sucursal-entrega").change(function () {
      $('.error-lugar-entrega').removeClass('has-error has-feedback');
});
	
	$("#datetimepicker_hora4").focus(function () {
      $('.error-hora-devolucion').removeClass('has-error has-feedback');
});
		
	$("#select-sucursal-devolucion").change(function () {
      $('.error-lugar-devolucion').removeClass('has-error has-feedback');
});
		
		
			 $("#reservar2").click(function () {

						    alertas("danger","Selecciona la transmisión");

    });
		
			  $("#reservar2").click(function () {

      if($("#datetimepicker_hora2").val().length == 0){
														$('.error-hora-entrega').addClass('has-error has-feedback');
						        alertas("danger","Selecciona la hora de entrega");
              return false;

      } else {
          return true;
      }
});
		
	  $("#reservar2").click(function () {

      if($("#select-sucursal-entrega").val() == 0){
														$('.error-lugar-entrega').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de entrega");
              return false;

      }  else {
          return true;
      }
});
	
	 $("#reservar2").click(function () {
				if($("#datetimepicker_hora4").val().length == 0){
													$('.error-hora-devolucion').addClass('has-error has-feedback');
		           alertas("danger","Selecciona la hora de devolución");
														return false;

								}  else {
												return true;
								}
		});
		
					$("#reservar2").click(function () {

      if($("#select-sucursal-devolucion").val() == 0){
														$('.error-lugar-devolucion').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de devolución");
              return false;

      }  else {
          return true;
      }
});
		
		
		//---------------------------------------------------------------------
		
		
	  $("#reservar").click(function () {

      if($("#datetimepicker_hora2").val().length == 0){
														$('.error-hora-entrega').addClass('has-error has-feedback');
						        alertas("danger","Selecciona la hora de entrega");
              return false;

      } else {
          return true;
      }
});
		
	  $("#reservar").click(function () {

      if($("#select-sucursal-entrega").val() == 0){
														$('.error-lugar-entrega').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de entrega");
              return false;

      }  else {
          return true;
      }
});
	
	 $("#reservar").click(function () {
				if($("#datetimepicker_hora4").val().length == 0){
													$('.error-hora-devolucion').addClass('has-error has-feedback');
		           alertas("danger","Selecciona la hora de devolución");
														return false;

								}  else {
												return true;
								}
		});
		
					$("#reservar").click(function () {

      if($("#select-sucursal-devolucion").val() == 0){
														$('.error-lugar-devolucion').addClass('has-error has-feedback');
														alertas("danger","Selecciona el lugar de devolución");
              return false;

      }  else {
          return true;
      }
});
		
//---  formulario --------------------------------------------------------------------------
		
	  $("#reservar").click(function () {

      if($("#email-c").val().length == 0){
														$('.error-email').addClass('has-error has-feedback');
						        alertas("danger","Agrega tu email");
              return false;

      } else {
          return true;
      }
});
	
	  $("#reservar").click(function () {

      if($("#nombre-c").val().length == 0){
														$('.error-nombre').addClass('has-error has-feedback');
						        alertas("danger","Agrega tu nombre");
              return false;

      } else {
          return true;
      }
});
		
	  $("#reservar").click(function () {

      if($("#ap-c").val().length == 0){
														$('.error-apellidos').addClass('has-error has-feedback');
						        alertas("danger","Agrega almenos un apellido");
              return false;

      } else {
          return true;
      }
});
		
		  $("#reservar").click(function () {

      if($("#tel-c").val().length == 0){
														$('.error-telefono').addClass('has-error has-feedback');
						        alertas("danger","Agrega un teléfono");
              return false;

      } else {
          return true;
      }
});
		
		  $("#reservar").click(function () {

      if($("#lic-c").val().length == 0){
														$('.error-lic').addClass('has-error has-feedback');
						        alertas("danger","Agrega tu numero de licencia");
              return false;

      } else {
          return true;
						}
									
});
		
//Focus---------
	$("#email-c").focus(function () {
      $('.error-email').removeClass('has-error has-feedback');
});
		
	$("#nombre-c").focus(function () {
      $('.error-nombre').removeClass('has-error has-feedback');
});
		
	$("#ap-c").focus(function () {
      $('.error-telefono').removeClass('has-error has-feedback');
});
		
	$("#tel-c").focus(function () {
      $('.error-apellidos').removeClass('has-error has-feedback');
});
		
	$("#lic-c").focus(function () {
      $('.error-lic').removeClass('has-error has-feedback');
});
		

$(document).on('click', '#reservar', function(){
	
	vehiculo = $('input:radio[name=tipo_vehiculo]:checked').val();
	
	if(vehiculo == undefined){
		
				alertas("danger","Selecciona un vehículo");
		
	} else {
		
	 	$('#modal-confirm-reserva').modal({
				show:'false',
			});

	}
	

});
		
		
$(document).on('click', '#confirm-regist-reserva', function(){
	//Datos de entrega
	 fecha_entrega = $('#datetimepicker2').val();
		hora_entrega = $('#datetimepicker_hora2').val();
	 lugar_entrega = $('#select-sucursal-entrega option:selected').attr('value');
	
	//Datos de devolucion
		fecha_devolucion = $('#datetimepicker4').val();
		hora_devolucion = $('#datetimepicker_hora4').val();
	 lugar_devolucion = $('#select-sucursal-devolucion option:selected').attr('value');
	 
		//tipo de auto
		vehiculo = $('input:radio[name=tipo_vehiculo]:checked').val();
	
		transmision = $('#tipo_transmision').attr('value');

		//tarifa por dia
	 tarifa =  $('input:radio[name=tipo_vehiculo]:checked').attr('data-id');
	
	 //Dias, diferencia entre las dos d¿fechas
	var dateB = moment(fecha_entrega);
 var dateC = moment(fecha_devolucion);
 
//console.log('Difference is ', dateB.diff(dateC, 'days'), 'days');
console.log(dateB.diff(dateB, 'days'));
	console.log(dateC.diff(dateB, 'days'));
	
		dias = dateC.diff(dateB, 'days');
	
		//Datos del formulario
	 email = $('#email-c').val();
	 nombre = $('#nombre-c').val();
	 ap = $('#ap-c').val();
	 tel = $('#tel-c').val();
	 lic = $('#lic-c').val();
	 coment = $('#coment-c').val();
	
		
						$.ajax({
								url:  "/admin/registrareserva",
								type: "POST",
								data:{fecha_entrega: fecha_entrega, hora_entrega: hora_entrega, lugar_entrega: lugar_entrega, fecha_devolucion: fecha_devolucion, hora_devolucion: hora_devolucion, lugar_devolucion: lugar_devolucion, vehiculo: vehiculo, transmision: transmision, tarifa: tarifa, dias: dias, email: email, nombre: nombre, ap: ap, tel: tel, lic: lic, coment: coment},
								success: function(e){
										id = e;
									
	         window.location.href = '/confirmar/datosdelpedido/'+id;
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	
	
	
});
	
	 

	
	//cuanso se aga el foco en el input eliminamos lso errores
		

	//Funciones para los alerts
function alertas(tipo,mensaje){
    $('.top-right').notify({
      message: {text: decodeURIComponent(mensaje)},
      type: tipo
    }).show();
  }
		
  </script>
  
	
</body>
</html>