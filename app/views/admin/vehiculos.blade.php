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

<div class="seccion_tabla">
<div class="agregar">
	<button id="agregar-vehiculo" class="btn btn-primary" title="Agregar vehículo">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo">
			<thead class="thead-tabla">
				<tr>
					<th>Descripción</th>
					<th>Foto</th>
					<th>Estatus</th>
					<th>Editar</th>
					<th>Eliminar</th>
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
															
																			<div class="form-group error-vehiculo">
																						<label for="nombre" class="text-primary">Descripción: </label>
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
																			
																			<div class="form-group error-vehiculo-edit">
																						<label for="nombre_edit" class="text-primary">Descripción: </label>
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
																<button id="no-act-vehiculo" type="button" class="btn btn-danger" data-dismiss="modal">
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
																															'<span class="hidden">'+l[i].created_at+'</span>'+l[i].descripcion,
																															'<span id="'+l[i].id+'" class="foto-p">Ver foto</span>',
																					          '<span class="estatus_'+l[i].estatus+'"></span>',
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
			});        


			$(document).on('keyup', '#list_p__filter', function(){
						$('.estatus_null').text('Inactivo');
						$('.estatus_null').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');

			});

			$(document).on('click', '#list_p__length', function(){
						$('.estatus_null').text('Inactivo');
						$('.estatus_null').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
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
		});
	
		 $(document).on('click', '#inp-check', function(){
			   //$(this).attr('value', '1');
						if($('#inp-check').prop("checked") == true){
						   $(this).attr('value', '1');
							} else {
									$(this).attr('value', '');
							}
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
												'<td><span class="hidden">'+p.created_at+'</span>'+p.descripcion+'</td>'+
												'<td><span id="'+p.id+'" class="foto-p">Ver foto</span></td>'+
											'<td><span class="estatus_'+p.estatus+'"></span></td>'+
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
										
										alertas("success","Vehículo "+p.descripcion+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
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
				$('#inp-check').prop("checked", false);
			 $('.error-vehiculo').removeClass('has-error has-feedback');
				$('.icon-vehiculo').removeClass('glyphicon glyphicon-remove form-control-feedback');
			 $('.error-imagen').removeClass('error-add-image');
			 $('#imagen').removeClass('error-add-image');
			 $("#imagen").val('');
			  
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
                '<td><span class="hidden">'+p.created_at+'</span>'+p.descripcion+'</td>'+
                '<td><span id="'+p.id+'" class="foto-p">Ver foto</span></td>'+
																'<td><span class="estatus_'+p.estatus+'"></span></td>'+
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
									
									$('.estatus_null').text('Inactivo');
									$('.estatus_null').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
									
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
		    $('#imagen-edit').addClass('error-add-image');
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