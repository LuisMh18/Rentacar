@extends('layout/plantilla')

@section('title')
<title>Admin | Reservas</title>
@show

@section('scripts')
 @parent
 {{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
 {{ HTML::style('css/estilo_dtable.css') }}
 {{ HTML::Script('js/jquery.js') }}
 {{ HTML::script('js/bootstrap.min.js') }}
 {{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
 {{ HTML::script('js/accounting.min.js') }}
@show

<script>

	$(document).ready(function(){

  	$('.t-reservas').addClass('dahs_active');

			$('.reservas_v').slideDown();

			$('.flechita3').addClass('glyphicon glyphicon-menu-down');
			$('.flechita2').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita1').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita2').addClass('glyphicon glyphicon-menu-right');
			$('.flechita1').addClass('glyphicon glyphicon-menu-right');

			$('.titular_seccion').text('Reservas');

	});

</script>


@section('content')

<div class="exportar-ex">
	      <a href="{{ URL::to('admin/exportartodaslasreservas') }}" class="btn btn-success btn-sm btn-exp">Exportar a Excel</a>
</div>

<div class="seccion_tabla seccion_sucursal">
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo table-striped">
			<thead class="thead-tabla">
				<tr>
					<th class="cabecero">N° de reserva</th>
					<th class="cabecero">Cliente</th>
					<th class="cabecero">Tarifa por día</th>
					<th class="cabecero">Días</th>
					<th class="cabecero">Total</th>
					<th class="cabecero">Fecha de registro</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>



    <!--  Modal para ver detalle de la reserva -->
<div id="modal-detalle-reserva" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog dialog-sucursal">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center m-title">
                <span id="title-numero"></span>
            </h4>
            <h4 class="modal-title text-center m-title">
               <span id="title-fecha"></span>
            </h4>
          </div>
          <div class="modal-body body-modal-p">

												<ol class="breadcrumb navegacion-p">
													<li><a class="enlace-active" id="det-r" href="#">Detalle de la reserva</a></li>
													<li><a id="det-c" href="#">Detalle del cliente</a></li>
												</ol>

            		<table id="table-d-r" class="table table-pd">
															<tbody id="body-det">
																	<tr>
																			<td><span class="text-info">Vehículo:</span> <span id="p_v"></span> <span class="text-primary"> • </span><span class="text-info" id="v_foto" value="">Ver foto</span> <span class="text-primary"> • </span><span class="text-info">Transmisión:</span> <span id="p_t"></span></td>
																	</tr>
																	<tr>
																			<td><span class="text-info">Tarifa por día:</span> <span id="p_t_d"></span> <span class="text-primary"> • </span><span class="text-info">Días:</span> <span id="p_d"></span><span class="text-primary"> • </span> <span class="text-info">Total:</span> <span id="p_to"></span> </td>
																	</tr>
																	<tr>
                                    <td>
                                      <span class="text-info">Lugar de entrega:</span> <span id="p_l_e"></span>
                                      <span class="text-info">Direccion 1:</span> <span id="p_d1"></span>
                                      <span class="text-info td2">Dirección 2:</span> <span id="p_d2"></span>
                                      <span class="text-info">Colonia:</span> <span id="p_col"></span>
                                      <span class="text-info">Estado:</span> <span id="p_es"></span>
                                      <span class="text-info">Municipio:</span> <span id="p_mun"></span>
                                      <span class="text-info">CP:</span> <span id="p_cp"></span>
                                      <span class="text-info tref">Referencias:</span> <span id="p_tref"></span>
                                      <span class="text-info ttel">Teléfono:</span> <span id="p_t1"></span> <span id="p_t2"></span> <span id="p_t3"></span><span id="p_t4"></span>
                                    </td>
																	</tr>
                                  <tr>
                                    <td>
                                      <span class="text-info">Fecha de entrega:</span> <span id="p_f_e"></span>
                                      <span class="text-info">Hora de entrega:</span> <span id="p_h_e"></span></td>
                                    </td>
                                  </tr>
																	<tr>
                                    <td><span class="text-info">Lugar de devolucion:</span> <span id="p_l_d"></span>
                                      <span class="text-info">Direccion 1:</span> <span id="p_de1"></span>
                                      <span class="text-info tde2">Dirección 2:</span> <span id="p_de2"></span>
                                      <span class="text-info">Colonia:</span> <span id="p_dcol"></span>
                                      <span class="text-info">Estado:</span> <span id="p_des"></span>
                                      <span class="text-info">Municipio:</span> <span id="p_dmun"></span>
                                      <span class="text-info">CP:</span> <span id="p_dcp"></span>
                                      <span class="text-info tdref">Referencias:</span> <span id="p_dtref"></span>
                                      <span class="text-info tdtel">Teléfono:</span> <span id="p_dt1"></span> <span id="p_dt2"></span> <span id="p_dt3"></span><span id="p_dt4"></span>
                                    </td>
																	</tr>
                                  <tr>
                                    <td>
                                      <span class="text-info">Fecha de devolucion:</span> <span id="p_f_d"></span>
                                      <span class="text-info">Hora de devolucion:</span> <span id="p_h_d"></span></td>
                                    </td>
                                  </tr>
															</tbody>
													</table>

             <table id="table-d-c" class="table table-pd">
														<tbody id="body-det">
																<tr>
																		<td><span class="text-info">Nombre:</span> <span id="p_n"></span> <span class="text-primary"> • </span><span class="text-info">Apellidos:</span> <span id="p_ap"></span> <span class="text-primary"> • </span><span class="text-info">Email:</span> <span id="p_em"></span></td>
																</tr>
																<tr>
																		<td><span class="text-info">Teléfono:</span> <span id="p_tel"></span> <span class="text-primary"> • </span><span class="text-info">N° de Licencia:</span> <span id="p_num_l"></span> <span class="text-primary"> • </span><span class="text-info">Comentarios:</span> <span id="p_comentarios"></span></td>
																</tr>
														</tbody>
          </table>

          </div>
          <div class="modal-footer" style="text-align:left">

																		<button id="cerrar-reserva" type="button" class="btn btn-danger" data-dismiss="modal">
																			<span class="glyphicon glyphicon-chevron-left"></span>
																			Cerrar
																	</button>

          </div>
        </div>
      </div>
    </div>




          <!--  Modal para eliminar reserva  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar reserva
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar esta reserva?</h3>

          </div>
          <div class="modal-footer">

											 		<div class="footer-modal">
																<button type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-reserva" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>

          </div>
        </div>
      </div>
    </div>

     <!--  Modal para ver la foto del vehiculo -->
<div id="modal-foto-vehiculo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content modal-content-foto">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-picture"></span>
               Foto del vehículo
            </h4>
          </div>
          <div class="modal-body body-modal-foto">

            <div class="content-foto" action="">


																		<img src="" id="foto-v" alt="Foto del vehiculo" width="100%">

            </div>

          </div>
          <div class="modal-footer">

											 		<div class="footer-modal-foto">
																<button type="button" class="btn btn-danger" data-dismiss="modal">
																	<span class="glyphicon glyphicon-chevron-left"></span>
																	Salir
															</button>
													</div>

          </div>
        </div>
      </div>
    </div>



@stop


@section('mis_scripts')
{{ HTML::script('js/DataTables-1.9.4/media/js/jquery.dataTables.min.js') }}
{{ HTML::script('js/DataTables-1.9.4/media/js/jquery.dataTables.bootstrap.js') }}


<script>
			$.ajax({
							dataType: 'json',
							url: "/admin/listareservas",
							success: function (l) {
							tabla_a = $('#listar_').DataTable({
									"oLanguage": {
													"oPaginate": {
													"sPrevious": "Anterior",
													"sNext": "Siguiente",
													"sLast": "Ultima",
													"sFirst": "Primera"
													},

									"sLengthMenu": 'Mostrar <select>'+
									'<option value="10">10</option>'+
									'<option value="20">20</option>'+
									'<option value="30">30</option>'+
									'<option value="40">40</option>'+
									'<option value="50">50</option>'+
									'<option value="-1">Todos</option>'+
									'</select> registros',

									"sInfo": "Mostrando del _START_ a _END_ (Total: _TOTAL_ resultados)",
									"sInfoFiltered": " - filtrados de _MAX_ registros",
									"sInfoEmpty": "No hay resultados de búsqueda",
									"sZeroRecords": "No hay registros a mostrar",
									"sProcessing": "Espere, por favor...",
									"sSearch": "Buscar:",

						}, //end o


								fnCreatedRow : function (nRow, aData, iDataIndex) {
												$(nRow).attr('id', "fila_"+l[i].id);

							},

							'iDisplayLength': 100,

							"aaSorting": [[ 0, "desc" ]],

							"sPaginationType": "simple_numbers",
								"sPaginationType": "bootstrap",



			}); //End data


											tabla_a.fnClearTable();

													for(var i = 0; i < l.length; i++) {
																				tabla_a.fnAddData([
																															'<span class="text-info txt-escondido">N° de reserva: </span><span class="hidden">'+l[i].created_at+'</span><span value="'+l[i].id+'" class="text-primary detalle-cliente" title="Ver detalle">'+l[i].num_reserva+'</a>',
																															'<span class="text-info txt-escondido">Cliente: </span>'+l[i].nombre+' '+l[i].apellidos,
																					          '<span class="text-info txt-escondido">Tarifa por día: </span>'+accounting.formatMoney(l[i].tarifa_por_dia),
																															'<span class="text-info txt-escondido">Días: </span>'+l[i].dias,
																															'<span class="text-success">'+accounting.formatMoney(l[i].total)+'</span>',
																															'<span class="text-info txt-escondido">Fecha de registro: </span>'+l[i].created_at,
																													]);


																					} //End for


															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});






		//Detalle de la reserva -------------
	 $(document).on('click', '.detalle-cliente', function(){
			id = $(this).attr('value');

						 $.ajax({
								url:  "/admin/detallereserva",
								type: "GET",
								data:{id: id},
								success: function(d){

                  $('#title-numero').text('# '+d.reserva[0].num_reserva);
                  $('#title-fecha').text('Fecha: '+d.reserva[0].created_at);

                  $('#p_v').text(d.reserva[0].vehiculo);
                  $('#v_foto').attr('value', d.reserva[0].foto);

                  if(d.reserva[0].transmision == 1){
                     $('#p_t').text('Automático');
                  } else {
                      $('#p_t').text('Estándard');
                  }

                  $('#p_t_d').text(accounting.formatMoney(d.reserva[0].tarifa_por_dia));
                  $('#p_d').text(d.reserva[0].dias);
                  $('#p_to').text(accounting.formatMoney(d.reserva[0].total));
                  $('#p_l_e').text(d.reserva[0].lugar_entrega+" • ");
                  $('#p_d1').text(d.reserva[0].direccion1_e+" • ");
                  if(d.reserva[0].direccion2_e == ''){
                    $('.td2').hide();
                    $('#p_d2').text('');
                  } else {
                    $('.td2').show();
                    $('#p_d2').text(d.reserva[0].direccion2_e+" • ");
                  }

                  $('#p_col').text(d.reserva[0].colonia_e+" • ");
                  $('#p_es').text(d.reserva[0].estado_e+" • ");
                  $('#p_mun').text(d.reserva[0].municipio_e+" • ");
                  $('#p_cp').text(d.reserva[0].cp_e+" • ");
                  if(d.reserva[0].referencias_e == ''){
                    $('.tref').hide();
                    $('#p_tref').text('');
                  } else {
                      $('.tref').show();
                      $('#p_tref').text(d.reserva[0].referencias_e+" • ");
                  }
                  $('#p_t1').text(d.reserva[0].telefono1_e);
                  $('#p_t2').text(d.reserva[0].telefono2_e);
                  $('#p_t3').text(d.reserva[0].telefono3_e);
                  $('#p_t4').text(d.reserva[0].telefono4_e);

                  $('#p_f_e').text(d.reserva[0].fecha_entrega+" • ");
                  $('#p_h_e').text(d.reserva[0].hora_entrega);
                  $('#p_l_d').text(d.reserva[0].lugar_devolucion+" • ");
                  $('#p_de1').text(d.reserva[0].direccion1_d+" • ");
                  if(d.reserva[0].direccion2_d == ''){
                    $('.tde2').hide();
                    $('#p_de2').text('');
                  } else {
                    $('.tde2').show();
                    $('#p_de2').text(d.reserva[0].direccion2_d+" • ");
                  }

                  $('#p_dcol').text(d.reserva[0].colonia_d+" • ");
                  $('#p_des').text(d.reserva[0].estado_d+" • ");
                  $('#p_dmun').text(d.reserva[0].municipio_d+" • ");
                  $('#p_dcp').text(d.reserva[0].cp_d+" • ");
                  if(d.reserva[0].referencias_d == ''){
                    $('.tdref').hide();
                    $('#p_dtref').text('');
                  } else {
                      $('.tdref').show();
                      $('#p_dtref').text(d.reserva[0].referencias_d+" • ");
                  }
                  $('#p_dt1').text(d.reserva[0].telefono1_d);
                  $('#p_dt2').text(d.reserva[0].telefono2_d);
                  $('#p_dt3').text(d.reserva[0].telefono3_d);
                  $('#p_dt4').text(d.reserva[0].telefono4_d)
                  $('#p_f_d').text(d.reserva[0].fecha_devolucion+" • ");
                  $('#p_h_d').text(d.reserva[0].hora_devolucion);

                  $('#p_n').text(d.cliente[0].nombre);
                  $('#p_ap').text(d.cliente[0].apellidos);
                  $('#p_em').text(d.cliente[0].email);
                  $('#p_tel').text(d.cliente[0].telefono);
                  $('#p_num_l').text(d.cliente[0].num_licencia);
                  $('#p_comentarios').text(d.cliente[0].comentarios);

								},

								error: function(){
									alert('failure');
								}

					});


			$('#modal-detalle-reserva').modal({
      show: 'false',
    });

		});

		 $(document).on('click', '#cerrar-reserva', function(){
						 $('#title-numero').text('');
							$('#title-fecha').text('');
				   $('#p_v').text('');
				   $('#p_t').text('');
							$('#p_t_d').text('');
							$('#p_d').text('');
							$('#p_to').text('');
							$('#p_l_e').text('');
							$('#p_f_e').text('');
							$('#p_h_e').text('');
							$('#p_l_d').text('');
							$('#p_f_d').text('');
							$('#p_h_d').text('');

							$('#p_n').text('');
							$('#p_ap').text('');
							$('#p_em').text('');
							$('#p_tel').text('');
							$('#p_num_l').text('');
							$('#p_comentarios').text('');

							$('#det-r').addClass('enlace-active');
							$('#table-d-r').show();
							$('#det-c').removeClass('enlace-active');
				   $('#table-d-c').hide();
		});


	 $(document).on('click', '#det-c', function(){
			$(this).addClass('enlace-active');
			$('#det-r').removeClass('enlace-active');
			$('#table-d-r').hide();
			$('#table-d-c').show();
		});

		$(document).on('click', '#det-r', function(){
			$(this).addClass('enlace-active');
			$('#det-c').removeClass('enlace-active');
			$('#table-d-r').show();
			$('#table-d-c').hide();
		});


		//Foto del vehiculo ----------------------------------------------
			$(document).on('click', '#v_foto', function(){
						id = $(this).attr('value');

						$('#foto-v').prop('src', '/img/vehiculos/'+id);

						$('#modal-foto-vehiculo').modal({
							show: 'false',
						});
			});



	//Eliminar reserva
	/*$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });

				 $('#confirm-delete-reserva').attr('value', id);

	});

		$(document).on('click', '#confirm-delete-reserva', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminarvehiculo",
								type: "GET",
								data:{id: id},
								success: function(d){

										alertas("success","Reserva eliminada correctamente");

									 $('#fila_'+d).remove();




								},

								error: function(){
									alert('failure');
								}

					});
	});*/


</script>

@stop
