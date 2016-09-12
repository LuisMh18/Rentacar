<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
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
			width:80%;
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
				 <div class="imagen-tel">
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
				<h1 class="h1-r">Reservaciones</h1>
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
									<span id="m_d_tl"></span>
									<div class="m_d_telefonos"></div>
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
						            <option value="{{ $su->id }}" id="{{ $su->gerente_id }}">Sucursal {{ $su->nombre_sucursal }}</option>
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
									<span id="m_d_tl_d"></span>
									<div class="m_d_telefonos_d"></div>
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
								<span class="txt-sin-datos">No contamos con el vehículo solicitado en las fechas seleccionadas.</span>
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
						<div class="legenda">
							Nota: La entrega en una oficina diferente tiene un costo adicional. El costo será determinado al momento de recoger el auto.
						</div>

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
							Aviso de privacidad
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


			/*console.log(moment().startOf('day').fromNow());

			console.log(moment().format('HH:mm:ss'));

			console.log(moment().add(1, 'days'));

			var dateB = moment('2014-11-13');
			var dateC = moment('2014-11-11');
			 
			console.log('Difference is ', dateB.diff(dateC, 'hours'), 'Horas');

			console.log('Difference is ', dateB.diff(dateC, 'days'), 'days');


			var dateD = moment('2014-11-13');
			var dateE = moment('2014-11-11');
			 
			console.log('La diferencia es:  ', dateD.diff(dateE, 'hours'), 'Horas');*/

			var breakfast = moment('8:32','HH:mm');
			console.log(breakfast);
            var lunch = moment('12:52','HH:mm');
            console.log(lunch);






				$(function () {

								$('#datetimepicker1').datetimepicker({
												format: 'YYYY-MM-DD',
												minDate: moment().add(1, 'days') //obtenemos la fecha con un dia despues del actual

								});

				});

				$(function () {
								$('#datetimepicker2').datetimepicker({
									format: 'YYYY-MM-DD',
									minDate: moment().add(1, 'days')
								});
				});

				$(function () {
								$('#datetimepicker3').datetimepicker({
									format: 'YYYY-MM-DD',
									minDate: moment().add(1, 'days')
								});
				});

			$(function () {
								$('#datetimepicker4').datetimepicker({
									format: 'YYYY-MM-DD',
									minDate: moment().add(1, 'days')
								});
				});


			$("#datetimepicker1").on("dp.change", function (e) {
				$('.txt-sin-datos').hide();
				 tipo = $('#tipo').val();
				 codigo = $('#idcodigo').attr('value');
					if(codigo == undefined){

					} else {
						$('.oculto').html('');
						compararfechas(codigo);
					}
			});

			$("#datetimepicker3").on("dp.change", function (e) {
				$('.txt-sin-datos').hide();
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

				/*$("#datetimepicker_hora2").on("dp.change", function (e) {
					
									hora_entrega = $('#datetimepicker_hora2').val();
				                   console.log(hora_entrega);

			    });


			    $("#datetimepicker_hora4").on("dp.change", function (e) {
					
									hora_devolucion = $('#datetimepicker_hora4').val();
				                   console.log(hora_devolucion);

			    });*/



				$(document).on('change', '#select-sucursal-entrega', function(){
					$('.txt-sin-datos').hide();
					id = $(this).val();
					$('.m_d_telefonos').html('');
					opcion2 =	$('#select-sucursal-devolucion option:selected').attr('value');
					if(opcion2 == 0){

					} else {
						if(opcion2 == id){
								$('.legenda').hide();
						} else {
							$('.legenda').show();
						}
					}

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
						$('#m_d_tl').text('');
						$('.m_d_telefonos').html('');

					} else {

						$.ajax({
								url:  "/admin/mostrarsucursales",
								type: "GET",
					   data:{id: id},
								success: function(s){
									$('.nombre_cp').show();
									$('.nombre_direcc').show();
									$('.hr').show();
									$('#nombre_su').text(s.sucursal.nombre_sucursal);
									$('#direccion1').text(s.sucursal.direccion1);
									$('#direccion2').text(s.sucursal.direccion2);
									$('#colonia').text(s.sucursal.colonia);
									$('#estado').text(s.sucursal.estado);
									$('#m_d').text(s.sucursal.municipio_delegacion);
									$('#cp').text(s.sucursal.cp);
									$('#referencia').text(s.sucursal.referencia);

									div = $('.m_d_telefonos');
									contenido = "";
									if(s.tel_s_cantidad == 1){
										$('#m_d_tl').text('Teléfono:');
									} else {
										$('#m_d_tl').text('Teléfonos:');
									}

									for(datos in s.tel_sucursal){

										contenido += '<div>'+
																				'<span class="nom_tel'+datos+'">'+s.tel_sucursal[datos].nombre+': </span>'+
																				'<span class="nu_te'+datos+'">'+s.tel_sucursal[datos].numero+'</span>'+
																		'</div>'+
																 '</div>';


											}//end for

											div.append(contenido);


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
					$('.m_d_telefonos_d').html('');


					opcion1 =	$('#select-sucursal-entrega option:selected').attr('value');
					if(opcion1 == 0){

					} else {
						if(opcion1 == id){
								$('.legenda').hide();
						} else {
							$('.legenda').show();
						}
					}

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
						$('#m_d_tl_d').text('');
						$('.m_d_telefonos_d').html('');

					} else {

						$.ajax({
								url:  "/admin/mostrarsucursales",
								type: "GET",
					   data:{id: id},
								success: function(s){
									$('.nombre_cp-d').show();
									$('.nombre_direcc-d').show();
									$('.hr-d').show();
									$('#nombre_su-d').text(s.sucursal.nombre_sucursal);
									$('#direccion1-d').text(s.sucursal.direccion1);
									$('#direccion2-d').text(s.sucursal.direccion2);
									$('#colonia-d').text(s.sucursal.colonia);
									$('#estado-d').text(s.sucursal.estado);
									$('#m_d-d').text(s.sucursal.municipio_delegacion);
									$('#cp-d').text(s.sucursal.cp);
									$('#referencia-d').text(s.sucursal.referencia);

									div = $('.m_d_telefonos_d');
									contenido = "";
									if(s.tel_s_cantidad == 1){
										$('#m_d_tl_d').text('Teléfono:');
									} else {
										$('#m_d_tl_d').text('Teléfonos:');
									}

									for(datos in s.tel_sucursal){

										contenido += '<div>'+
																				'<span class="nom_tel_d'+datos+'">'+s.tel_sucursal[datos].nombre+': </span>'+
																				'<span class="nu_te_d'+datos+'">'+s.tel_sucursal[datos].numero+'</span>'+
																		'</div>'+
																 '</div>';


											}//end for

											div.append(contenido);


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
			 $('.txt-sin-datos').hide();
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
							$.ajax({
									url:  "/admin/compararfechas",
									type: "GET",
									data:{lugar_entrega: lugar_entrega},
									success: function(comparar){
											console.log(comparar.f);
											if(comparar.f == ''){
												$('.txt-sin-datos').show();
											    $('.div-img-gif').hide();
											    $('.form-ped').hide();
											  //console.log('No hay datos en la sucursal');
											} else {
													//console.log('Si hay datos en la sucursal');
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
											//console.log('- no hay vehiculos en la sucursal con las fechas elegidas');
										} else {
											//console.log('- Si hay vehiculos en la sucursal con las fechas elegidas');
												//console.log(v.vehiculo.length);
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
									console.log(t);

									//if(t.t == 0){

										 /* $('.txt-sin-datos').show();
										  $('.div-img-gif').hide();
										  $('.form-ped').hide();*/

									//} else {

								//$('.txt-sin-datos').hide();

		           			 $('#reservar2').hide();
		           			 $('#reservar').show();

					            $('.oculto').show(200);
										  div = $('.oculto');
											contenido = "";

											//$('.div-img-gif').hide();

											for(datos in t.tarifa){

												if(t.tarifa[datos].foto == ''){

													if(t.tarifa[datos].transmision == 1){

														contenido += '<div class="form3 tipo-transmision">'+
																			'<div class="c3"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo" style="text-align:center; padding-top:50px;">'+
																					'<img width="200px" src="img/Imagen_no_disponible.PNG" alt="Imagen no disponible">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Automático</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span class="text-info">“Incluye Renta, KM Libre, Coberturas e IVA”.</span>'+
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
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo" style="text-align:center;padding-top:50px;">'+
																					'<img width="200px" src="img/Imagen_no_disponible.PNG" alt="Imagen no disponible">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Estándard</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span class="text-info">“Incluye Renta, KM Libre, Coberturas e IVA”.</span>'+
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
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo" style="text-align:center;padding-top:50px;">'+
																					'<img width="200px" src="img/vehiculos/'+t.tarifa[datos].foto+'" alt="Imagen del vehiculo">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Automático</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span class="text-info">“Incluye Renta, KM Libre, Coberturas e IVA”.</span>'+
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
																			'<div class="c3 img-ve"  value="'+t.tarifa[datos].id+'" title="Seleccionar este vehículo" style="text-align:center;padding-top:50px;">'+
																					'<img width="200px" src="img/vehiculos/'+t.tarifa[datos].foto+'" alt="Imagen del vehiculo">'+
																			'</div>'+
																			'<div class="c4">'+
																					'<span class="text-info">'+t.tarifa[datos].descripcion+'</span>'+
																					'<span class="text-primary">Transmisión: Estándard</span>'+
																					'<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia)+' x día</span>'+
																	                '<span>'+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * 7)+' x semana</span>'+
																	                '<span>N° de días seleccionados: '+dias+'</span>'+
																	                '<span class="text-success">Total: '+accounting.formatMoney(t.tarifa[datos].tarifa_por_dia * dias)+'</span>'+
																	                '<span class="text-info">“Incluye Renta, KM Libre, Coberturas e IVA”.</span>'+
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


												if($('.oculto').html() == ''){
													  $('.txt-sin-datos').show();
													  $('.div-img-gif').hide();
													  $('.form-ped').hide();
													
												} else {
													  $('.txt-sin-datos').hide();
													  $('.div-img-gif').hide();
													  //$('.form-ped').show();
												      $('.form-ped').slideDown(400);
												}
									//}



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


		/*------------------ULTIMAS MODIFICACIONES AL REGISTRAR NUEVA RESERVA -------------------------*/

				fecha_entrega = $('#datetimepicker2').val();

				fecha_actual = moment().format('YYYY-MM-DD');
				console.log("Fecha actual: " + fecha_actual);

				console.log("Fecha de entrega: " + fecha_entrega);


				var dateB = moment(fecha_entrega);
			    var dateC = fecha_actual;

			console.log('La diferencia es: ', dateB.diff(dateC, 'days'), 'dias');
			console.log('La diferencia es: ', dateB.diff(dateC, 'hours'), 'horas');

			if(dateB.diff(dateC, 'days') > 1){

				$('#modal-confirm-reserva').modal({
						show:'false',
				})

			} else{

				$('#modal-confirm-reserva').modal({
						show:'false',
				});

				/*hora_actual = moment().format('h:mm A');

				console.log("Hora actual: " + hora_actual);

				hora_entrega = $('#datetimepicker_hora2').val();
				console.log("Hora de entrega: " + hora_entrega);

				var mensaje_actual = hora_actual;  //'11:52 AM'

				var mensaje_entrega = hora_entrega;

				if(mensaje_actual.includes("AM") == true && mensaje_entrega.includes("PM") == true){

					console.log('comparamos primera opcion');
					calculardiferenciayformatohoras1(mensaje_actual, mensaje_entrega);

				} else if(mensaje_actual.includes("AM") == false && mensaje_entrega.includes("PM") == true){

					console.log('comparamos con la segunda opcion');
					calculardiferenciahoras1();

				} else if(mensaje_actual.includes("AM") == true && mensaje_entrega.includes("PM") == false){

					console.log('comparamos con la tercera opcion');
					calculardiferenciahoras2();

				} else if(mensaje_actual.includes("PM") == true && mensaje_entrega.includes("AM") == true){ //si no se cumple ninguna

					console.log('comparamos con la tercera opcion');
					calculardiferenciayformatohoras2();

				}*/

				//alertas('danger', 'No se puede reservar con menos de 24hrs.');
			}


			/* --------------------------------------------------------------------------------------------- */

	 	/*$('#modal-confirm-reserva').modal({
				show:'false',
		});*/

		}

	}


});





/*------------------ULTIMAS MODIFICACIONES AL REGISTRAR NUEVA RESERVA -------------------------*/

$(document).on('click', '#confirm-regist-reserva', function(){

	hora_entrega = $('#datetimepicker_hora2').val();

	hora_devolucion = $('#datetimepicker_hora4').val();

	var mensaje_entrega = hora_entrega;

	var mensaje_devolucion = hora_devolucion;

	if(mensaje_entrega.includes("AM") == true && mensaje_devolucion.includes("PM") == true){

		console.log('comparamos primera opcion');
		calculardiferenciayformato();

	} else if(mensaje_entrega.includes("AM") == false && mensaje_devolucion.includes("PM") == true){

		console.log('comparamos con la segunda opcion');
		calculardiferencia();

	} else if(mensaje_entrega.includes("AM") == true && mensaje_devolucion.includes("PM") == false){

		console.log('comparamos con la tercera opcion');
		calculardiferencia();

	} else { //si no se cumple ninguna

		console.log('No se cumple ninguna');
		hora_mayor_3_horas = 0;
	    agregarnuevareserva(hora_mayor_3_horas);

	}


	function calculardiferencia(){

		var h_entrega = moment(hora_entrega, 'HH:mm');
		var h_devolucion = moment(hora_devolucion, 'HH:mm');

		console.log('La diferencia es: ', h_devolucion.diff(h_entrega, 'minutes'), 'minutos');

		//si la diferencia es mayor a 180min osea 3hrs entonses le sumamos 1dia y calculamos el precio
		if(h_devolucion.diff(h_entrega, 'minutes') > '180'){

			console.log('La hora de devolución es mayor a 180 min');
			hora_mayor_3_horas = 1;
			agregarnuevareserva(hora_mayor_3_horas);

		} else {

			console.log('Es menor o igual a 180 min');
			hora_mayor_3_horas = 0;
			agregarnuevareserva(hora_mayor_3_horas);
		}

	}//end function calculardiferencia


	function calculardiferenciayformato(){

		hr_entrega = hora_entrega.split(":");
        console.log("Hora de entrega: " + hora_entrega);
        console.log(hr_entrega[0]);

        switch (hr_entrega[0] + ":00") { 
		   	case '12:00': 
		   	    valor_hora_entrega = "00";
		   	    calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 12');
		      	break 
		   	case '1:00': 
		   		valor_hora_entrega = "01";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 1');
		      	break 
		   	case '2:00': 
		   		valor_hora_entrega = "02";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 2');
		      	break
		    case '3:00': 
		    	valor_hora_entrega = "03";
		    	calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 3');
		      	break 
		   	case '4:00': 
		   		valor_hora_entrega = "04";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 4');
		      	break
		    case '5:00': 
		    	valor_hora_entrega = "05";
		    	calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 5');
		      	break 
		   	case '6:00': 
		   		valor_hora_entrega = "06";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 6');
		      	break
		    case '7:00': 
		    	valor_hora_entrega = "07";
		    	calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 7');
		      	break 
		   	case '8:00': 
		   		valor_hora_entrega = "08";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 8');
		      	break 
		    case '9:00': 
		    	valor_hora_entrega = "09";
		    	calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 9');
		      	break 
		   	case '10:00': 
		   		valor_hora_entrega = "10";
		   		calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 10');
		      	break
		     case '11:00': 
		     	valor_hora_entrega = "11";
		     	calcularhoradevolucion(valor_hora_entrega);
		      	//console.log('El valor es 11');
		      	break 
		   	default: 
		      	console.log("Nada");
		}


	} //end function


	function calcularhoradevolucion(hora_de_entrega){
			hr_devolucion = hora_devolucion.split(":");
	        console.log("Hora de devolución: " + hora_devolucion);
	        console.log(hr_devolucion[0]);

	        switch (hr_devolucion[0] + ":00") { 
		   	case '12:00': 
		   	    valor_hora_devolucion = "12";
		   	    compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 12');
		      	break 
		   	case '1:00': 
		   		valor_hora_devolucion = "13";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 13');
		      	break 
		   	case '2:00': 
		   		valor_hora_devolucion = "14";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 14');
		      	break
		    case '3:00': 
		    	valor_hora_devolucion = "15";
		    	compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 15');
		      	break 
		   	case '4:00': 
		   		valor_hora_devolucion = "16";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 16');
		      	break
		    case '5:00': 
		    	valor_hora_devolucion = "17";
		    	compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 17');
		      	break 
		   	case '6:00': 
		   		valor_hora_devolucion = "18";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 18');
		      	break
		    case '7:00': 
		    	valor_hora_devolucion = "19";
		    	compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 19');
		      	break 
		   	case '8:00': 
		   		valor_hora_devolucion = "20";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 20');
		      	break 
		    case '9:00': 
		    	valor_hora_devolucion = "21";
		    	compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 21');
		      	break 
		   	case '10:00': 
		   		valor_hora_devolucion = "22";
		   		compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 22');
		      	break
		     case '11:00': 
		     	valor_hora_devolucion = "23";
		     	compararsisonmasdetreshoras(valor_hora_devolucion, hora_de_entrega);
		      	console.log('El valor es 23');
		      	break 
		   	default: 
		      	console.log("Nada");
		}

	 } //end function calcularhoradevolucion


	 function compararsisonmasdetreshoras(_hora_devolucion, _hora_entrega){

			hr_entrega = hora_entrega.split(":");
			hr_devolucion = hora_devolucion.split(":");
			console.log(hr_entrega[1]);
			console.log(hr_devolucion[1]);


			console.log("- Hora de entrega: " + _hora_entrega);
			console.log("- Hora de devolucion: " + _hora_devolucion);

			var h_entrega = moment(_hora_entrega+":"+hr_entrega[1], 'HH:mm');
			var h_devolucion = moment(_hora_devolucion+":"+hr_devolucion[1], 'HH:mm');

			console.log('La diferencia es: ', h_devolucion.diff(h_entrega, 'minutes'), 'minutos');

			console.log(_hora_entrega+":"+hr_entrega[1]);
			console.log(_hora_devolucion+":"+hr_devolucion[1]);


			if(h_devolucion.diff(h_entrega, 'minutes') > '180'){

				console.log('La hora de devolución es mayor a 180 min');
				hora_mayor_3_horas = 1;
			    agregarnuevareserva(hora_mayor_3_horas);

			} else {

				console.log('Es menor o igual a 180 min');
				hora_mayor_3_horas = 0;
			    agregarnuevareserva(hora_mayor_3_horas);
			}

		}


});


function agregarnuevareserva(){

	//Datos de entrega
	 fecha_entrega = $('#datetimepicker2').val();
	 hora_entrega = $('#datetimepicker_hora2').val();
	 lugar_entrega = $('#select-sucursal-entrega option:selected').attr('value');
	 direccion1 = $('#direccion1').text();
	 direccion2 = $('#direccion2').text();
	 colonia = $('#colonia').text();
	 estado = $('#estado').text();
	 municipio = $('#m_d').text();
	 cp = $('#cp').text();
	 referencia = $('#referencia').text();

	 //telefonos sucursal entrega
	 tel_e_1 = $('.nom_tel0').text();
	 tel_e_2 = $('.nom_tel1').text();
	 tel_e_3 = $('.nom_tel2').text();
	 tel_e_4 = $('.nom_tel3').text();

	 num_e_1 = $('.nu_te0').text();
	 num_e_2 = $('.nu_te1').text();
	 num_e_3 = $('.nu_te2').text();
	 num_e_4 = $('.nu_te3').text();

	//Datos de devolucion
		fecha_devolucion = $('#datetimepicker4').val();
		hora_devolucion = $('#datetimepicker_hora4').val();
	  lugar_devolucion = $('#select-sucursal-devolucion option:selected').attr('value');
	  direccion1_d = $('#direccion1-d').text();
	  direccion2_d = $('#direccion2-d').text();
	  colonia_d = $('#colonia-d').text();
	  estado_d = $('#estado-d').text();
 	 municipio_d = $('#m_d-d').text();
 	 cp_d = $('#cp-d').text();
	  referencia_d = $('#referencia-d').text();

		//telefonos sucursal devolucion
		tel_d_1 = $('.nom_tel_d0').text();
		tel_d_2 = $('.nom_tel_d1').text();
		tel_d_3 = $('.nom_tel_d2').text();
		tel_d_4 = $('.nom_tel_d3').text();

		num_d_1 = $('.nu_te_d0').text();
		num_d_2 = $('.nu_te_d1').text();
		num_d_3 = $('.nu_te_d2').text();
		num_d_4 = $('.nu_te_d3').text();

		//tipo de auto
		vehiculo = $('input:radio[name=tipo_vehiculo]:checked').val();

		transmision = $('#tipo_transmision').attr('value');

		//tarifa por dia
	 tarifa =  $('input:radio[name=tipo_vehiculo]:checked').attr('data-id');

	 id_sucursal_entrega = $('#select-sucursal-entrega option:selected').attr('value');

	 id_sucursal_devolucion = $('#select-sucursal-devolucion option:selected').attr('value');

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
								data:{
									hora_mayor_3_horas: hora_mayor_3_horas,
									fecha_entrega: fecha_entrega,
									hora_entrega: hora_entrega,
									lugar_entrega: lugar_entrega,
									direccion1: direccion1,
									direccion2: direccion2,
									colonia: colonia,
									estado: estado,
									municipio: municipio,
									cp: cp,
									referencia: referencia,
									tel_e_1: tel_e_1,
									tel_e_2: tel_e_2,
									tel_e_3: tel_e_3,
									tel_e_4: tel_e_4,
									num_e_1: num_e_1,
									num_e_2: num_e_2,
									num_e_3: num_e_3,
									num_e_4: num_e_4,
									direccion1_d: direccion1_d,
									direccion2_d: direccion2_d,
									colonia_d: colonia_d,
									estado_d: estado_d,
									municipio_d: municipio_d,
									cp_d: cp_d,
									referencia_d: referencia_d,
									tel_d_1: tel_d_1,
									tel_d_2: tel_d_2,
									tel_d_3: tel_d_3,
									tel_d_4: tel_d_4,
									num_d_1: num_d_1,
									num_d_2: num_d_2,
									num_d_3: num_d_3,
									num_d_4: num_d_4,
									fecha_devolucion: fecha_devolucion,
									hora_devolucion: hora_devolucion,
									lugar_devolucion: lugar_devolucion,
									vehiculo: vehiculo,
									transmision: transmision,
									tarifa: tarifa,
									dias: dias,
									email: email,
									nombre: nombre,
									ap: ap,
									tel: tel,
									lic: lic,
									coment: coment },
								success: function(e){
										id = e;

   	         window.location.href = '/confirmar/datosdelpedido/'+id;


								},

								error: function(){
									alert('failure');
								}

					});

} //end agregar nueva reserva


/*--------------------------------END ULTIMAS MODIFICACIONES AL REGISTRAR NUEVA RESERVA --------------*/


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
