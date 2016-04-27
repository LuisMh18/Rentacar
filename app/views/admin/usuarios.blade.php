@extends('layout/plantilla')

@section('title')
<title>Admin | Usuarios</title>
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
		
			$('.titular_seccion').text('Catálogo Usuarios');
		
	});
	
</script>


@section('content')

<div class="seccion_tabla">
<div class="agregar">
	<button id="agregar-usuario" class="btn btn-primary" title="Agregar usuario">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo">
			<thead class="thead-tabla">
				<tr>
					<th>Usuario</th>
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
    

    <!--  Modal para agregar usuario  -->
				<div id="modal-add-usuario" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
                Agregar usuario
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																<div class="datos1">
																			<div class="form-group error-usuario">
																						<label for="usuario" class="text-primary">Usuario: </label>
																						<input type="text" name="usuario" id="usuario" class="form-control" >
																						<span class="icon-usuario"></span>
																			</div>
																		
																		<div class="form-group error-email">
																						<label for="email" class="text-primary">Email: </label>
																						<input type="email" name="email" id="email" class="form-control" >
																						<span class="icon-email"></span>
																			</div>
																</div>
																
														<div class="datos2">
																	 <div class="form-group error-pass1">
																						<label for="pass1" class="text-primary">Contraseña: </label>
																						<input type="password" name="pass1" id="pass1" class="form-control" >
																						<span class="icon-pass1"></span>
																			</div>

																	  <div class="form-group error-pass2">
																						<label for="pass2" class="text-primary">Repetir contraseña: </label>
																						<input type="password" name="pass2" id="pass2" class="form-control" >
																						<span class="icon-pass2"></span>
																						<span class="hidden-error-p error-p">Las contraseñas no coinciden.</span>
																			</div>
													 </div>
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-usuario" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-usuario" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
        <!--  Modal para eliminar usuario  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar usuario
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este usuario?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-usuario" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-usuario" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
     <!--  Modal para editar usuario  -->
<div id="modal-edit-codigo" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar usuario
            </h4>
          </div>
          <div class="modal-body body-modal">

             <form class="form-modal" action="">
															
																			<div class="form-group error-usuario-edit">
																						<label for="usuario_edit" class="text-primary">Usuario: </label>
																						<input type="text" name="usuario_edit" id="usuario_edit" class="form-control" >
																						<span class="icon-usuario-edit"></span>
																			</div>
																		
																		<div class="form-group error-email-edit">
																						<label for="email_edit" class="text-primary">Email: </label>
																						<input type="email" name="email_edit" id="email_edit" class="form-control" >
																						<span class="icon-email-edit"></span>
																			</div>
																
																	 <div class="form-group error-pass0-edit">
																						<label for="pass0_edit" class="text-primary">Contraseña actual: </label>
																						<input type="password" name="pass0_edit" id="pass0_edit" class="form-control" >
																						<span class="icon-pass0-edit"></span>
																						<span class="hidden-error-p-actual error-p-actual">Tu contraseña actual es incorrecta.</span>
																			</div>
																			
																			<div class="form-group error-pass1-edit">
																						<label for="pass1_edit" class="text-primary">Nueva contraseña: </label>
																						<input type="password" name="pass1_edit" id="pass1_edit" class="form-control" >
																						<span class="icon-pass1-edit"></span>
																			</div>

																	  <div class="form-group error-pass2-edit">
																						<label for="pass2_edit" class="text-primary">Repite la nueva contraseña: </label>
																						<input type="password" name="pass2_edit" id="pass2_edit" class="form-control" >
																						<span class="icon-pass2-edit"></span>
																						<span class="hidden-error-p error-p">Las contraseñas no coinciden.</span>
																			</div>
																			
																			<!-- Campo escondido -->
													 					<input type="text" id="edit_user" value="" class="hidden">
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-act-usuario" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="confirm-act-usuario" class="confirm-act-disabled btn btn-primary" data-dismiss="modal" >
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
							url: "/admin/listausuarios",
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
																															'<span class="hidden">'+l[i].created_at+'</span>'+l[i].usuario,
																															l[i].email,
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar código">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar código">'+
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
	
	
	
		//Agregar usuario -------------
	 $(document).on('click', '#agregar-usuario', function(){
			
			$('#modal-add-usuario').modal({
      show: 'false',
    });
			
		});
	
	
	//Consulta para verificar las contraseñas
	  $('#pass2').keyup( function(){
    if($('#pass2').val()!= ""){
         pass1 = $('#pass1').val();
					    pass2 = $('#pass2').val();

        $.ajax({
            type: "POST",
            url: "/admin/verificarpass",
             data: {pass1: pass1, pass2: pass2 },
            success: function( u ){
													
													  	 setTimeout(function() {
																		
																					if (u == "Diferentes") {
																													$('.error-p').removeClass('hidden-error-p');
																													$('.error-pass2').addClass('has-error has-feedback');
																													$('.icon-pass2').addClass('glyphicon glyphicon-remove form-control-feedback');

																								} else {
																										$('.error-p').addClass('hidden-error-p');
																										$('.error-pass2').removeClass('has-error has-feedback');
																										$('.icon-pass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
																				}
																	 },2000);
													
                    

            }
        });
     }
});
	
	
	
	$(document).on('click', '#add-usuario', function(){
			usuario = $('#usuario').val();
		 email = $('#email').val();
		 pass1 = $('#pass1').val().trim();
		 pass2 = $('#pass2').val().trim();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregarusuario",
								type: "POST",
								data:{usuario: usuario, email: email, pass1: pass1, pass2: pass2},
								success: function(p){
									if(p == 'Diferentes'){
										alertas("danger","Las contraseñas no coinciden.");
									} else {
										
												nueva_fila = '<tr id="fila_'+p.id+'">'+
														'<td><span class="hidden">'+p.created_at+'</span>'+p.usuario+'</td>'+
														'<td>'+p.email+'</td>'+
														'<td>'+
																'<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar usuario">'+
																			'<span class="glyphicon glyphicon-edit"></span>'+
																'</button>'+
													'</td>'+
													'<td>'+
															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar usuario">'+
																				'<span class="glyphicon glyphicon-remove"></span>'+
																'</button>'+
													'</td>'+
											'</tr>';

											tabla_a.prepend(nueva_fila);

												alertas("success","Usuario "+p.usuario+" agregado correctamente.");

												//Limpiamos los campos
											$('#usuario').val('');
											$('#email').val('');
											$('#pass1').val('');
										 $('#pass2').val('');
										
									} //END ELSE

									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-usuario', function(){
			 $('#usuario').val('');
				$('#email').val('');
				$('#pass1').val('');
				$('#pass2').val('');
				
			$('.error-usuario').removeClass('has-error has-feedback');
			$('.icon-usuario').removeClass('glyphicon glyphicon-remove form-control-feedback');

			$('.error-email').removeClass('has-error has-feedback');
			$('.icon-email').removeClass('glyphicon glyphicon-remove form-control-feedback');

			$('.error-pass1').removeClass('has-error has-feedback');
			$('.icon-pass1').removeClass('glyphicon glyphicon-remove form-control-feedback');

			$('.error-pass2').removeClass('has-error has-feedback');
			$('.icon-pass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
				//pass2
			 $('.error-p').addClass('hidden-error-p');
				$('.error-pass2').removeClass('has-error has-feedback');
				$('.icon-pass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
		
	});
	
	//Eliminar usuario
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-usuario').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-usuario', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminarusuario",
								type: "GET",
								data:{id: id},
								success: function(d){
									if(d.p == 'Iguales'){
										 alertas("danger","El usuario "+d.usuario.usuario+" está en sesión.");
									} else {
										alertas("success","Usuario eliminado correctamente");
										 $('#fila_'+d).remove();
									}
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
//Editar usuario
	$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
		
					user_id = $('#edit_user').attr('value', id);
		
					$.ajax({
								url:  "/admin/editarusuario",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#usuario_edit').val(e.usuario);
									$('#email_edit').val(e.email);
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-codigo').modal({
       show: 'false',
     });
		
				 $('#confirm-act-usuario').attr('value', id);
				
	});
	
//comprobar la contraseña actual
	  $('#pass0_edit').keyup( function(){
    if($('#pass0_edit').val()!= ""){
         pass = $('#pass0_edit').val().trim();
									
									user_id = $('#edit_user').attr('value');
        $.ajax({
            type: "POST",
            url: "/admin/verificarpassactual",
             data: {pass: pass, user_id: user_id },
            success: function( u ){
													  	 setTimeout(function() {
																		
																					if (u == "Diferentes") {
																													$('.error-p-actual').removeClass('hidden-error-p-actual');
																													$('.error-pass0-edit').addClass('has-error has-feedback');
																													$('.icon-pass0-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
																													$('.confirm-act-disabled').attr('id', '');
																						       $('.confirm-act-disabled').attr('data-dismiss', '');
																								} else {
																										$('.error-p-actual').addClass('hidden-error-p-actual');
																										$('.error-pass0-edit').removeClass('has-error has-feedback');
																										$('.icon-pass0-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
																									 $('.confirm-act-disabled').attr('id', 'confirm-act-usuario');
																						    $('.confirm-act-disabled').attr('data-dismiss', 'modal');
																				}
																	 },2000);
													
                    

            }
        });
     }
});
	
	//Verificamos las contraseñas
	  $('#pass2_edit').keyup( function(){
    if($('#pass2_edit').val()!= ""){
         pass1 = $('#pass1_edit').val().trim();
					    pass2 = $('#pass2_edit').val().trim();

        $.ajax({
            type: "POST",
            url: "/admin/verificarpass",
             data: {pass1: pass1, pass2: pass2 },
            success: function( u ){
													
													  	 setTimeout(function() {
																		
																					if (u == "Diferentes") {
																													$('.error-p').removeClass('hidden-error-p');
																													$('.error-pass2-edit').addClass('has-error has-feedback');
																													$('.icon-pass2-edit').addClass('glyphicon glyphicon-remove form-control-feedback');

																								} else {
																										$('.error-p').addClass('hidden-error-p');
																										$('.error-pass2-edit').removeClass('has-error has-feedback');
																										$('.icon-pass2-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
																				}
																	 },2000);
													
                    

            }
        });
     }
});
	
	
	$(document).on('click', '#confirm-act-usuario', function(){
			  id = $(this).attr('value');
					usuario = $('#usuario_edit').val();
					email = $('#email_edit').val();
					pass1 = $('#pass1_edit').val();
		   pass2 = $('#pass2_edit').val();
		
					$.ajax({
								url:  "/admin/actualizarusuario",
								type: "GET",
								data:{id: id, usuario: usuario, email: email, pass1: pass1, pass2: pass2},
								success: function(p){
										
									if(p == 'Diferentes'){
										alertas("danger","Las contraseñas no coinciden.");
									} else {
										
									//Bolvemos a construir la fila
        $('#fila_'+id).replaceWith('<tr id="fila_'+p.id+'">'+
                '<td><span class="hidden">'+p.created_at+'</span>'+p.usuario+'</td>'+
																'<td>'+p.email+'</td>'+
               '<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+p.id+'" title="Editar usuario">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
													'</td>'+
													'<td>'+
															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+p.id+'" title="Eliminar usuario">'+
																				'<span class="glyphicon glyphicon-remove"></span>'+
																'</button>'+
													'</td>'+
											'</tr>');
										
									
										alertas("success","Usuario actualizado correctamente");
										
										//Limpiamos los campos
										$('#pass0_edit').val('');
										$('#pass1_edit').val('');
		        $('#pass2_edit').val('');
										
									}
									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
	});
	

	$(document).on('click', '#no-act-usuario', function(){
		
						$('#pass0_edit').val('');
						$('#pass1_edit').val('');
						$('#pass2_edit').val('');
		
		
      $('.error-usuario-edit').removeClass('has-error has-feedback');
						$('.icon-usuario-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
      $('.error-email-edit').removeClass('has-error has-feedback');
						$('.icon-email-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
      $('.error-pass1-edit').removeClass('has-error has-feedback');
						$('.icon-pass1-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');	
		
						//pas actual
						$('.error-p-actual').addClass('hidden-error-p-actual');
						$('.error-pass0-edit').removeClass('has-error has-feedback');
						$('.icon-pass0-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
		
						//pass2
      $('.error-p').addClass('hidden-error-p');
					 $('.error-pass2-edit').removeClass('has-error has-feedback');
				 	$('.icon-pass2-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
		
	});
	
	

	
	
			/*****************
	------Validaciones al agregar usuario
	******************************************************************/

	  $("#add-usuario").click(function () {

      if($("#usuario").val().length == 0){
														$('.error-usuario').addClass('has-error has-feedback');
							       $('.icon-usuario').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
				
	$("#add-usuario").click(function () {
		
      if($("#email").val().length == 0){
														$('.error-email').addClass('has-error has-feedback');
							       $('.icon-email').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
$("#add-usuario").click(function () {
      if($("#pass1").val().length == 0){
														$('.error-pass1').addClass('has-error has-feedback');
							       $('.icon-pass1').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
$("#add-usuario").click(function () {
      if($("#pass2").val().length == 0){
														$('.error-pass2').addClass('has-error has-feedback');
							       $('.icon-pass2').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	//FOCO ---------
	$("#usuario").focus(function () {
      $('.error-usuario').removeClass('has-error has-feedback');
						$('.icon-usuario').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#email").focus(function () {
      $('.error-email').removeClass('has-error has-feedback');
						$('.icon-email').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#pass1").focus(function () {
      $('.error-pass1').removeClass('has-error has-feedback');
						$('.icon-pass1').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#pass2").focus(function () {
      $('.error-pass2').removeClass('has-error has-feedback');
						$('.icon-pass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	

			/*****************
	------Validaciones al editar usuario
	******************************************************************/

	  $("#confirm-act-usuario").click(function () {

      if($("#usuario_edit").val().length == 0){
														$('.error-usuario-edit').addClass('has-error has-feedback');
							       $('.icon-usuario-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
				
	$("#confirm-act-usuario").click(function () {
		
      if($("#email_edit").val().length == 0){
														$('.error-email-edit').addClass('has-error has-feedback');
							       $('.icon-email-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
$("#confirm-act-usuario").click(function () {
      if($("#pass0_edit").val().length == 0){
														$('.error-pass0-edit').addClass('has-error has-feedback');
							       $('.icon-pass0-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
$("#confirm-act-usuario").click(function () {
      if($("#pass1_edit").val().length == 0){
														$('.error-pass1-edit').addClass('has-error has-feedback');
							       $('.icon-pass1-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
$("#confirm-act-usuario").click(function () {
      if($("#pass2_edit").val().length == 0){
														$('.error-pass2-edit').addClass('has-error has-feedback');
							       $('.icon-pass2-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	//FOCO ---------
	$("#usuario_edit").focus(function () {
      $('.error-usuario-edit').removeClass('has-error has-feedback');
						$('.icon-usuario-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#email_edit").focus(function () {
      $('.error-email-edit').removeClass('has-error has-feedback');
						$('.icon-email-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#pass0_edit").focus(function () {
     $('.error-pass0-edit').removeClass('has-error has-feedback');
					$('.icon-pass0-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#pass1_edit").focus(function () {
      $('.error-pass1-edit').removeClass('has-error has-feedback');
						$('.icon-pass1-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#pass2_edit").focus(function () {
      $('.error-pass2-edit').removeClass('has-error has-feedback');
						$('.icon-pass2-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
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