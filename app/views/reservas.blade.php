<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reservaciones</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
	{{ HTML::style('css/bootstrap-select.min.css') }}
	{{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
	{{ HTML::style('css/estilos_reserva.css') }}
	<!--{{ HTML::style('css/estilos.css') }}-->
	{{ HTML::Script('js/jquery.js') }}
	{{ HTML::Script('js/bootstrap.min.js') }}
	{{ HTML::Script('js/moment.min.js') }}
	{{ HTML::Script('js/bootstrap-datetimepicker.min.js') }}
	{{ HTML::Script('js/bootstrap-select.min.js') }}
	{{ HTML::Script('js/i18n/defaults-es_CL.min.js') }}
	{{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
	{{ HTML::script('js/accounting.min.js') }}
</head>
	
	<script>

		$(document).on('click', '.gly-menu', function(){
				$('li').fadeToggle(200);
		});

	</script>

	<style>
		.img-ve:hover{
			box-shadow:0px 0px 20px #E6E6E6;
			cursor:pointer;
		}

		.radio-v{
			cursor:pointer;
		}

		.txt-sin-datos{
			background:#D9534F;
			color:#fff;
			padding:.3em .5em;
			border-radius:3px;
			width:200px;
			border:1px solid #ebccd1;
			display:none;
		}

	</style>


<body>
	<div class="container section">

			 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
<div class="notifications bottom-right" data-html="true"></div>

		<div class="row">
			<div class="section_contenidos">
				<div class="logo-cabecera">
				 <div>
		      <img class="imagen-grande" src="/img/a1.png" alt="Logo">	
				 </div>
				 <div>
		      <img class="imagen-grande" src="/img/a2.png" alt="Teléfono">	
				 </div>
				</div>
				<div class="menu-cabecera">
				  <div class="menu-icon">
				  	<span class="txt-menu">Menú</span>
				    <span class="glyphicon glyphicon-th-list gly-menu"></span>
				  </div>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Acerca de nosotros</a></li>
					<li><a href="#">Nuestra flotilla</a></li>
					<li><a href="#">Facturación</a></li>
					<li><a href="#">Sucursales</a></li>
					<li><a href="#">Reservaciones</a></li>
				</div>
				<h1>Reservaciones</h1>
				<p class="nota1">Llena los datos para hacer la reservación.</p>
			<div class="contenedor-section-aside">
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

								<div class="tipo-carro"></div>

							</div>

							<div class="div-img-gif">
								<img src="/img/Cargandocc.gif" alt="Cargando" width="50px"> <span class="txt-cargando-vehiculos">Espere un momento por favor..</span>
							</div>
								<span class="txt-sin-datos">No hay resultados..</span>
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
						<button class="btn" id="reservar">Reservar Ahora</button>

					</div>

				</section>

				<aside class="aside-imagen">
				  <div class="aside-c">
				  	<a href="#">
						 <img src="/img/escribenos_email.png" alt="Imagen 1">	
					  </a>
					  <a href="#">
						 <img src="/img/coduce_contacto.png" alt="Imagen 2">
					  </a>
				  </div>
				</aside>
			</div>
						<!-- Campo escondido con el id del codigo del vehiculo -->
						<input type="text" class="hidden" name="idcodigo" id="idcodigo">
				<footer>
					<small>
						EMOTIONS RENT A CAR - renta de autos en toluca - renta de autos df - renta de autos en monterrey - renta de autos en aguascalientes
					</small>
					<strong>
						<a href="#">
							Aviso de privasidad
						</a>
					</strong>
				</footer>

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


			$("#datetimepicker1").on("dp.change", function (e) {
				 tipo = $('#tipo').val();
				 codigo = $('#idcodigo').attr('value');

					if(codigo == undefined){

					} else {
						$('.oculto').html('');
						compararfechas(codigo);
					}
			});

			$("#datetimepicker3").on("dp.change", function (e) {
				 tipo = $('#tipo').val();
				 codigo = $('#idcodigo').attr('value');

					if(codigo == undefined){

					} else {
						$('.oculto').html('');
						compararfechas(codigo);
					}
			});



		//Para la hora
		$(function () {
					$('#datetimepicker_hora1').datetimepicker({
								format: 'LT',
								minDate: moment()

				});

				});

				$(function () {
								$('#datetimepicker_hora2').datetimepicker({
									format: 'LT'
								});
				});

				$(function () {
					$('#datetimepicker_hora3').datetimepicker({
								format: 'LT',
								minDate: moment()

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


					codigo = $('#idcodigo').attr('value');

					if(codigo == undefined){

					} else {
						$('.oculto').html('');
						compararfechas(codigo);
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

		/*   - MOstrar los codigos - */
							$.ajax({
								url:  "/admin/mostrarcodigosdelvehiculo",
								type: "GET",
								success: function(t){

							  	div = $('.tipo-carro');
									contenido = "";

									for(datos in t.codigos){

										contenido += '<div class="radio">'+
										  							'<label>'+
										  									'<input type="radio" class="tipo_'+t.codigos[datos].id+'" name="codigo" id="'+t.codigos[datos].id+'" value="'+t.codigos[datos].id+'">'+ t.codigos[datos].descripcion_codigo +
										  							'</label>'+
                                 '</div>';


											}//end for

											div.append(contenido);

							    },

			 					error: function(){
									alert('failure');
								}

					});



		$(document).on('click', 'input:radio[name=codigo]', function(){
			 codigo = $(this).attr('value');
			 $(".reservar").hide();
			 $('#idcodigo').attr('value', codigo);
			 compararfechas(codigo);

	 	});



	function compararfechas(codigo){

		$('.oculto').html('');

		tipo_v = codigo;

		fecha_entrega = $('#datetimepicker2').val();
	 lugar_entrega = $('#select-sucursal-entrega option:selected').attr('value');

	//Datos de devolucion
		fecha_devolucion = $('#datetimepicker4').val();
	 lugar_devolucion = $('#select-sucursal-devolucion option:selected').attr('value');


					if(lugar_entrega == 0){
						alertas("danger","Selecciona el lugar de entrega");
					} else {
						fecha_entrega = $('#datetimepicker2').val();
						fecha_devolucion = $('#datetimepicker4').val();

						if(fecha_entrega >= fecha_devolucion){
							alertas('danger', 'La fecha de devolución tiene que ser mayor a la de entrega.');
						} else {


							$('.div-img-gif').show();
							$('.txt-sin-datos').hide();
							$.ajax({
									url:  "/admin/compararfechas",
									type: "GET",
									data:{lugar_entrega: lugar_entrega},
									success: function(comparar){

											if(comparar.f == ''){
												$('.txt-sin-datos').show();
											  $('.div-img-gif').hide();
											  $('.form-ped').hide();
											} else {

												for(datos in comparar.f){

															if(comparar.f[datos].fecha_fin <= fecha_entrega){

																} else if(comparar.f[datos].fecha_fin >= fecha_entrega) {

																	id_t = comparar.f[datos].id;
																	//En la primera que sea mayor cortamos el ciclo
																	//y llamamos a la funcion para mostrar los daos del vehiculo
																	mostrardatos(tipo_v, id_t, comparar.plaza_id);

																	break;
																}




														}
											}


									},

									error: function(){
										alert('failure');
									}

						});

						}
					} //end else





	}


			function mostrardatos(codigo, id_t, plaza_id){

					$.ajax({
								url:  "/admin/datosvehiculo",
								type: "GET",
								data:{codigo: codigo, id_t: id_t, plaza_id: plaza_id},
								success: function(v){

										if(v.vehiculo == ''){
											$('.txt-sin-datos').show();
											$('.div-img-gif').hide();
											$('.form-ped').hide();
										} else {

												for(datos in v.vehiculo){

														id_v = v.vehiculo[datos].id;
														//En la primera que sea mayor cortamos el ciclo
														//y llamamos a la funcion para mostrar los daos del vehiculo
													  mostrardatostarifa(id_t, id_v);
											}
										}





							   },

			 					error: function(){
									alert('failure');
								}

					}); 

			}

		//selecionar vehiculo por medio de la foto
		$(document).on('click', '.img-ve', function(){
			valor = $(this).attr('value');
			$(".inp_r_"+valor).prop("checked", true);
		});

		function mostrardatostarifa(id_t, id_v){

		//Dias, diferencia entre las dos d¿fechas
		 var dateB = moment(fecha_entrega);
		 var dateC = moment(fecha_devolucion);

		//console.log('Difference is ', dateB.diff(dateC, 'days'), 'days');

				dias = dateC.diff(dateB, 'days');


					$.ajax({
								url:  "/admin/datostarifadetalle",
								type: "GET",
								data:{id_t: id_t, id_v: id_v },
								success: function(t){

									if(t.t == 0){

										  //$('.txt-sin-datos').text('No hay resultados..');
											$('.div-img-gif').hide();
											//$('.form-ped').hide();

									} else {

								$('.txt-sin-datos').hide();

		           			 $('#reservar2').hide();
		           			 $('#reservar').show();

					            $('.oculto').show(200);
										  div = $('.oculto');
											contenido = "";

											$('.div-img-gif').hide();

											for(datos in t.tarifa){

												if(t.tarifa[datos].foto == ''){

													if(t.tarifa[datos].transmision == 1){

														contenido += '<div class="form3 tipo-transmision">'+
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo">'+
																					'<img width="200px" src="img/Imagen_no_disponible.PNG" alt="Imagen no disponible">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Automático</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span>'+t.tarifa[datos].cobertura+'</span>'+
																					'<div>'+
																						'<label class="radio-v text-info">Seleccionar este vehículo:'+
																								'<input type="radio" name="tipo_vehiculo" class="inpradio inp_r_'+t.tarifa[datos].id+'" id="" value="'+t.tarifa[datos].id+'" data-id="'+t.tarifa[datos].tarifa_por_dia+'">'+
																						'</label>'+
																					'</div>'+
																			'</div>'+k
				                                                         '</div>';

													} else {

														contenido += '<div class="form3 tipo-transmision">'+
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo">'+
																					'<img width="200px" src="img/Imagen_no_disponible.PNG" alt="Imagen no disponible">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Estándard</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span>'+t.tarifa[datos].cobertura+'</span>'+
																					'<div>'+
																						'<label class="radio-v text-info">Seleccionar este vehículo:'+
																								'<input type="radio" name="tipo_vehiculo" class="inpradio inp_r_'+t.tarifa[datos].id+'" id="" value="'+t.tarifa[datos].id+'" data-id="'+t.tarifa[datos].tarifa_por_dia+'">'+
																						'</label>'+
																					'</div>'+
																			'</div>'+
				                            '</div>';
														
													}

												} else {

													if(t.tarifa[datos].transmision == 1){

														contenido += '<div class="form3 tipo-transmision">'+
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo">'+
																					'<img width="200px" src="img/vehiculos/'+t.tarifa[datos].foto+'" alt="Imagen del vehiculo">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Automático</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span>'+t.tarifa[datos].cobertura+'</span>'+
																					'<div>'+
																						'<label class="radio-v text-info">Seleccionar este vehículo:'+
																								'<input type="radio" name="tipo_vehiculo" class="inpradio inp_r_'+t.tarifa[datos].id+'" id="" value="'+t.tarifa[datos].id+'" data-id="'+t.tarifa[datos].tarifa_por_dia+'">'+
																						'</label>'+
																					'</div>'+
																			'</div>'+
				                            '</div>';

													} else {

														contenido += '<div class="form3 tipo-transmision">'+
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo">'+
																					'<img width="200px" src="img/vehiculos/'+t.tarifa[datos].foto+'" alt="Imagen del vehiculo">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Estándard</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span>'+t.tarifa[datos].cobertura+'</span>'+
																					'<div>'+
																						'<label class="radio-v text-info">Seleccionar este vehículo:'+
																								'<input type="radio" name="tipo_vehiculo" class="inpradio inp_r_'+t.tarifa[datos].id+'" id="" value="'+t.tarifa[datos].id+'" data-id="'+t.tarifa[datos].tarifa_por_dia+'">'+
																						'</label>'+
																					'</div>'+
																			'</div>'+
				                            '</div>';

				                            	
														
													}

												}




													}//end for

													div.append(contenido);

												$('.form-ped').slideDown(400);
									}
									


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


										      $('.error-email').removeClass('has-error has-feedback');

										      $('.error-nombre').removeClass('has-error has-feedback');


										      $('.error-telefono').removeClass('has-error has-feedback');


										      $('.error-apellidos').removeClass('has-error has-feedback');


										      $('.error-lic').removeClass('has-error has-feedback');

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

		$(".reservar").click(function () {

						    alertas("danger","Selecciona la el codigo del vehiculo");

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



/***** Boton 2 ---------------------------------------------------------------------------------------------------------------------------------------*/
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

		 fecha_entrega = $('#datetimepicker2').val();
		 fecha_devolucion = $('#datetimepicker4').val();

		if(fecha_entrega >= fecha_devolucion){
			alertas('danger', 'La fecha de devolución no puede ser anterior o igual a la fecha de entrega.');
		} else {

	 	$('#modal-confirm-reserva').modal({
				show:'false',
			});

		}

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

 function alertas2(tipo,mensaje){
    $('.bottom-right').notify({
      message: {text: decodeURIComponent(mensaje)},
      type: tipo
    }).show();
  }

  </script>


</body>
</html>
