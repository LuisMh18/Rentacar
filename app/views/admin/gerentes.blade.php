@extends('layout/plantilla')

@section('title')
<title>Admin | Gerentes</title>
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
		
			$('.titular_seccion').text('Catálogo Gerentes');
		
	});
	
</script>


@section('content')

<div class="seccion_tabla">
<div class="agregar">
	<button id="agregar-gerente" class="btn btn-primary" title="Agregar gerente">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo">
			<thead class="thead-tabla">
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Email</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
    
 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
    

    <!--  Modal para agregar gerente  -->
<div id="modal-add-gerente" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar gerente
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																<div class="datos1 error-nombre">
																			<div class="form-group">
																						<label for="nombre" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre" id="nombre" class="form-control" >
																						<span class="icon-nombre"></span>
																			</div>


																		<div class="form-group error-paterno">
																						<label for="paterno" class="text-primary">Apellido Paterno: </label>
																						<input type="text" name="paterno" id="paterno" class="form-control" >
																						<span class="icon-paterno"></span>
																		</div>
																</div>
																
														<div class="datos2">
																	<div class="form-group">
																					<label for="materno" class="text-primary">Apellido Materno: </label>
																					<input type="text" name="materno" id="materno" class="form-control" >
																	</div>

																	<div class="form-group error-email">
																					<label for="email" class="text-primary">Email: </label>
																					<input type="email" name="email" id="email" class="form-control" >
																					<span class="icon-email"></span>
																	</div>
													 </div>
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-gerente" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-gerente" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
        <!--  Modal para eliminar gerente  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar gerente
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este gerente?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-gerente" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-gerente" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
     <!--  Modal para editar gerente  -->
<div id="modal-edit-gerente" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar gerente
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																<div class="datos1">
																			<div class="form-group error-nombre-edit">
																						<label for="nombre_edit" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre_edit" id="nombre_edit" class="form-control" >
																						<span class="icon-nombre-edit"></span>
																			</div>


																		<div class="form-group error-paterno-edit">
																						<label for="paterno_edit" class="text-primary">Apellido Paterno: </label>
																						<input type="text" name="paterno_edit" id="paterno_edit" class="form-control" >
																						<span class="icon-paterno-edit"></span>
																		</div>
																</div>
																
														<div class="datos2">
																	<div class="form-group">
																					<label for="materno_edit" class="text-primary">Apellido Materno: </label>
																					<input type="text" name="materno_edit" id="materno_edit" class="form-control" >
																	</div>

																	<div class="form-group error-email-edit">
																					<label for="email_edit" class="text-primary">Email: </label>
																					<input type="email" name="email_edit" id="email_edit" class="form-control" >
																					<span class="icon-email-edit"></span>
																	</div>
													 </div>
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-gerente" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="confirm-act-gerente" class="btn btn-primary" data-dismiss="modal" >
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
							url: "/admin/listagerentes",
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
																															'<span class="hidden">'+l[i].created_at+'</span>'+l[i].nombre,
																															l[i].paterno,
																															'<span class="ma_'+l[i].materno+'">'+l[i].materno+'</span>',
																															l[i].email,
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar gerente">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar gerente">'+
																					            '<span class="glyphicon glyphicon-remove"></span>'+
																					          '</button>',
																													]);


																					} //End for
								
								
																	$('.ma_').text('No asignado');
																	$('.ma_').addClass('text-danger');

															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	
			$(document).on('click','.fancy > li, a',function(){	
						$('.ma_').text('No asignado');
						$('.ma_').addClass('text-danger');
			});        


			$(document).on('keyup', '#list_p__filter', function(){
						$('.ma_').text('No asignado');
						$('.ma_').addClass('text-danger');

			});

			$(document).on('click', '#list_p__length', function(){
						$('.ma_').text('No asignado');
						$('.ma_').addClass('text-danger');
			});
	
		//Agregar gerente -------------
	 $(document).on('click', '#agregar-gerente', function(){
			$('#modal-add-gerente').modal({
      show: 'false',
    });
		});
	
	$(document).on('click', '#add-gerente', function(){
			nombre = $('#nombre').val();
			paterno = $('#paterno').val();
			materno = $('#materno').val();
			email = $('#email').val();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregargerente",
								type: "POST",
								data:{nombre: nombre, paterno: paterno, materno: materno, email: email},
								success: function(g){
									if(g == 'Existe'){
										alertas("danger","El email ya existe.");
									} else {
										
										nueva_fila = '<tr id="fila_'+g.id+'">'+
												'<td><span class="hidden">'+g.created_at+'</span>'+g.nombre+'</td>'+
												'<td>'+g.paterno+'</td>'+
												'<td><span class="materno ma_'+g.materno+'">'+g.materno+'</td>'+
												'<td>'+g.email+'</td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+g.id+'" title="Editar gerente">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+g.id+'" title="Eliminar gerente">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
										
										alertas("success","Gerente "+g.nombre+" "+g.paterno+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
									$('#paterno').val('');
									$('#materno').val('');
									$('#email').val('');
										
										
									}//END ELSE 
									
									
									
									
										$('.ma_').text('No asignado');
										$('.ma_').addClass('text-danger');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-gerente', function(){
			 $('#nombre').val('');
			 $('#paterno').val('');
		  $('#materno').val('');
		  $('#email').val('');
	});
	
	//Eliminar gerente
	$(document).on('click', '.eliminar-btn', function(){
			  id = $(this).val();
					
					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-gerente').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-gerente', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminargerente",
								type: "GET",
								data:{id: id},
								success: function(g){

									if(g.g == 'Existe'){
										 alertas("danger","El gerente "+g.gerente.nombre+" "+g.gerente.paterno+" esta en uso.");
									} else {
										alertas("success","Gerente eliminado correctamente");
										 $('#fila_'+g).remove();
									}
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
//Editar agente
	$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
		
					$.ajax({
								url:  "/admin/editaragerente",
								type: "GET",
								data:{id: id},
								success: function(g){
									$('#nombre_edit').val(g.nombre);
									$('#paterno_edit').val(g.paterno);
									$('#materno_edit').val(g.materno);
									$('#email_edit').val(g.email);
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-gerente').modal({
       show: 'false',
     });
		
				 $('#confirm-act-gerente').attr('value', id);
				
	});
	
//Actualizar agente
	$(document).on('click', '#confirm-act-gerente', function(){
			  id = $(this).attr('value');
					nombre = $('#nombre_edit').val();
					paterno = $('#paterno_edit').val();
					materno = $('#materno_edit').val();
					email = $('#email_edit').val();
		
					$.ajax({
								url:  "/admin/actualizaragerente",
								type: "GET",
								data:{id: id, nombre: nombre, paterno: paterno, materno: materno, email: email},
								success: function(g){
									if(g == 'Existe'){
										alertas("danger","El email ya existe.");
										return false;
									} else {
										
									//Bolvemos a construir la fila
        $('#fila_'+id).replaceWith('<tr id="fila_'+g.id+'">'+
                '<td><span class="hidden">'+g.created_at+'</span>'+g.nombre+'</td>'+
                '<td>'+g.paterno+'</td>'+
                '<td><span class="materno ma_'+g.materno+'">'+g.materno+'</td>'+
                '<td>'+g.email+'</td>'+
                '<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+g.id+'" title="Editar gerente">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
														'</td>'+
														'<td>'+
																'<button class="btn btn-sm btn-danger eliminar-btn" value="'+g.id+'" title="Eliminar gerente">'+
																					'<span class="glyphicon glyphicon-remove"></span>'+
																	'</button>'+
														'</td>'+
												'</tr>');
										
										
									}//END ELSE 
									
										alertas("success","Gerente actualizado correctamente");
									
									$('.ma_').text('No asignado');
									$('.ma_').addClass('text-danger');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
		
				
	});
	
	
	/*****************
	------Validaciones al agregar un nuevo gerente
	******************************************************************/
	  $("#add-gerente").click(function () {

      if($("#nombre").val().length == 0){
														$('.error-nombre').addClass('has-error has-feedback');
							       $('.icon-nombre').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-gerente").click(function () {

      if($("#paterno").val().length == 0){
														$('.error-paterno').addClass('has-error has-feedback');
							       $('.icon-paterno').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-gerente").click(function () {

      if($("#email").val().length == 0){
														$('.error-email').addClass('has-error has-feedback');
							       $('.icon-email').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
//Foco----
	$("#nombre").focus(function () {
      $('.error-nombre').removeClass('has-error has-feedback');
						$('.icon-nombre').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#paterno").focus(function () {
      $('.error-paterno').removeClass('has-error has-feedback');
						$('.icon-paterno').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#email").focus(function () {
      $('.error-email').removeClass('has-error has-feedback');
						$('.icon-email').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
/*****************
	------Validaciones al editar gerente
	******************************************************************/
	  $("#confirm-act-gerente").click(function () {

      if($("#nombre_edit").val().length == 0){
														$('.error-nombre-edit').addClass('has-error has-feedback');
							       $('.icon-nombre-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#confirm-act-gerente").click(function () {

      if($("#paterno_edit").val().length == 0){
														$('.error-paterno-edit').addClass('has-error has-feedback');
							       $('.icon-paterno-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#confirm-act-gerente").click(function () {

      if($("#email_edit").val().length == 0){
														$('.error-email-edit').addClass('has-error has-feedback');
							       $('.icon-email-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
//Foco----
	$("#nombre_edit").focus(function () {
      $('.error-nombre-edit').removeClass('has-error has-feedback');
						$('.icon-nombre-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#paterno_edit").focus(function () {
      $('.error-paterno-edit').removeClass('has-error has-feedback');
						$('.icon-paterno-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#email_edit").focus(function () {
      $('.error-email-edit').removeClass('has-error has-feedback');
						$('.icon-email-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
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