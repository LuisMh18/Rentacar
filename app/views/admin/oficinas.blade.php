@extends('layout/plantilla')

@section('title')
<title>Admin | Oficinas</title>
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
		
			$('.titular_seccion').text('Catálogo Oficinas');
		
	}); 
	
</script>


@section('content')

<div class="seccion_tabla">
<div class="agregar">
	<button id="agregar-oficina" class="btn btn-primary" title="Agregar oficina">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo">
			<thead class="thead-tabla">
				<tr>
					<th>Nombre</th>
					<th>Plaza</th>
					<th>Clave</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
    
 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
    

    <!--  Modal para agregar oficinas  -->
<div id="modal-add-oficina" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar oficina
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-oficina">
																						<label for="nombre" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre" id="nombre" class="form-control" >
																						<span class="icon-oficina"></span>
																			</div>
																			
																		<div class="form-group datos-plaza">
																			<label for="seccionedit" class="text-primary">Plaza: </label>
																							<select class="form-control" id="select_plaza"></select>
																	</div>
																	
																	<div class="form-group error-clave">
																						<label for="clave" class="text-primary">Clave: </label>
																						<input type="text" name="clave" id="clave" class="form-control" >
																						<span class="icon-clave"></span>
																			</div>
																	

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-oficina" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-oficina" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
 
    
        <!--  Modal para eliminar oficina  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar oficina
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar esta oficina?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-oficina" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-oficina" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
     <!--  Modal para editar oficina -->
<div id="modal-edit-oficina" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar oficina
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-oficina-edit">
																						<label for="nombre-edit" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre-edit" id="nombre-edit" class="form-control" >
																						<span class="icon-oficina-edit"></span>
																			</div>
																			
																		<div class="form-group">
																			<label for="seccionedit" class="text-primary">Plaza: </label>
																							<select class="form-control" id="select_plaza_edit"></select>
																	</div>
																	
																	<div class="form-group error-clave-edit">
																						<label for="clave-edit" class="text-primary">Clave: </label>
																						<input type="text" name="clave-edit" id="clave-edit" class="form-control" >
																						<span class="icon-clave-edit"></span>
																			</div>
																	

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-oficina-edit" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-oficina-edit" class="btn btn-primary" data-dismiss="modal" >
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
							url: "/admin/listaoficinas",
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
														     id_plaza = l[i].plaza_id;
														
																				tabla_a.fnAddData([
																															'<span class="hidden">'+l[i].created_at+'</span>'+l[i].nombre,
																															'<span id="plaza_'+l[i].plaza_id+'"></span>'+l[i].nombre_plaza,
																															l[i].clave,
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar oficina">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar oficina">'+
																					            '<span class="glyphicon glyphicon-remove"></span>'+
																					          '</button>',
																													]);


																					} //End for
								

															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	
			
	
	
	
		//Agregar oficina -------------
	 $(document).on('click', '#agregar-oficina', function(){
			$('#modal-add-oficina').modal({
      show: 'false',
    });
			
				
			//Listamos las plazas
			 $.ajax({
								url:  "/admin/selectplazas",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select_plaza');
              for(datos in p.plazas){

																			option += '<option value="'+p.plazas[datos].id+'">'+p.plazas[datos].nombre_plaza+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			
		});
	
	$(document).on('click', '#add-oficina', function(){
			nombre = $('#nombre').val();
		 plaza  = $('#select_plaza option:selected').val();
		 clave = $('#clave').val();
	
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregaroficina",
								type: "POST",
								data:{nombre: nombre, plaza: plaza, clave: clave},
								success: function(p){

									nueva_fila = '<tr id="fila_'+p.id+'">'+
												'<td><span class="hidden">'+p.created_at+'</span>'+p.nombre+'</td>'+
												'<td>'+p.nombre_plaza+'</td>'+
												'<td>'+p.clave+'</td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar oficina">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar oficina">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
									
										
										alertas("success","Oficina "+p.nombre+" agregada correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
				     $('#select_plaza').html('');
			     	$('#clave').val('');
									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
				
					
				
	});
	
		$(document).on('click', '#no-add-oficina', function(){
			 $('#nombre').val('');
				$('#select_plaza').html('');
				$('#clave').val('');
			 $('.error-oficina').removeClass('has-error has-feedback');
				$('.icon-oficina').removeClass('glyphicon glyphicon-remove form-control-feedback');

    $('.error-clave').removeClass('has-error has-feedback');
				$('.icon-clave').removeClass('glyphicon glyphicon-remove form-control-feedback');
	});
	
	
	
	//Eliminar oficina
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-oficina').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-oficina', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminaroficina",
								type: "GET",
								data:{id: id},
								success: function(d){
									if(d.p == 'Existe'){
										 alertas("danger","La oficina  esta en uso.");
									} else {
										alertas("success","Oficina eliminada correctamente");
										 $('#fila_'+d).remove();
									}
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
//Editar oficina
	$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
		
					$.ajax({
								url:  "/admin/editaroficina",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#nombre-edit').val(e.nombre);
									$('#clave-edit').val(e.nombre);
									$('#select_plaza_edit');
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
				//Listamos las plazas
			 $.ajax({
								url:  "/admin/selecteditplazasoficina",
								type: "GET",
							 data:{id: id},
								success: function(p){
								     	option = "";
              s = $('#select_plaza_edit');
														option += '<option value="'+p.p_a[0].id+'">'+p.p_a[0].nombre_plaza+'</option>';
              for(datos in p.plazas){

																			option += '<option value="'+p.plazas[datos].id+'">'+p.plazas[datos].nombre_plaza+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
					
					$('#modal-edit-oficina').modal({
       show: 'false',
     });
		
				 $('#add-oficina-edit').attr('value', id);
				
	});
	
//Actualizar oficina
	$(document).on('click', '#add-oficina-edit', function(){
			  id = $(this).attr('value');
		   plaza  = $('#select_plaza_edit option:selected').val();
					nombre = $('#nombre-edit').val();
					clave = $('#clave-edit').val();
		
					$.ajax({
								url:  "/admin/actualizaroficina",
								type: "GET",
								data:{id: id, plaza: plaza, nombre: nombre, clave: clave},
								success: function(p){
									
																		
									//Bolvemos a construir la fila
        $('#fila_'+id).replaceWith('<tr id="fila_'+p.id+'">'+
                '<td><span class="hidden">'+p.created_at+'</span>'+p.nombre+'</td>'+
                '<td><span id="plaza_'+p.plaza_id+'"></span>'+p.nombre_plaza+'</td>'+
																'<td>'+p.clave+'</td>'+
               '<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar oficina">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
													'</td>'+
													'<td>'+
															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar oficina">'+
																				'<span class="glyphicon glyphicon-remove"></span>'+
																'</button>'+
													'</td>'+
											'</tr>');
										
									
										alertas("success","Oficina actualizada correctamente");
										
										$('#nombre-edit').val('');
										$('#clave-edit').val('');
										$('#select_plaza_edit').html('');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
		
				
	});
	
	$(document).on('click', '#no-add-oficina-edit', function(){
				$('#nombre-edit').val('');
				$('#clave-edit').val('');
				$('#select_plaza_edit').html('');
		  $('.error-oficina-edit').removeClass('has-error has-feedback');
				$('.icon-oficina-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
		  $('.error-clave-edit').removeClass('has-error has-feedback');
				$('.icon-clave-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
	});
	
	
	//Funciones para los alerts
function alertas(tipo,mensaje){
    $('.top-right').notify({
      message: {text: decodeURIComponent(mensaje)},
      type: tipo
    }).show();
  }
	
	
		/*****************
	------Validaciones para las oficinas
	******************************************************************/
	  $("#add-oficina").click(function () {

      if($("#nombre").val().length == 0){
														$('.error-oficina').addClass('has-error has-feedback');
							       $('.icon-oficina').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-oficina").click(function () {

      if($("#clave").val().length == 0){
														$('.error-clave').addClass('has-error has-feedback');
							       $('.icon-clave').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre").focus(function () {
      $('.error-oficina').removeClass('has-error has-feedback');
						$('.icon-oficina').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#clave").focus(function () {
      $('.error-clave').removeClass('has-error has-feedback');
						$('.icon-clave').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	

		/*****************
	------Validaciones al editar las oficinas
	******************************************************************/
	  $("#add-oficina-edit").click(function () {

      if($("#nombre-edit").val().length == 0){
														$('.error-oficina-edit').addClass('has-error has-feedback');
							       $('.icon-oficina-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-oficina-edit").click(function () {

      if($("#clave-edit").val().length == 0){
														$('.error-clave-edit').addClass('has-error has-feedback');
							       $('.icon-clave-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre-edit").focus(function () {
      $('.error-oficina-edit').removeClass('has-error has-feedback');
						$('.icon-oficina-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#clave-edit").focus(function () {
      $('.error-clave-edit').removeClass('has-error has-feedback');
						$('.icon-clave-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	


	
	
	
</script>

@stop