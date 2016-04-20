@extends('layout/plantilla')

@section('title')
<title>Admin | Sucursales</title>
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
		
			$('.titular_seccion').text('Catálogo Sucursales');
		
	});
	
</script>


@section('content')

<div class="seccion_tabla">
<div class="agregar">
	<button id="agregar-plaza" class="btn btn-primary" title="Agregar sucursal">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo">
			<thead class="thead-tabla">
				<tr>
					<th>Sucursal</th>
					<th>Gerente</th>
					<th>Plaza</th>
					<th>Dirección 1</th>
					<th>Dirección 2</th>
					<th>Colonia</th>
					<th>Estado</th>
					<th>Municipio / Delegación</th>
					<th>Referencias</th>
					<th>CP</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
    
 <!--Alertas-->
<div class="notifications top-right" data-html="true"></div>
    

    <!--  Modal para agregar sucursal  -->
<div id="modal-add-sucursal" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog dialog-sucursal">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar Sucursal
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																<div class="datos1-s">
																		
																			<div class="form-group error-sucursal">
																						<label for="sucursal" class="text-primary">Sucursal: </label>
																						<input type="text" name="sucursal" id="sucursal" class="form-control" >
																						<span class="icon-sucursal"></span>
																			</div>


																		<div class="form-group error-gerente">
																			<label for="seccionedit" class="text-primary">Gerente: </label>
																			<div class="agrupar">
																							<select class="form-control" id="select_gerente">
																						</select>
																						<button id="ad-nuevo-g" class="btn-add-n btn btn-primary btn-xs" title="Agregar nuevo gerente">
																							<span class="glyphicon glyphicon-plus"></span>
																						</button>
																			 </div>
																	</div>
																	
																	<div class="form-group error-plaza">
																			<label for="seccionedit" class="text-primary">Plaza: </label>
																			 <div class="agrupar">
																							<select class="form-control" id="select_plaza">
																						</select>
																						<button id="ad-nueva-p" class="btn-add-n btn btn-primary btn-xs" title="Agregar nueva plaza">
																							<span class="glyphicon glyphicon-plus"></span>
																						</button>
																			 </div>
																	</div>
																	
													</div>
															
													<div class="datos1-s">
																		
																			<div class="form-group error-direccion1">
																						<label for="direccion1" class="text-primary">Dirección 1: </label>
																						<input type="text" name="direccion1" id="direccion1" class="form-control" >
																						<span class="icon-direccion1"></span>
																			</div>
																			
																			<div class="form-group">
																						<label for="direccion2" class="text-primary">Dirección 2: </label>
																						<input type="text" name="direccion2" id="direccion2" class="form-control" >
																			</div>
																			
																			<div class="form-group error-colonia">
																						<label for="colonia" class="text-primary">Colonia: </label>
																						<input type="text" name="colonia" id="colonia" class="form-control" >
																						<span class="icon-colonia"></span>
																			</div>
																	
													</div>
															
														<div class="datos1-s">
																		
																			<div class="form-group error-estado">
																						<label for="estado" class="text-primary">Estado: </label>
																						<input type="text" name="estado" id="estado" class="form-control" >
																						<span class="icon-estado"></span>
																			</div>
																			
																			<div class="form-group error-municipio">
																						<label for="municipio" class="text-primary">Municipio / delegación: </label>
																						<input type="text" name="municipio" id="municipio" class="form-control" >
																						<span class="icon-municipio"></span>
																			</div>
																			
																			<div class="form-group error-cp">
																						<label for="cp" class="text-primary">CP: </label>
																						<input type="text" name="cp" id="cp" class="form-control" >
																						<span class="icon-cp"></span>
																			</div>
																	
													</div>
															
																<div class="form-group form-textarea">
																			<label for="referencia" class="text-primary">Referencias: </label>
																			<textarea id="referencia" class="form-control"></textarea>
																</div>
																
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-sucursal" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-sucursal" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
       <!--  Modal para editar sucursal  -->
<div id="modal-edit-sucursal" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog dialog-sucursal">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar Sucursal
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																<div class="datos1-s">
																		
																			<div class="form-group error-sucursal-edit">
																						<label for="sucursal_edit" class="text-primary">Sucursal: </label>
																						<input type="text" name="sucursal_edit" id="sucursal_edit" class="form-control" >
																						<span class="icon-sucursal-edit"></span>
																			</div>


																		<div class="form-group error-gerente-edit">
																			<label for="seccionedit" class="text-primary">Gerente: </label>
																			<div class="agrupar">
																							<select class="form-control" id="select_gerente_edit">
																						</select>
																						<button id="ad-nuevo-g-edit" class="btn-add-n btn btn-primary btn-xs" title="Agregar nuevo gerente">
																							<span class="glyphicon glyphicon-plus"></span>
																						</button>
																			 </div>
																	</div>
																	
																	<div class="form-group error-plaza-edit">
																			<label for="seccionedit" class="text-primary">Plaza: </label>
																			 <div class="agrupar">
																							<select class="form-control" id="select_plaza_edit">
																						</select>
																						<button id="ad-nueva-p-edit" class="btn-add-n btn btn-primary btn-xs" title="Agregar nueva plaza">
																							<span class="glyphicon glyphicon-plus"></span>
																						</button>
																			 </div>
																	</div>
																	
													</div>
															
													<div class="datos1-s">
																		
																			<div class="form-group error-direccion1-edit">
																						<label for="direccion1_edit" class="text-primary">Dirección 1: </label>
																						<input type="text" name="direccion1_edit" id="direccion1_edit" class="form-control" >
																						<span class="icon-direccion1-edit"></span>
																			</div>
																			
																			<div class="form-group">
																						<label for="direccion2_edit" class="text-primary">Dirección 2: </label>
																						<input type="text" name="direccion2_edit" id="direccion2_edit" class="form-control" >
																			</div>
																			
																			<div class="form-group error-colonia-edit">
																						<label for="colonia_edit" class="text-primary">Colonia: </label>
																						<input type="text" name="colonia_edit" id="colonia_edit" class="form-control" >
																						<span class="icon-colonia-edit"></span>
																			</div>
																	
													</div>
															
														<div class="datos1-s">
																		
																			<div class="form-group error-estado-edit">
																						<label for="estado_edit" class="text-primary">Estado: </label>
																						<input type="text" name="estado_edit" id="estado_edit" class="form-control" >
																						<span class="icon-estado-edit"></span>
																			</div>
																			
																			<div class="form-group error-municipio-edit">
																						<label for="municipio_edit" class="text-primary">Municipio / delegación: </label>
																						<input type="text" name="municipio_edit" id="municipio_edit" class="form-control" >
																						<span class="icon-municipio-edit"></span>
																			</div>
																			
																			<div class="form-group error-cp-edit">
																						<label for="cp_edit" class="text-primary">CP: </label>
																						<input type="text" name="cp_edit" id="cp_edit" class="form-control" >
																						<span class="icon-cp-edit"></span>
																			</div>
																	
													</div>
															
																<div class="form-group form-textarea">
																			<label for="referencia_edit" class="text-primary">Referencias: </label>
																			<textarea id="referencia_edit" class="form-control"></textarea>
																</div>
																
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-sucursal" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-sucursal_edit" class="btn btn-primary" data-dismiss="modal" >
																		Actualizar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
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
															
																<div class="datos1">
																			<div class="form-group error-nombre">
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
    
        <!--  Modal para agregar plazas  -->
<div id="modal-add-plaza" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar plaza
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-nombre_plaza">
																						<label for="nombre_plaza" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre_plaza" id="nombre_plaza" class="form-control" >
																						<span class="icon-nombre_plaza"></span>
																			</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-plaza" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-plaza" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
    
        <!--  Modal para eliminar sucursal  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar sucursal
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar esta sucursal?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-sucursal" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-sucursal" class="btn btn-primary" data-dismiss="modal" >
																		Si
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    

    
          <!--  Modal para agregar gerente ala hora de editar sucursal-->
<div id="modal-add-gerente-edit" class="modal fade" data-keyboard="false" data-backdrop="static">
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
																					<input type="email" name="emai_edit" id="email_edit" class="form-control" >
																					<span class="icon-email-edit"></span>
																	</div>
													 </div>
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-gerente-edit" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-gerente-edit" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
															</span>
													</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
           <!--  Modal para agregar plaza a la hora de editar sucursal  -->
<div id="modal-add-plaza-edit" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar plaza
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
																			<div class="form-group error-plaza-edit">
																						<label for="nombre_plaza_edit" class="text-primary">Nombre: </label>
																						<input type="text" name="nombre_plaza_edit" id="nombre_plaza_edit" class="form-control" >
																						<span class="icon-plaza-edit"></span>
																			</div>

													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-plaza-edit" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-plaza-edit" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
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
							url: "/admin/listarsucursales",
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
																															'<span class="hidden">'+l[i].created_at+'</span>'+l[i].nombre_sucursal,
																															l[i].nombre,
																															l[i].nombre_plaza,
																															l[i].direccion1,
																															'<span class="d_'+l[i].direccion2+'"></span>'+l[i].direccion2,
																															l[i].colonia,
																															l[i].estado,
																															l[i].municipio_delegacion,
																															'<span class="r_'+l[i].referencia+'"></span>'+l[i].referencia,
																															l[i].cp,
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar sucursal">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar sucursal">'+
																					            '<span class="glyphicon glyphicon-remove"></span>'+
																					          '</button>',
																													]);


																					} //End for
								
								
															  $('.d_').text('No hay');
																	$('.d_').addClass('text-danger');
																	$('.r_').text('No hay');
																	$('.r_').addClass('text-danger');

															$('.dataTables_paginate .prev a').text('Anterior');
															$('.dataTables_paginate .next a').text('Siguiente');



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	

			
	
	
			$(document).on('click','.fancy > li, a',function(){	
						$('.d_').text('No hay');
						$('.d_').addClass('text-danger');
						$('.r_').text('No hay');
						$('.r_').addClass('text-danger');
			});        


			$(document).on('keyup', '#list_p__filter', function(){
						$('.d_').text('No hay');
						$('.d_').addClass('text-danger');
						$('.r_').text('No hay');
						$('.r_').addClass('text-danger');

			});

			$(document).on('click', '#list_p__length', function(){
						$('.d_').text('No hay');
						$('.d_').addClass('text-danger');
						$('.r_').text('No hay');
						$('.r_').addClass('text-danger');
			});
	
	
	
		//Agregar sucursal -------------
	 $(document).on('click', '#agregar-plaza', function(){
			$('#modal-add-sucursal').modal({
      show: 'false',
    });
			
		//Listamos los gerentes
			 $.ajax({
								url:  "/admin/selectgerentes",
								type: "GET",
								success: function(g){
									
								     	option = "";
              s = $('#select_gerente');
																		
																			option += '<option value="0">-- Seleccione --</option>';
              for(datos in g.gerente){

																			option += '<option value="'+g.gerente[datos].id+'">'+g.gerente[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			//Listamos las plazas
			 $.ajax({
								url:  "/admin/selectplazas",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select_plaza');
									
																		option += '<option value="0">-- Seleccione --</option>';
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
	
	$(document).on('click', '#add-sucursal', function(){
			sucursal = $('#sucursal').val();
	 	select_gerente = $('#select_gerente').val();
		 select_plaza = $('#select_plaza').val();
		 direccion1 = $('#direccion1').val();
		 direccion2 = $('#direccion2').val();
		 colonia = $('#colonia').val();
		 estado = $('#estado').val();
		 municipio = $('#municipio').val();
		 cp = $('#cp').val();
		 referencia = $('#referencia').val();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregarsucursal",
								type: "POST",
								data:{sucursal: sucursal, select_gerente: select_gerente, select_plaza: select_plaza, direccion1: direccion1, direccion2: direccion2, colonia: colonia, estado: estado, municipio: municipio, cp: cp, referencia: referencia},
								success: function(s){
									
										nueva_fila = '<tr id="fila_'+s.id+'">'+
												'<td><span class="hidden">'+s.created_at+'</span>'+s.nombre_sucursal+'</td>'+
												'<td>'+s.nombre+'</td>'+
												'<td>'+s.nombre_plaza+'</td>'+
												'<td>'+s.direccion1+'</td>'+
												'<td><span class="d_'+s.direccion2+'">'+s.direccion2+'</td>'+
												'<td>'+s.colonia+'</td>'+
												'<td>'+s.estado+'</td>'+
												'<td>'+s.municipio_delegacion+'</td>'+
												'<td><span class="r_'+s.referencia+'"></span>'+s.referencia+'</td>'+
												'<td>'+s.cp+'</td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+s.id+'" title="Editar sucursal">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+s.id+'" title="Eliminar sucursal">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
										
										alertas("success","Sucursal "+s.nombre_sucursal+" agregada correctamente.");
										
									
								$('.d_').text('No hay');
								$('.d_').addClass('text-danger');
								$('.r_').text('No hay');
								$('.r_').addClass('text-danger');
									
								//Limpiamos los campos
						  $('#sucursal').val('');
						  $('#select_gerente').html('');
						  $('#select_plaza').html('');
						  $('#direccion1').val('');
						  $('#direccion2').val('');
						  $('#colonia').val('');
						  $('#estado').val('');
						  $('#municipio').val('');
						  $('#cp').val('');
						  $('#referencia').val('');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-sucursal', function(){
			   $('#sucursal').val('');
						$('#select_gerente').html('');
						$('#select_plaza').html('');
						$('#direccion1').val('');
						$('#direccion2').val('');
						$('#colonia').val('');
						$('#estado').val('');
						$('#municipio').val('');
						$('#cp').val('');
						$('#referencia').val('');
	});
	
	//Eliminar sucursal
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-sucursal').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-sucursal', function(){
			id = $(this).attr('value');

			 $.ajax({
								url:  "/admin/eliminarsucursal",
								type: "GET",
								data:{id: id},
								success: function(d){

										alertas("success","Sucursal eliminada correctamente");
										 $('#fila_'+d).remove();
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
	//Agregar nuevo gerente
	$(document).on('click', '#ad-nuevo-g', function(){
			
		$('#modal-add-gerente').modal({
			show:'false,'
		});
		
		return false;
			 
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
										
										    option = "";
              s = $('#select_gerente');

													option += '<option value="'+g.id+'" selected>'+g.nombre+'</option>';

																s.append(option);
										
										alertas("success","Gerente "+g.nombre+" "+g.paterno+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre').val('');
									$('#paterno').val('');
									$('#materno').val('');
									$('#email').val('');
										
										
									}//END ELSE 
									
									
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
	
	
	//Agregar nueva plaza
		 $(document).on('click', '#ad-nueva-p', function(){
			$('#modal-add-plaza').modal({
      show: 'false',
    });
				return false;
		});
	
	$(document).on('click', '#add-plaza', function(){
			nombre = $('#nombre_plaza').val();
			activo = 1;

		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregarplaza",
								type: "POST",
								data:{nombre: nombre, activo: activo},
								success: function(p){
									
									option = "";
         s = $('#select_plaza');

										option += '<option value="'+p.id+'" selected>'+p.nombre_plaza+'</option>';

										s.append(option);
									
										
										alertas("success","Plaza "+p.nombre_plaza+" agregada correctamente.");
										
										//Limpiamos los campos
									$('#nombre_plaza').val('');
									$('#inp-check').prop("checked", false)

									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-plaza', function(){
			 $('#nombre_plaza').val('');
				$('#inp-check').prop("checked", false)
	});
	
	
	
	//--Editar sucursal
		$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
			  //alert(id);
		
					$.ajax({
								url:  "/admin/editarasucursal",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#sucursal_edit').val(e.nombre_sucursal);
									$('#direccion1_edit').val(e.direccion1);
									$('#direccion2_edit').val(e.direccion2);
									$('#colonia_edit').val(e.colonia);
									$('#estado_edit').val(e.estado);
									$('#municipio_edit').val(e.municipio_delegacion);
									$('#cp_edit').val(e.cp);
									$('#referencia_edit').val(e.referencia);
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-sucursal').modal({
       show: 'false',
     });
		
				 $('#add-sucursal_edit').attr('value', id);
			
					
				//Listamos los gerentes
			 $.ajax({
								url:  "/admin/selecteditgerentes",
								type: "GET",
					   data:{id: id},
								success: function(g){
								     	option = "";
              s = $('#select_gerente_edit');
									
														option += '<option value="'+g.g_a[0].id+'">'+g.g_a[0].nombre+'</option>';
              for(datos in g.gerente){

																			option += '<option value="'+g.gerente[datos].id+'">'+g.gerente[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			//Listamos las plazas
			 $.ajax({
								url:  "/admin/selecteditplazas",
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
			
			//Limpiamos los selects
			$('#select_gerente_edit').html('');
			$('#select_plaza_edit').html('');
			
				
	});
	
	
	//Actualizar sucursal--------
	$(document).on('click', '#add-sucursal_edit', function(){
		 id = $(this).attr('value');
			sucursal = $('#sucursal_edit').val();
	 	select_gerente = $('#select_gerente_edit').val();
		 select_plaza = $('#select_plaza_edit').val();
		 direccion1 = $('#direccion1_edit').val();
		 direccion2 = $('#direccion2_edit').val();
		 colonia = $('#colonia_edit').val();
		 estado = $('#estado_edit').val();
		 municipio = $('#municipio_edit').val();
		 cp = $('#cp_edit').val();
		 referencia = $('#referencia_edit').val();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/actualizarsucursal",
								type: "GET",
								data:{id: id, sucursal: sucursal, select_gerente: select_gerente, select_plaza: select_plaza, direccion1: direccion1, direccion2: direccion2, colonia: colonia, estado: estado, municipio: municipio, cp: cp, referencia: referencia},
								success: function(s){
									
									$('#fila_'+id).replaceWith('<tr id="fila_'+s.id+'">'+
               '<td><span class="hidden">'+s.created_at+'</span>'+s.nombre_sucursal+'</td>'+
												'<td>'+s.nombre+'</td>'+
												'<td>'+s.nombre_plaza+'</td>'+
												'<td>'+s.direccion1+'</td>'+
												'<td><span class="d_'+s.direccion2+'">'+s.direccion2+'</td>'+
												'<td>'+s.colonia+'</td>'+
												'<td>'+s.estado+'</td>'+
												'<td>'+s.municipio_delegacion+'</td>'+
												'<td><span class="r_'+s.referencia+'"></span>'+s.referencia+'</td>'+
												'<td>'+s.cp+'</td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+s.id+'" title="Editar sucursal">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+s.id+'" title="Eliminar sucursal">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>');
										
										
										alertas("success","Sucursal "+s.nombre_sucursal+" actualizada correctamente.");
										
									
								$('.d_').text('No hay');
								$('.d_').addClass('text-danger');
								$('.r_').text('No hay');
								$('.r_').addClass('text-danger');
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
	
	
	
		//Agregar nuevo gerente a la hora de ditar sucursal
	$(document).on('click', '#ad-nuevo-g-edit', function(){
			
		$('#modal-add-gerente-edit').modal({
			show:'false,'
		});
		
		return false;
			 
	});
	
	
		$(document).on('click', '#add-gerente-edit', function(){
			nombre = $('#nombre_edit').val();
			paterno = $('#paterno_edit').val();
			materno = $('#materno_edit').val();
			email = $('#email_edit').val();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregargerente",
								type: "POST",
								data:{nombre: nombre, paterno: paterno, materno: materno, email: email},
								success: function(g){

									if(g == 'Existe'){
										alertas("danger","El email ya existe.");
									} else {
										
										    option = "";
              s = $('#select_gerente_edit');

													option += '<option value="'+g.id+'" selected>'+g.nombre+'</option>';

																s.append(option);
										
										alertas("success","Gerente "+g.nombre+" "+g.paterno+" agregado correctamente.");
										
										//Limpiamos los campos
									$('#nombre_edit').val('');
									$('#paterno_edit').val('');
									$('#materno_edit').val('');
									$('#email_edit').val('');
										
										
									}//END ELSE 
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
	
	$(document).on('click', '#no-add-gerente-edit', function(){
			 $('#nombre_edit').val('');
				$('#paterno_edit').val('');
				$('#materno_edit').val('');
				$('#email_edit').val('');
	});
	
	
	
		//Agregar nueva plaza a la hora de editar sucursal
		 $(document).on('click', '#ad-nueva-p-edit', function(){
			$('#modal-add-plaza-edit').modal({
      show: 'false',
    });
				return false;
		});
	
	$(document).on('click', '#add-plaza-edit', function(){
			nombre = $('#nombre_plaza_edit').val();
			activo = 1;

		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregarplaza",
								type: "POST",
								data:{nombre: nombre, activo: activo},
								success: function(p){
									
									option = "";
         s = $('#select_plaza_edit');

										option += '<option value="'+p.id+'" selected>'+p.nombre_plaza+'</option>';

										s.append(option);
									
										
										alertas("success","Plaza "+p.nombre_plaza+" agregada correctamente.");
										
										//Limpiamos los campos
									$('#nombre_plaza_edit').val('');

									
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
		$(document).on('click', '#no-add-plaza-edit', function(){
			 $('#nombre_plaza_edit').val('');
	});
	
	
	
	//Validaciones --------------------------------------------------------
	
	/*****************
	------Validaciones al agregar sucursal
	******************************************************************/
	  $("#add-sucursal").click(function () {

      if($("#sucursal").val().length == 0){
														$('.error-sucursal').addClass('has-error has-feedback');
							       $('.icon-sucursal').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#select_gerente").val() == 0){
              $('.error-gerente').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#select_plaza").val() == 0){
              $('.error-plaza').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#direccion1").val().length  == 0){
              $('.error-direccion1').addClass('has-error has-feedback');
							       $('.icon-direccion1').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-sucursal").click(function () {

      if($("#colonia").val().length  == 0){
              $('.error-colonia').addClass('has-error has-feedback');
							       $('.icon-colonia').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#estado").val().length  == 0){
              $('.error-estado').addClass('has-error has-feedback');
							       $('.icon-estado').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#municipio").val().length  == 0){
              $('.error-municipio').addClass('has-error has-feedback');
							       $('.icon-municipio').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal").click(function () {

      if($("#cp").val().length  == 0){
              $('.error-cp').addClass('has-error has-feedback');
							       $('.icon-cp').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	//cuanso se aga el foco en el input eliminamos lso errores
	
	$("#sucursal").focus(function () {
      $('.error-sucursal').removeClass('has-error has-feedback');
						$('.icon-sucursal').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#select_gerente").change(function () {
      $('.error-gerente').removeClass('has-error has-feedback');
});
	
	$("#select_plaza").change(function () {
      $('.error-plaza').removeClass('has-error has-feedback');
});
	
	$("#direccion1").focus(function () {
      $('.error-direccion1').removeClass('has-error has-feedback');
						$('.icon-direccion1').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#colonia").focus(function () {
      $('.error-colonia').removeClass('has-error has-feedback');
						$('.icon-colonia').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#estado").focus(function () {
      $('.error-estado').removeClass('has-error has-feedback');
						$('.icon-estado').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#municipio").focus(function () {
      $('.error-municipio').removeClass('has-error has-feedback');
						$('.icon-municipio').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#cp").focus(function () {
      $('.error-cp').removeClass('has-error has-feedback');
						$('.icon-cp').removeClass('glyphicon glyphicon-remove form-control-feedback');
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
	------Validaciones al agregar un nueva plaza
	******************************************************************/
	  $("#add-plaza").click(function () {

      if($("#nombre_plaza").val().length == 0){
														$('.error-nombre_plaza').addClass('has-error has-feedback');
							       $('.icon-nombre_plaza').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre_plaza").focus(function () {
      $('.error-nombre_plaza').removeClass('has-error has-feedback');
						$('.icon-nombre_plaza').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	/*****************
	------Validaciones al editar sucursal
	******************************************************************/
	  $("#add-sucursal_edit").click(function () {

      if($("#sucursal_edit").val().length == 0){
														$('.error-sucursal-edit').addClass('has-error has-feedback');
							       $('.icon-sucursal-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	

	
	  $("#add-sucursal_edit").click(function () {

      if($("#direccion1_edit").val().length  == 0){
              $('.error-direccion1-edit').addClass('has-error has-feedback');
							       $('.icon-direccion1-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-sucursal_edit").click(function () {

      if($("#colonia_edit").val().length  == 0){
              $('.error-colonia-edit').addClass('has-error has-feedback');
							       $('.icon-colonia-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal_edit").click(function () {

      if($("#estado_edit").val().length  == 0){
              $('.error-estado-edit').addClass('has-error has-feedback');
							       $('.icon-estado-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal_edit").click(function () {

      if($("#municipio_edit").val().length  == 0){
              $('.error-municipio-edit').addClass('has-error has-feedback');
							       $('.icon-municipio-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-sucursal_edit").click(function () {

      if($("#cp_edit").val().length  == 0){
              $('.error-cp-edit').addClass('has-error has-feedback');
							       $('.icon-cp-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#sucursal_edit").focus(function () {
      $('.error-sucursal-edit').removeClass('has-error has-feedback');
						$('.icon-sucursal-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	$("#direccion1_edit").focus(function () {
      $('.error-direccion1-edit').removeClass('has-error has-feedback');
						$('.icon-direccion1-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#colonia_edit").focus(function () {
      $('.error-colonia-edit').removeClass('has-error has-feedback');
						$('.icon-colonia-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#estado_edit").focus(function () {
      $('.error-estado-edit').removeClass('has-error has-feedback');
						$('.icon-estado-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#municipio_edit").focus(function () {
      $('.error-municipio-edit').removeClass('has-error has-feedback');
						$('.icon-municipio-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#cp_edit").focus(function () {
      $('.error-cp-edit').removeClass('has-error has-feedback');
						$('.icon-cp-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
/*****************
	------Validaciones al agregar un nuevo gerente al editar sucursal
	******************************************************************/
	  $("#add-gerente-edit").click(function () {

      if($("#nombre_edit").val().length == 0){
														$('.error-nombre-edit').addClass('has-error has-feedback');
							       $('.icon-nombre-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-gerente-edit").click(function () {

      if($("#paterno_edit").val().length == 0){
														$('.error-paterno-edit').addClass('has-error has-feedback');
							       $('.icon-paterno-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-gerente-edit").click(function () {

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
	
	/*****************
	------Validaciones al agregar un nueva plaza al editar sucursal
	******************************************************************/
	  $("#add-plaza-edit").click(function () {

      if($("#nombre_plaza_edit").val().length == 0){
														$('.error-plaza-edit').addClass('has-error has-feedback');
							       $('.icon-plaza-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	$("#nombre_plaza_edit").focus(function () {
      $('.error-plaza-edit').removeClass('has-error has-feedback');
						$('.icon-plaza-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
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