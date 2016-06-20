@extends('layout/plantilla')

@section('title')
<title>Admin | Grupos</title>
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
		
			$('.titular_seccion').text('Catálogo Grupos');
		
	});
	
</script>


@section('content')

<div class="seccion_tabla seccion_sucursal">
<div class="agregar">
	<button id="agregar-grupo" class="btn btn-primary" title="Agregar grupo">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo table-striped">
			<thead class="thead-tabla">
				<tr>
					<th class="cabecero">Nombre</th>
					<th class="cabecero">Estatus</th>
					<th class="cabecero">Editar</th>
					<th class="cabecero">Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
    
 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
    

    <!--  Modal para agregar grupo  -->
<div id="modal-add-grupo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar grupo
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-nombre">
																						<label for="nombre" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre" id="nombre" class="form-control" >
																						<span class="icon-nombre"></span>	
																			</div>

																		<label for="estatus" class="text-primary">Estatus: </label>
																		<div class="checkbox checkbox-activ check-w">
																					 <span class="text-primary">Activo</span>
																					<div class="txt-activ">
																					  <input id="inp-check" type="checkbox" value="">
																					</div>
																		</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-grupo" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-grupo" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
        <!--  Modal para eliminar grupo  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar grupo
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este grupo?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-grupo" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-grupo" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
     <!--  Modal para editar grupo  -->
<div id="modal-edit-grupo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar grupo
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-nombre-edit">
																						<label for="nombre_edit" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre_edit" id="nombre_edit" class="form-control" >
																						<span class="icon-nombre-edit"></span>	
																			</div>

																		<label for="paterno" class="text-primary">Estatus: </label>
																		<div class="checkbox checkbox-activ check-w">
																					 <span class="text-primary">Activo</span>
																					<div class="txt-activ">
																					  <input id="inp-check_edit" type="checkbox" value="">
																					</div>
																		</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-act-grupo" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="confirm-act-grupo" class="btn btn-primary" data-dismiss="modal" >
																		Actualizar
															</span>
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
							url: "/admin/listagrupos",
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

							'iDisplayLength': 100,

							"sPaginationType": "simple_numbers",
								"sPaginationType": "bootstrap",



			}); //End data


											tabla_a.fnClearTable();

													for(var i = 0; i < l.length; i++) {
																				tabla_a.fnAddData([
																															'<span class="text-info txt-escondido">Nombre: </span><span class="hidden">'+l[i].created_at+'</span>'+l[i].descripcion_grupo,
																															'<span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+l[i].estatus+'"></span>',
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar grupo">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar grupo">'+
																					            '<span class="glyphicon glyphicon-remove"></span>'+
																					          '</button>',
																													]);


																					} //End for
								
								
															  $('.estatus_0').text('Inactivo');
																	$('.estatus_0').addClass('text-danger');
																	$('.estatus_1').text('Activo');
																	$('.estatus_1').addClass('text-success');

															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');

															llamarpaginaciondatatable();



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	
	
			$(document).on('click','.cargarpaginacion',function(){	
						$('.fancy a').addClass('cargarpaginacion');
						$('.estatus_0').text('Inactivo');
						$('.estatus_0').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
			});        


			$(document).on('keyup', '#list_p__filter', function(){
						$('.estatus_0').text('Inactivo');
						$('.estatus_0').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');

			});

			$(document).on('click', '#list_p__length', function(){
						$('.estatus_0').text('Inactivo');
						$('.estatus_0').addClass('text-danger');
						$('.estatus_1').text('Activo');
						$('.estatus_1').addClass('text-success');
			});
	
	
	
		//Agregar grupo -------------
	 $(document).on('click', '#agregar-grupo', function(){
			$('#modal-add-grupo').modal({
      show: 'false',
    });
		});
	
	$(document).on('click', '#add-grupo', function(){
			nombre = $('#nombre').val();
	
		if($('#inp-check').prop("checked") == true){
					activo = 1;
		} else {
				activo = 0;
		}
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregargrupo",
								type: "POST",
								data:{nombre: nombre, activo: activo},
								success: function(p){
									
										nueva_fila = '<tr id="fila_'+p.id+'">'+
												'<td><span class="text-info txt-escondido">Nombre: </span><span class="hidden">'+p.created_at+'</span>'+p.descripcion_grupo+'</td>'+
												'<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+p.estatus+'"></span></td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar grupo">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar grupo">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
									
									$('.estatus_0').text('Inactivo');
									$('.estatus_0').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
										
										alertas("success","Grupo "+p.descripcion_grupo+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
									$('#inp-check').prop("checked", false);

									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-grupo', function(){
			 $('#nombre').val('');
				$('#inp-check').prop("checked", false);
			 $('.error-nombre').removeClass('has-error has-feedback');
				$('.icon-nombre').removeClass('glyphicon glyphicon-remove form-control-feedback');
	});
	
	//Eliminar grupo
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-grupo').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-grupo', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminargrupo",
								type: "GET",
								data:{id: id},
								success: function(d){
									if(d.p == 'Existe'){
										 alertas("danger","El grupo "+d.grupo.descripcion_grupo+" esta en uso.");
									} else {
										alertas("success","Grupo eliminado correctamente");
										 $('#fila_'+d).remove();
									}
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
//Editar grupo
	$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
		
					$.ajax({
								url:  "/admin/editargrupo",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#nombre_edit').val(e.descripcion_grupo);

									activo = e.estatus;
									if(activo == 1){
											$('#inp-check_edit').prop("checked", true);
											$('#inp-check_edit').attr('value', '1');
									} else {
											$('#inp-check_edit').prop("checked", false);
											$('#inp-check_edit').attr('value', '0');
									}
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-grupo').modal({
       show: 'false',
     });
		
				 $('#confirm-act-grupo').attr('value', id);
				
	});
	
//Actualizar plaza
$(document).on('click', '#inp-check_edit', function(){
		if($(this).prop("checked") == true){
				$('#inp-check_edit').attr('value', '1');
		} else {
				$('#inp-check_edit').attr('value', '0');
		}
});
	
	$(document).on('click', '#confirm-act-grupo', function(){
			  id = $(this).attr('value');
					nombre = $('#nombre_edit').val();
					estatus = $('#inp-check_edit').val();
		
					$.ajax({
								url:  "/admin/actualizargrupo",
								type: "GET",
								data:{id: id, nombre: nombre, estatus: estatus},
								success: function(p){
										
									//Bolvemos a construir la fila
        $('#fila_'+id).replaceWith('<tr id="fila_'+p.id+'">'+
                '<td><span class="text-info txt-escondido">Nombre: </span><span class="hidden">'+p.created_at+'</span>'+p.descripcion_grupo+'</td>'+
                '<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+p.estatus+'"></span></td>'+
               '<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar grupo">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
													'</td>'+
													'<td>'+
															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar grupo">'+
																				'<span class="glyphicon glyphicon-remove"></span>'+
																'</button>'+
													'</td>'+
											'</tr>');
										
									
										alertas("success","Plaza actualizada correctamente");
									
									$('.estatus_0').text('Inactivo');
									$('.estatus_0').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
		
				
	});
	
			$(document).on('click', '#no-act-grupo', function(){
			 $('.error-nombre-edit').removeClass('has-error has-feedback');
				$('.icon-nombre-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
	});
	
	
	/*****************
	------Validaciones para los grupos
	******************************************************************/
	  $("#add-grupo").click(function () {

      if($("#nombre").val().length == 0){
														$('.error-nombre').addClass('has-error has-feedback');
							       $('.icon-nombre').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre").focus(function () {
      $('.error-nombre').removeClass('has-error has-feedback');
						$('.icon-nombre').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	//Validaciones al actualizar grupo
	  $("#confirm-act-grupo").click(function () {

      if($("#nombre_edit").val().length == 0){
														$('.error-nombre-edit').addClass('has-error has-feedback');
							       $('.icon-nombre-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre_edit").focus(function () {
      $('.error-nombre-edit').removeClass('has-error has-feedback');
						$('.icon-nombre-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	//Funciones para los alerts
function alertas(tipo,mensaje){
    $('.top-right').notify({
      message: {text: decodeURIComponent(mensaje)},
      type: tipo
    }).show();
  }
	

	function llamarpaginaciondatatable(){
  $('.fancy a').addClass('cargarpaginacion');
}
	
	
</script>

@stop
