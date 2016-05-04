@extends('layout/plantilla')

@section('title')
<title>Admin | Vehículos</title>
@show

@section('scripts')
 @parent
 {{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
 {{ HTML::style('css/estilo_dtable.css') }}
 {{ HTML::Script('js/jquery.js') }}
 {{ HTML::script('js/bootstrap.min.js') }}
 {{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
@show

<script>

	$(document).ready(function(){
		
  	$('.t-catalogos').addClass('dahs_active');
		
			$('.sucursal_v').slideDown();
		
			$('.flechita1').addClass('glyphicon glyphicon-menu-down');
			$('.flechita2').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita3').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita2').addClass('glyphicon glyphicon-menu-right');
			$('.flechita3').addClass('glyphicon glyphicon-menu-right');
		
			$('.titular_seccion').text('Catálogo Vehículos');
		
	});
	
</script>


@section('content')

<div class="seccion_tabla seccion_sucursal">
<div class="agregar">
	<button id="agregar-vehiculo" class="btn btn-primary" title="Agregar vehículo">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo table-striped">
			<thead class="thead-tabla">
				<tr>
					<th class="cabecero">Código</th>
					<th class="cabecero w-g">Tipo</th>
					<th class="cabecero w">Transmisión</th>
					<th class="cabecero w">Foto</th>
					<th class="cabecero w">Estatus</th>
					<th class="cabecero w">Editar</th>
					<th class="cabecero w">Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
    
 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
    

    <!--  Modal para agregar vehiculo  -->
<div id="modal-add-vehiculo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar vehículo
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form enctype="multipart/form-data" class="formulario">
															<div class="datos1">
																			<div class="form-group error-tipo">
																						<label for="tipo" class="text-primary">Código: </label>
																						<select name="tipo" id="tipo" class="form-control"></select>
																			</div>
																			
																			<!-- Campo escondido  -->
																			<input type="text" name="tipo_c" id="tipo_c" class="hidden">
																			
																			<div class="form-group error-transmision">
																						<label for="transmision" class="text-primary">Transmisión: </label>
																						<select name="transmision" id="transmision" class="form-control">
																							<option value="0">-- Seleccione --</option>
																							<option value="1">Automático</option>
																							<option value="2">Estándard</option>
																						</select>	
																			</div>
																</div>
																
																			<div class="form-group error-vehiculo">
																						<label for="nombre" class="text-primary">Tipo de vehículo: </label>
																						<input type="text" name="nombre" id="nombre" class="form-control">
																						<span class="icon-vehiculo"></span>	
																			</div>
																			
																			<div class="form-group">
																						<label for="imagen" class="text-primary error-imagen">Imagen: </label>
																						<input type="file" name="imagen" id="imagen" accept="image/*">
																			</div>

																		<label for="estatus" class="text-primary">Estatus: </label>
																		<div class="checkbox checkbox-activ check-w">
																					 <span class="text-primary">Activo</span>
																					<div class="txt-activ">
																					  <input name="inp-check" id="inp-check" type="checkbox" value="0">
																					</div>
																		</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-vehiculo" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-vehiculo" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
        <!--  Modal para eliminar vehiculo  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar vehículo
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este vehículo?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-vehiculo" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-vehiculo" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
     <!--  Modal para editar vehiculo  -->
<div id="modal-edit-vehiculo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar vehículo
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form enctype="multipart/form-data" class="formulario_editar">
															
																			<!-- Campo escondido -->
																			<input type="text" name="id_vehiculo" id="id_vehiculo" value="" class="hidden">
																			
																			
																			<div class="datos1">
																			<div class="form-group error-tipo-edit-select">
																						<label for="tipo-edit-select" class="text-primary">Código: </label>
																						<select name="tipo-edit-select" id="tipo-edit-select" class="form-control"></select>
																			</div>
																			
																			<!-- Campo escondido  -->
																			<input type="text" name="tipo_c_edit" id="tipo_c_edit" class="hidden">
																			
																			<div class="form-group error-transmision-edit">
																						<label for="transmision-edit" class="text-primary">Transmisión: </label>
																						<select name="transmision-edit" id="transmision-edit" class="form-control"></select>	
																			</div>
																</div>
																															
																			
																			<div class="form-group error-vehiculo-edit">
																						<label for="nombre_edit" class="text-primary">Tipo de vehículo: </label>
																						<input type="text" name="nombre_edit" id="nombre_edit" class="form-control" >
																						<span class="icon-vehiculo-edit"></span>
																			</div>
																			
																			<div class="form-group">
																						<label for="imagen-edit" class="text-primary error-imagen-edit">Imagen: </label>
																						<input type="file" name="imagen-edit" id="imagen-edit" accept="image/*">
																						<span class="txt-foto-actual text-primary" value="">Ver imagen actual</span>
																			</div>

																		<label for="paterno" class="text-primary">Estatus: </label>
																		<div class="checkbox checkbox-activ check-w">
																					 <span class="text-primary">Activo</span>
																					<div class="txt-activ">
																					  <input name="inp-check_edit" id="inp-check_edit" type="checkbox" value="">
																					</div>
																		</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-act-vehiculo" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="confirm-act-vehiculo" class="btn btn-primary" data-dismiss="modal" >
																		Actualizar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
          <!--  Modal para eliminar vehiculo  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar vehículo
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este vehículo?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-vehiculo" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-vehiculo" class="btn btn-primary" data-dismiss="modal" >
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
							url: "/admin/listavehiculos",
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

							"aaSorting": [[ 0, "desc" ]], 
								
								fnCreatedRow : function (nRow, aData, iDataIndex) {
												$(nRow).attr('id', "fila_"+l[i].id);

							},

							"sPaginationType": "simple_numbers",
								"sPaginationType": "bootstrap",



			}); //End data


											tabla_a.fnClearTable();

													for(var i = 0; i < l.length; i++) {
																				tabla_a.fnAddData([
																															'<span class="text-info txt-escondido">Código: </span><span class="hidden">'+l[i].created_at+'</span>'+l[i].codigo+' '+l[i].descripcion_codigo,
																															'<span class="text-info txt-escondido">Tipo: </span>'+l[i].descripcion,
																					          '<span class="text-info txt-escondido">Transmisión: </span><span class="t_'+l[i].transmision+'"></span>',
																															'<span id="'+l[i].id+'" class="foto-p">Ver foto</span>',
																					          '<span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+l[i].estatus+'"></span>',
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar vehículo">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar vehículo">'+
																					            '<span class="glyphicon glyphicon-remove"></span>'+
																					          '</button>',
																													]);


																					} //End for
								
								
															  $('.estatus_null').text('Inactivo');
																	$('.estatus_null').addClass('text-danger');
																	$('.estatus_1').text('Activo');
																	$('.estatus_1').addClass('text-success');
								
																	$('.t_1').text('Automático');
																	$('.t_1').addClass('text-info');
																	$('.t_2').text('Estándard');
																	$('.t_2').addClass('text-primary');

															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	
	
			$(document).on('click','.fancy > li, a',function(){	
						$('.estatus_null').text('Inactivo');
						$('.estatus_null').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
				  $('.t_1').text('Automático');
						$('.t_1').addClass('text-info');
						$('.t_2').text('Estándard');
						$('.t_2').addClass('text-primary');
			});        


			$(document).on('keyup', '#list_p__filter', function(){
						$('.estatus_null').text('Inactivo');
						$('.estatus_null').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
						$('.t_1').text('Automático');
						$('.t_1').addClass('text-info');
						$('.t_2').text('Estándard');
						$('.t_2').addClass('text-primary');

			});

			$(document).on('click', '#list_p__length', function(){
						$('.estatus_null').text('Inactivo');
						$('.estatus_null').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
				  $('.t_1').text('Automático');
						$('.t_1').addClass('text-info');
						$('.t_2').text('Estándard');
						$('.t_2').addClass('text-primary');
			});
	
	
	//Foto del vehiculo ----------------------------------------------
			$(document).on('click', '.foto-p', function(){
						id = $(this).attr('id');
				
						$.ajax({
								url:  "/admin/verfotovehiculo",
								type: "GET",
								data:{id: id},
							
							beforeSend: function(){
            //$('#gif-agente_'+id).show();
								    $('#foto-v').prop('src', '/img/cargando2.gif');
        },
							
							
								success: function(f){
						      $('#foto-v').prop('src', '/img/vehiculos/'+f.foto);
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
				
						$('#modal-foto-vehiculo').modal({
							show: 'false',
						});
			});
	
	
	
		//Agregar vehículo -------------
	 $(document).on('click', '#agregar-vehiculo', function(){
			$('#modal-add-vehiculo').modal({
      show: 'false',
    });
			
			//Listamos los codigoa
						//Listamos los codigos
					 $.ajax({
								url:  "/admin/selectcodigos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#tipo');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.codigos){

																			option += '<option value="'+p.codigos[datos].id+'">'+p.codigos[datos].codigo+'  '+p.codigos[datos].descripcion_codigo+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					})
			
			
		});
	
		 $(document).on('click', '#inp-check', function(){
			   //$(this).attr('value', '1');
						if($('#inp-check').prop("checked") == true){
						   $(this).attr('value', '1');
							} else {
									$(this).attr('value', '');
							}
		});
	
	$('#tipo').on('change',function(){
		id = $(this).val();
		$('#tipo_c').attr('value', id);
	});
	
	$(document).on('click', '#add-vehiculo', function(){
		
		tabla_a = $('#listar_');
		
		f = $(".formulario");
	//información del formulario
		formData = new FormData(f[0]);
		
		
		$.ajax({
								url:  "/admin/agregarvehiculo",
								type: "POST",
								data: formData,
								//necesario para subir archivos via ajax
								cache: false,
								contentType: false,
								processData: false, 
								success: function(p){
										nueva_fila = '<tr id="fila_'+p.id+'">'+
												'<td><span class="text-info txt-escondido">Código: </span><span class="hidden">'+p.created_at+'</span>'+p.codigo+' '+p.descripcion_codigo+'</td>'+
											 '<td><span class="text-info txt-escondido">Tipo: </span>'+p.descripcion+'</td>'+
											 '<td><span class="text-info txt-escondido">Transmisión: </span><span class="t_'+p.transmision+'"></span></td>'+
												'<td><span id="'+p.id+'" class="foto-p">Ver foto</span></td>'+
											'<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+p.estatus+'"></span></td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar vehículo">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar vehículo">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
									
									$('.estatus_null').text('Inactivo');
									$('.estatus_null').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
									
									$('.t_1').text('Automático');
									$('.t_1').addClass('text-info');
									$('.t_2').text('Estándard');
									$('.t_2').addClass('text-primary');
										
										alertas("success","Vehículo "+p.descripcion+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
									$('#tipo').html('');
									$('#transmision').prop('selectedIndex',0);
									$('#inp-check').prop("checked", false);
									$("#imagen").val('');
									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-vehiculo', function(){
			 $('#nombre').val('');
			 $('#tipo').html('');
				//$('#transmision').val('');
				$('#transmision').prop('selectedIndex',0);
				$('#inp-check').prop("checked", false);
			 $('.error-vehiculo').removeClass('has-error has-feedback');
				$('.icon-vehiculo').removeClass('glyphicon glyphicon-remove form-control-feedback');
			 $('.error-imagen').removeClass('error-add-image');
			 $('#imagen').removeClass('error-add-image');
			 $("#imagen").val('');
			
    $('.error-tipo').removeClass('has-error has-feedback');
				$('.icon-tipo').removeClass('glyphicon glyphicon-remove form-control-feedback');

     $('.error-transmision').removeClass('has-error has-feedback');
					$('.icon-transmision').removeClass('glyphicon glyphicon-remove form-control-feedback');

			  
	});
	
	//Eliminar vehiculo
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-vehiculo').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-vehiculo', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminarvehiculo",
								type: "GET",
								data:{id: id},
								success: function(d){
									if(d.p == 'Existe'){
										 alertas("danger","El vehículo "+d.vehiculo.descripcion+" esta en uso.");
									} else {
										alertas("success","Vehículo eliminado correctamente");
										 $('#fila_'+d).remove();
									}
									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
//Editar vehiculo
	$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
					$('.txt-foto-actual').attr('value', id);		
		   $('#id_vehiculo').attr('value', id);		
		
					$.ajax({
								url:  "/admin/editarvehiculo",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#nombre_edit').val(e.descripcion);
									$('#tipo-edit').val(e.tipo);
									
								 select = $('#transmision-edit');
									option = "";
									
									if(e.transmision == 2){
										
													option += '<option value="1">Automático</option>'+
																							'<option value="2" selected>Estándard</option>';

													select.append(option);
										 
									} else {
										
										   option += '<option value="1" selected>Automático</option>'+
																							'<option value="2">Estándard</option>';

													select.append(option);
									}
									
									
									
									
									activo = e.estatus;
									if(activo == 1){
											$('#inp-check_edit').prop("checked", true);
											$('#inp-check_edit').attr('value', '1');
									} else {
											$('#inp-check_edit').prop("checked", false);
											$('#inp-check_edit').attr('value', '');
									}
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		
						//Listamos los codigos
					 $.ajax({
								url:  "/admin/selectcodigoseditdetallevehiculo",
								type: "GET",
					   data:{id: id},
							success: function(e){
								     	option = "";
              s = $('#tipo-edit-select');
															console.log(e.x_a[0].codigo);
								       console.log(e.x_a[0].descripcion_codigo);
															option += '<option value="'+e.x_a[0].id+'" selected>'+e.x_a[0].codigo+' '+e.x_a[0].descripcion_codigo+'</option>';
              for(datos in e.codigos){

																			option += '<option value="'+e.codigos[datos].id+'">'+e.codigos[datos].codigo +' '+e.codigos[datos].descripcion_codigo +'</option>';
																}

																s.append(option);
								
															//Campo escondido ---
														$('#tipo_c_edit').attr('value', e.x_a[0].id);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-vehiculo').modal({
       show: 'false',
     });
		
				 $('#confirm-act-vehiculo').attr('value', id);
				
	});
	
	  //Foto del vehiculo al editar
			$(document).on('click', '.txt-foto-actual', function(){
						id = $(this).attr('value');
				
						$.ajax({
								url:  "/admin/verfotovehiculo",
								type: "GET",
								data:{id: id},
							
							beforeSend: function(){
            //$('#gif-agente_'+id).show();
								    $('#foto-v').prop('src', '/img/cargando2.gif');
        },
							
							
								success: function(f){
						      $('#foto-v').prop('src', '/img/vehiculos/'+f.foto);
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
				
						$('#modal-foto-vehiculo').modal({
							show: 'false',
						});
			});
	
	
//Actualizar vehiculo
$(document).on('click', '#inp-check_edit', function(){
		if($(this).prop("checked") == true){
				$('#inp-check_edit').attr('value', '1');
		} else {
				$('#inp-check_edit').attr('value', '0');
		}
});
	

	$('#tipo-edit-select').on('change',function(){
		id = $(this).val();
		$('#tipo_c_edit').attr('value', id);
	});
	
	
	$(document).on('click', '#confirm-act-vehiculo', function(){
			  f = $(".formulario_editar");
			
				//información del formulario
					formData = new FormData(f[0]);
		
					$.ajax({
								url:  "/admin/actualizarvehiculo",
								type: "POST",
								data: formData,
								cache: false,
								contentType: false,
								processData: false, 
								success: function(p){
										
									//Bolvemos a construir la fila
        $('#fila_'+id).replaceWith('<tr id="fila_'+p.id+'">'+
                '<td><span class="text-info txt-escondido">Codigó: </span><span class="hidden">'+p.created_at+'</span>'+p.codigo+' '+p.descripcion_codigo+'</td>'+
																'<td><span class="text-info txt-escondido">Tipo: </span>'+p.descripcion+'</td>'+
																'<td><span class="text-info txt-escondido">Transmisión: </span><span class="t_'+p.transmision+'"></span></td>'+
                '<td><span id="'+p.id+'" class="foto-p">Ver foto</span></td>'+
																'<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+p.estatus+'"></span></td>'+
               '<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar vehículo">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
													'</td>'+
													'<td>'+
															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar vehículo">'+
																				'<span class="glyphicon glyphicon-remove"></span>'+
																'</button>'+
													'</td>'+
											'</tr>');
										
									
										alertas("success","Vehículo actualizado correctamente");
									
									$('#transmision-edit').html('');
									$("#imagen-edit").val('');
									$('#tipo-edit-select').html('');
									
									$('.estatus_null').text('Inactivo');
									$('.estatus_null').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
									
									$('.t_1').text('Automático');
									$('.t_1').addClass('text-info');
									$('.t_2').text('Estándard');
									$('.t_2').addClass('text-primary');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
		
				
	});
	
	$(document).on('click', '#no-act-vehiculo', function(){
		$('.error-vehiculo-edit').removeClass('has-error has-feedback');
		$('.icon-vehiculo-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
		$('#imagen-edit').removeClass('error-add-image');
		$('.error-imagen-edit').removeClass('error-add-image');
		$("#imagen-edit").val('');
		$('.error-tipo-edit').removeClass('has-error has-feedback');
		$('.icon-tipo-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
		$('#transmision-edit').html('');
		$('#tipo-edit-select').html('');
	});
	
	
/*****************
	------Validaciones para los vehiculos
	******************************************************************/
	  $("#add-vehiculo").click(function () {

      if($("#nombre").val().length == 0){
														$('.error-vehiculo').addClass('has-error has-feedback');
							       $('.icon-vehiculo').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-vehiculo").click(function () {

      if($("#tipo").val() == 0){
														$('.error-tipo').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#add-vehiculo").click(function () {

      if($("#transmision").val() == 0){
														$('.error-transmision').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	  $("#add-vehiculo").click(function () {

      if($("#imagen").val() == ''){
														$('.error-imagen').addClass('error-add-image');
							       $('#imagen').addClass('error-add-image');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre").focus(function () {
      $('.error-vehiculo').removeClass('has-error has-feedback');
						$('.icon-vehiculo').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#tipo").change(function () {
      $('.error-tipo').removeClass('has-error has-feedback');
});
	
	$("#transmision").change(function () {
      $('.error-transmision').removeClass('has-error has-feedback');
});
	
	$("#imagen").click(function () {
      $('.error-imagen').removeClass('error-add-image');
		    $('#imagen').removeClass('error-add-image');
});
	
	
	//Validaciones al actualizar vehiculo
	  $("#confirm-act-vehiculo").click(function () {

      if($("#nombre_edit").val().length == 0){
														$('.error-vehiculo-edit').addClass('has-error has-feedback');
							       $('.icon-vehiculo-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
		  $("#confirm-act-vehiculo").click(function () {

      if($("#imagen-edit").val() == ''){
														$('.error-imagen-edit').addClass('error-add-image');
							       $('#imagen-edit').addClass('error-add-image');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre_edit").focus(function () {
      $('.error-vehiculo-edit').removeClass('has-error has-feedback');
						$('.icon-vehiculo-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	$("#imagen-edit").click(function () {
      $('.error-imagen-edit').removeClass('error-add-image');
		    $('#imagen-edit').removeClass('error-add-image');
});

	
	
	//Funciones para los alerts
function alertas(tipo,mensaje){
    $('.top-right').notify({
      message: {text: decodeURIComponent(mensaje)},
      type: tipo
    }).show();
  }
	
	
	
</script>

@stop