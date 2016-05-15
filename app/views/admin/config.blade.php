@extends('layout/plantilla')

@section('title')
<title>Admin | Tarifas</title>
@show

@section('scripts')
 @parent
 {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}
 {{ HTML::style('lib/bootstrap-notify/bootstrap-notify.css') }}
 {{ HTML::style('css/estilo_dtable.css') }}
 {{ HTML::Script('js/jquery.js') }}
 {{ HTML::script('js/bootstrap.min.js') }}
 {{ HTML::Script('js/moment.min.js') }}
 {{ HTML::Script('js/bootstrap-datetimepicker.min.js') }}
 {{ HTML::script('lib/bootstrap-notify/bootstrap-notify.js') }}
 {{ HTML::script('js/accounting.min.js') }}
 <style>
		#listar_t_length, #listar_t_info{
			display:none;
		}
		
		.fancy.pagination{
			margin-top:.5em;
		}
		
		#listar_t_filter{
			display:none;
		}
		
		
 </style>
@show

<script>
	
		$(document).ready(function(){
		
  	$('.t-config').addClass('dahs_active');
		
			$('.config_v').slideDown();
		
			$('.flechita2').addClass('glyphicon glyphicon-menu-down');
			$('.flechita1').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita3').removeClass('glyphicon glyphicon-menu-down');
			$('.flechita1').addClass('glyphicon glyphicon-menu-right');
			$('.flechita3').addClass('glyphicon glyphicon-menu-right');
		
			$('.titular_seccion').text('Configurar tarifas');
	});
	
</script>


@section('content')

<div class="seccion_tabla seccion_sucursal">
<div class="agregar">
	<button id="agregar-tarifa" class="btn btn-primary" title="Agregar tarifa">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo table-striped">
			<thead class="thead-tabla">
				<tr>
					<th class="cabecero">Id</th>
					<th class="cabecero">Oficna</th>
					<th class="cabecero">Fecha inicio</th>
					<th class="cabecero">Fecha fin</th>
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
    

    <!--  Modal para agregar tarifa -->
<div id="modal-add-tarifa" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog dialog-sucursal">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar Tarifa
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
				<div class="datos1-tarifa">
						
						<div class="form-group error-oficina">
							<label for="select_oficina" class="text-primary">Oficina: </label>
											<select class="form-control" id="select_oficina"></select>
					 </div>
					 
					 <!--  Campo oculto   -->
					 <input type="text" id="tipo_oficina" value="" class="hidden">
						
							<div class="form-group error-fecha_inicio">
										<label for="fecha_inicio" class="text-primary">Fecha inicio: </label>
										<input type="text" name="fecha_inicio" id="fecha_inicio" class="form-control" >
										<span class="icon-fecha_inicio"></span>
							</div>
							
						<div class="form-group error-fecha_fin">
										<label for="fecha_fin" class="text-primary">Fecha fin: </label>
										<input type="text" name="fecha_fin" id="fecha_fin" class="form-control" >
										<span class="icon-fecha_fin"></span>
							</div>
											
					<div class="estaus_tarifa">			
							<label for="estatus" class="text-primary">Estatus: </label>
						<div class="checkbox checkbox-activ">
									 <span class="text-primary">Activo</span>
									<div class="txt-activ">
									  <input id="inp-check" type="checkbox" value="">
									</div>
						</div>
				    </div>
															
					
	           </div>
															
				<div class="content-add-t-d">
							<button id="ad-nueva-tarifa-detalle" class="btn btn-primary" title="Agregar detalle">
											<span class="glyphicon glyphicon-plus"></span>
							</button>
				</div>
				<div class="datos1-tarifa-detalle">
									
					<div class="seccion_tabla">
							
								<div class="tabla-sucursal">
										<table id="table-x-y" class="tabla_detalletarifa table-striped">
										<div class="thead-detalle">
											<span class="txt-detalle">Detalle</span>
										</div>
										<thead class="thead-detallet">
											<tr>
												<th class="cabecero">Grupo</th>
												<th class="cabecero">Cobertura</th>
												<th class="cabecero">Vehículo</th>
												<th class="cabecero">Tarifa por día</th>
												<th class="cabecero">Eliminar</th>
											</tr>														
										</thead>
										<tbody id="body-tarifa-detalle"></tbody>
									</table>
								</div>

							</div>

								
				</div>
															
																						 
            </form>
                
          </div>
          <div class="modal-footer">
													
	 		<div class="footer-modal">
						<button id="no-add-tarifa" type="button" class="btn btn-danger" data-dismiss="modal">
							Cancelar
					</button>
					<span id="add-tarifa" class="btn btn-primary" data-dismiss="modal" >
								Agregar
					</span>
			</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
    
    <!-- Modal para agregar el detalle de la tarifa  -->
    <div id="modal-tarifa-detalle" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar detalle
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
				<div class="datos1 error-tarifa-grupo">
					<div class="form-group">
						<label for="select-tarifa-grupo" class="text-primary">Grupo: </label>
						<select class="form-control" id="select-tarifa-grupo"></select>
					</div>

					<!-- Campo escondido -->
					<input type="text" id="inp-tarifa-grupo" class="hidden">


					<div class="form-group error-tarifa-vehiculo">
						<label for="select-tarifa-vehiculo" class="text-primary">Vehículo: </label>
						<select class="form-control" id="select-tarifa-vehiculo"></select>
					</div>
					<!-- Campo escondido -->
					<input type="text" id="inp-tarifa-codigo" class="hidden">
						
				</div>
																
				<div class="datos2">
						<!-- Campo escondido -->
							<input type="text" id="inp-tarifa-cobertura" class="hidden">

				<div class="form-group error-tarifa-por-dia">
					<label for="tarifa-por-dia" class="text-primary">Tarifa por día: </label>
					<input type="number" class="form-control" id="tarifa-por-dia">
					<span class="icon-tarifa-por-dia"></span>
				</div>
				
					<div class="form-group error-tarifa-cobertura">
									<label for="select-tarifa-cobertura" class="text-primary">Cobertura: </label>
									<select class="form-control" id="select-tarifa-cobertura"></select>
					</div>
				<!-- Campo escondido -->
					<input type="text" id="inp-tarifa-vehiculo" class="hidden">
			  </div>
													 
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
	 		<div class="footer-modal">
				<button id="no-add-tarifa-detalle" type="button" class="btn btn-danger" data-dismiss="modal">
						Cancelar
				</button>
				<span id="add-tarifa-detalle" class="btn btn-primary" data-dismiss="modal" >
							Agregar
				</span>
			</div>

          </div>
        </div>
      </div>
    </div>
       
    
        <!--  Modal para eliminar tarifa  -->
<div id="modal-confirm-delete" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar tarifa 
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar esta tarifa?</h3>
                
          </div>
          <div class="modal-footer">
													
	 		<div class="footer-modal">
						<button id="no-add-tarifa" type="button" class="btn btn-danger" data-dismiss="modal">
							No
					</button>
					<span id="confirm-delete-tarifa" class="btn btn-primary" data-dismiss="modal" >
								Si
					</span>
			</div>
             
          </div>
        </div>
      </div>
    </div>
    
     
    
      <!--  Modal para editar tarifa -->
<div id="modal-edit-tarifa-detalle" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog dialog-sucursal">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar Tarifa
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
					<div class="datos1-tarifa">
							
							<div class="form-group error-oficina_edit">
								<label for="select_oficina_edit" class="text-primary">Oficina: </label>
												<select class="form-control" id="select_oficina_edit"></select>
						 </div>
						 
						 <!--  Campo oculto   -->
						 <input type="text" id="tipo_oficina_edit" value="" class="hidden">
							
								<div class="form-group error-fecha_inicio_edit">
											<label for="fecha_inicio_edit" class="text-primary">Fecha inicio: </label>
											<input type="text" name="fecha_inicio_edit" id="fecha_inicio_edit" class="form-control" >
											<span class="icon-fecha_inicio_edit"></span>
								</div>
								
							<div class="form-group error-fecha_fin_edit">
											<label for="fecha_fin_edit" class="text-primary">Fecha fin: </label>
											<input type="text" name="fecha_fin_edit" id="fecha_fin_edit" class="form-control" >
											<span class="icon-fecha_fin_edit"></span>
								</div>
												
						<div class="estaus_tarifa">			
								<label for="estatus" class="text-primary">Estatus: </label>
							<div class="checkbox checkbox-activ">
										 <span class="text-primary">Activo</span>
										<div class="txt-activ">
										  <input id="inp-check-edit" type="checkbox" value="">
										</div>
							</div>
					</div>
																
						
		          </div>
															
					<div class="content-add-t-d">
								<button id="ad-nueva-tarifa-detalle-edit" class="btn btn-primary" title="Agregar detalle">
												<span class="glyphicon glyphicon-plus"></span>
								</button>
					</div>
					<div class="datos1-tarifa-detalle">
										
					<div class="seccion_tabla">
							
								<div class="tabla-sucursal">
										<table id="table-x" class="tabla_detalletarifa table-striped">
										<div class="thead-detalle">
											<span class="txt-detalle">Detalle</span>
										</div>
										<!-- Campo escondido -->
										<input type="text" id="id_tarifa" value="" class="hidden">
										<thead class="thead-detallet">
											<tr>
												<th class="cabecero">Grupo</th>
												<th class="cabecero">Código</th>
												<th class="cabecero">Vehículo</th>
												<th class="cabecero">Tarifa por día</th>
												<th class="cabecero">Editar</th>
												<th class="cabecero">Eliminar</th>
											</tr>														
										</thead>
										<tbody id="body-tarifa-detalle-edit"></tbody>
									</table>
								</div>

							</div>

									
					</div>
															
																						 
            </form>
                
          </div>
          <div class="modal-footer">
													
		 		<div class="footer-modal">
							<button id="no-add-tarifa-edit" type="button" class="btn btn-danger" data-dismiss="modal">
								Cancelar
						</button>
						<span id="add-tarifa-edit" class="btn btn-primary btn-act-t-d" data-dismiss="modal" >
									Actualizar tarifa
						</span>
				</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
              <!--  Modal para confirmar eliminar tarifa detalle  -->
<div id="modal-confirm-delete-tarifa-detalle" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar detalle
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar esta tarifa detalle?</h3>
                
          </div>
          <div class="modal-footer">
													
		 		<div class="footer-modal">
							<button id="no-quitar-tarifa-detalle" type="button" class="btn btn-danger" data-dismiss="modal">
								No
						</button>
						<span id="confirm-delete-tarifa-detalle" class="btn btn-primary" data-dismiss="modal" >
									Si
						</span>
				</div>
             
          </div>
        </div>
      </div>
    </div>


			 <!-- Modal para agregar el detalle de la tarifa al editar -->
    <div id="modal-tarifa-detalle-edit" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar detalle
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
				<div class="datos1 error-tarifa-grupo-edit">
							<div class="form-group">
										<label for="select-tarifa-grupo-edit" class="text-primary">Grupo: </label>
										<select class="form-control" id="select-tarifa-grupo-edit"></select>
							</div>

						<!-- Campo escondido -->
						<input type="text" id="inp-tarifa-grupo-edit" class="hidden">

						<div class="form-group error-tarifa-vehiculo-edit">
										<label for="select-tarifa-vehiculo-edit" class="text-primary">Vehículo: </label>
										<select class="form-control" id="select-tarifa-vehiculo-edit"></select>
						</div>
						<!-- Campo escondido -->
						<input type="text" id="inp-tarifa-codigo-edit" class="hidden">
						
				</div>
																
				<div class="datos2">
							<div class="form-group error-tarifa-por-dia-edit">
											<label for="tarifa-por-dia-edit" class="text-primary">Tarifa por día: </label>
											<input type="number" class="form-control" id="tarifa-por-dia-edit">
											<span class="icon-tarifa-por-dia-edit"></span>
							</div>

							<div class="form-group error-tarifa-cobertura-edit">
											<label for="select-tarifa-cobertura-edit" class="text-primary">Cobertura: </label>
											<select class="form-control" id="select-tarifa-cobertura-edit"></select>
							</div>
							<!-- Campo escondido -->
								<input type="text" id="inp-tarifa-cobertura-edit" class="hidden">

							<!-- Campo escondido -->
								<input type="text" id="inp-tarifa-vehiculo-edit" class="hidden">
			 </div>
													 
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
	 		<div class="footer-modal">
						<button id="no-add-tarifa-detalle-edit" type="button" class="btn btn-danger" data-dismiss="modal">
							Cancelar
					</button>
					<span id="add-tarifa-detalle-edit" class="btn btn-primary" data-dismiss="modal" >
								Agregar
					</span>
			</div>
             
          </div>
        </div>
      </div>
    </div>
    
    
   			 <!-- Modal para agregar el detalle de la tarifa al editar detalle-->
    <div id="modal-tarifa-detalle-edit-detalle" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-edit"></span>
               Editar detalle
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
															
				<div class="datos1 error-tarifa-grupo-edit-detalle">
							<div class="form-group">
										<label for="select-tarifa-grupo-edit-detalle" class="text-primary">Grupo: </label>
										<select class="form-control" id="select-tarifa-grupo-edit-detalle"></select>
							</div>

							<div class="form-group error-tarifa-vehiculo-edit-detalle">
											<label for="select-tarifa-vehiculo-edit-detalle" class="text-primary">Vehículo: </label>
											<select class="form-control" id="select-tarifa-vehiculo-edit-detalle"></select>
							</div>
						<!-- Campo escondido -->
						<input type="text" id="inp-tarifa-grupo-edit-detalle" class="hidden">

						<!-- Campo escondido -->
						<input type="text" id="inp-tarifa-codigo-edit-detalle" class="hidden">
						
				</div>
																
				<div class="datos2">
							<div class="form-group error-tarifa-cobertura-edit-detalle">
											<label for="select-tarifa-cobertura-edit-detalle" class="text-primary">Cobertura: </label>
											<select class="form-control" id="select-tarifa-cobertura-edit-detalle"></select>
							</div>
							<!-- Campo escondido -->
								<input type="text" id="inp-tarifa-cobertura-edit-detalle" class="hidden">

							<!-- Campo escondido -->
								<input type="text" id="inp-tarifa-vehiculo-edit-detalle" class="hidden">
							<div class="form-group error-tarifa-por-dia-edit-detalle">
								<label for="tarifa-por-dia-edit-detalle" class="text-primary">Tarifa por día: </label>
								<input type="number" class="form-control" id="tarifa-por-dia-edit-detalle">
								<span class="icon-tarifa-por-dia-edit-detalle"></span>
							</div>
			 </div>
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
	 		<div class="footer-modal">
						<button id="no-add-tarifa-detalle-edit-detalle" type="button" class="btn btn-danger" data-dismiss="modal">
							Cancelar
					</button>
					<span id="add-tarifa-detalle-edit-detalle" class="btn btn-primary btn-act-t-d" data-dismiss="modal" >
							Actualizar detalle
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
							url: "/admin/listatarifas",
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
																'<span class="text-info txt-escondido">Id: </span>'+l[i].id,
																'<span class="text-info txt-escondido">Oficina: </span>'+l[i].nombre,
																'<span class="text-info txt-escondido">Fecha inicio: </span>'+l[i].fecha_inicio,
																'<span class="text-info txt-escondido">Fecha fin: </span>'+l[i].fecha_fin,
																'<span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+l[i].estatus+'"></span>',
																'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar tarifa">'+
														            '<span class="glyphicon glyphicon-edit"></span>'+
														          '</button>',
																'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar tarifa">'+
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



							},//End success

							error: function () {
											alert("failure");
							} //end error
			});
	
	
				$(document).on('click','.fancy > li, a',function(){	
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
	

	
		$(function () {
								$('#fecha_inicio').datetimepicker({
									format: 'YYYY-MM-DD'   
								});

				});
	
		$(function () {
								$('#fecha_fin').datetimepicker({
									format: 'YYYY-MM-DD'     
								});

				});
	
	
		//Agregar tarifa -------------
	 $(document).on('click', '#agregar-tarifa', function(){
			$('#modal-add-tarifa').modal({
      show: 'false',
    });
			
			
			//Listamos las oficinas
			 $.ajax({
								url:  "/admin/selectoficinas",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select_oficina');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.oficinas){

																			option += '<option value="'+p.oficinas[datos].id+'">'+p.oficinas[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			
		});
		
	
	
	
	//Agregar tarifa detalle
	$(document).on('click', '#ad-nueva-tarifa-detalle', function(){
	
		$('#modal-tarifa-detalle').modal({
			show:'false',
		});
		
		
		
					//Listamos los grupos
			 $.ajax({
								url:  "/admin/selectgrupos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-grupo');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.grupos){

																			option += '<option value="'+p.grupos[datos].id+'">'+p.grupos[datos].descripcion_grupo+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
						//Listamos los codigos
					 $.ajax({
								url:  "/admin/selectcodigos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-codigo');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.codigos){

																			option += '<option value="'+p.codigos[datos].id+'">'+p.codigos[datos].codigo+' '+p.codigos[datos].descripcion_codigo+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
			//Listamos las coberturas
					 $.ajax({
								url:  "/admin/selectcoberturas",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-cobertura');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.coberturas){

																			option += '<option value="'+p.coberturas[datos].id+'">'+p.coberturas[datos].cobertura+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		//Listamos los vehiculos
					 $.ajax({
								url:  "/admin/selectvehiculos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-vehiculo');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.vehiculos){
															
																			if(p.vehiculos[datos].transmision == 1){
																			    option += '<option value="'+p.vehiculos[datos].id+'">'+p.vehiculos[datos].descripcion+' Automático</option>';
																				
																			} else {
																				 option += '<option value="'+p.vehiculos[datos].id+'">'+p.vehiculos[datos].descripcion+' Estándard</option>';
																			}

																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		return false;
		
	});
	
	$('#select-tarifa-grupo').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-grupo').attr('value', id);
	});
	
	
	$('#select-tarifa-cobertura').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-cobertura').attr('value', id);
	});
	
		$('#select-tarifa-vehiculo').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-vehiculo').attr('value', id);
	});
	
	
		$(document).on('click', '#add-tarifa-detalle', function(){
			grupo = $('#inp-tarifa-grupo').attr('value');
			cobertura = $('#inp-tarifa-cobertura').attr('value');
			vehiculo = $('#inp-tarifa-vehiculo').attr('value');
			tarifa_por_dia = $('#tarifa-por-dia').val();
			
			//obtenemos los nombres
			nombre_grupo = $('#select-tarifa-grupo option:selected').text();
			nombre_cobertura = $('#select-tarifa-cobertura option:selected').text();
			nombre_vehiculo = $('#select-tarifa-vehiculo option:selected').text();

			
			body = $('#body-tarifa-detalle');
			
			nueva_fila = '<tr id="fila_'+grupo+'_'+cobertura+'_'+vehiculo+'_'+grupo+'_'+tarifa_por_dia+'">'+
												'<td class="td_grupo" value="'+grupo+'"><span class="text-info txt-escondido">Grupo: </span>'+nombre_grupo+'</td>'+
												'<td class="td_cobertura" value="'+cobertura+'"><span class="text-info txt-escondido">Cobertura: </span>'+nombre_cobertura+'</td>'+
				        '<td class="td_vehiculo" value="'+vehiculo+'"><span class="text-info txt-escondido">Vehículo: </span>'+nombre_vehiculo+'</td>'+
												'<td class="td_tarifa_por_dia" value="'+tarifa_por_dia+'"><span class="text-info txt-escondido">Tarifa por día: </span>'+accounting.formatMoney(tarifa_por_dia)+'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger btn-sm eliminar-btn-detalle" value="'+grupo+'_'+cobertura+'_'+vehiculo+'_'+grupo+'_'+tarifa_por_dia+'" title="Eliminar">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									body.prepend(nueva_fila);
			
			
			//Limpiamos
			$('#select-tarifa-grupo').html('');
			$('#select-tarifa-cobertura').html('');
			$('#select-tarifa-vehiculo').html('');
			$('#tarifa-por-dia').val('');

	});
	
		$(document).on('click', '#no-add-tarifa-detalle', function(){
			
			  $('#select-tarifa-grupo').html('');
			  $('#select-tarifa-cobertura').html('');
			  $('#select-tarifa-vehiculo').html('');
			  $('#tarifa-por-dia').val('');

      $('.error-tarifa-grupo').removeClass('has-error has-feedback');
	
	
      $('.error-tarifa-cobertura').removeClass('has-error has-feedback');
	
      $('.error-tarifa-vehiculo').removeClass('has-error has-feedback');
	
      $('.error-tarifa-por-dia').removeClass('has-error has-feedback');
	  $('.icon-tarifa-por-dia').removeClass('glyphicon glyphicon-remove form-control-feedback');
	});
	
	
	//quitar tarifa detalle
		$(document).on('click', '.eliminar-btn-detalle', function(){
			id = $(this).attr('value');
			
			$('#modal-confirm-delete-tarifa-detalle').modal({
				show:'false',
			});
			
			$('#confirm-delete-tarifa-detalle').attr('value', id);
			
			return false;
	});
	
	$(document).on('click', '#confirm-delete-tarifa-detalle', function(){
			id = $(this).attr('value');
		 $('#fila_'+id).remove();
	});
	
	
	
	$('#select_oficina').on('change',function(){
		
		id = $(this).val();
		$('#tipo_oficina').attr('value', id);
		
	});
		
	
	$(document).on('click', '#add-tarifa', function(){
			id_oficina = $('#tipo_oficina').attr('value');
		 fecha_inicio = $('#fecha_inicio').val();
		 fecha_fin = $('#fecha_fin').val();
		
					if($('#inp-check').prop("checked") == true){
								activo = 1;
					} else {
							activo = 0;
					}
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/agregartarifa",
								type: "POST",
								data:{id_oficina: id_oficina, fecha_inicio: fecha_inicio, fecha_fin: fecha_fin, activo: activo},
								success: function(t){
									
									nueva_fila = '<tr id="fila_'+t.id+'">'+
												'<td><span class="text-info txt-escondido">Id: </span><span class="hidden">'+s.created_at+'</span>'+t.id+'</td>'+
												'<td><span class="text-info txt-escondido">Oficina: </span>'+t.nombre+'</td>'+
												'<td><span class="text-info txt-escondido">Fecha inicio: </span>'+t.fecha_inicio+'</td>'+
												'<td><span class="text-info txt-escondido">Fecha fin: </span>'+t.fecha_fin+'</td>'+
												'<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+t.estatus+'"></span></td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+t.id+'" title="Editar tarifa">'+
																	'<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+t.id+'" title="Eliminar tarifa">'+
																		'<span class="glyphicon glyphicon-remove"></span>'+
														'</button>'+
											'</td>'+
									'</tr>';
										
									tabla_a.prepend(nueva_fila);
									
								
										
										alertas("success","Tarifa agregada correctamente.");
										
									registrartarifadetalle(t.id);
									
									$('.estatus_0').text('Inactivo');
									$('.estatus_0').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
									
									
								//Limpiamos los campos	
								$('#select_oficina').html('');
						  $('#tipo_oficina').val('');
						  $('#fecha_inicio').val('');
						  $('#fecha_fin').val('');
								$('#inp-check').prop("checked", false);
						  
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
					
		
		
	});
	
	
	//registramos la tarifa detalle
	function registrartarifadetalle(id){
		
		var DATA = [];
		
		$('.tabla_detalletarifa tbody tr').each(function(){
							id_tarifa = id;
							id_g  = $(this).find("td[class*='td_grupo']").attr('value');
			    id_cobertura  = $(this).find("td[class*='td_cobertura']").attr('value');
			    id_v  = $(this).find("td[class*='td_vehiculo']").attr('value');
			    tarifa_por_dia  = $(this).find("td[class*='td_tarifa_por_dia']").attr('value');

							datos = {id_tarifa, id_g, id_cobertura, id_v, tarifa_por_dia};

							DATA.push(datos);
			
  });
		
		
		if(DATA == ''){
			
		} else {
						
			   aInfo = JSON.stringify(DATA);
			
						$.ajax({
								url:  "/admin/agregartarifadetalle",
								type: "POST",
								data:{aInfo: aInfo},
								success: function(d){
									
									//Limpiamos la tabla tarifa detalle
									$('#body-tarifa-detalle').html('');
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		}
		
		
		
	}//end functiom
	
	
	
		$(document).on('click', '#no-add-tarifa', function(){
			     $('#body-tarifa-detalle').html('');
			     $('#select_oficina').html('');
						  $('#tipo_oficina').val('');
						  $('#fecha_inicio').val('');
						  $('#fecha_fin').val('');
								$('#inp-check').prop("checked", false);
			
      $('.error-oficina').removeClass('has-error has-feedback');
	
      $('.error-fecha_inicio').removeClass('has-error has-feedback');
						$('.icon-fecha_inicio').removeClass('glyphicon glyphicon-remove form-control-feedback');

      $('.error-fecha_fin').removeClass('has-error has-feedback');
						$('.icon-fecha_fin').removeClass('glyphicon glyphicon-remove form-control-feedback');

			
			
	});
	
	//Eliminar tarifa
	$(document).on('click', '.eliminar-btn', function(){
			   id = $(this).val();

					$('#modal-confirm-delete').modal({
       show: 'false',
     });
		
				 $('#confirm-delete-tarifa').attr('value', id);
				
	});
	
		$(document).on('click', '#confirm-delete-tarifa', function(){
			id = $(this).attr('value');
			 $.ajax({
								url:  "/admin/eliminartarifa",
								type: "GET",
								data:{id: id},
								success: function(d){
										alertas("success","Tarifa eliminada correctamente");
										 $('#fila_'+d).remove();
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
	
	
			$(function () {
								$('#fecha_inicio_edit').datetimepicker({
									format: 'YYYY-MM-DD'   
								});

				});
	
		$(function () {
								$('#fecha_fin_edit').datetimepicker({
									format: 'YYYY-MM-DD'     
								});

				});
	
	//--Editar tarifa
		$(document).on('click', '.editar-btn', function(){
			  id = $(this).attr('value');
					
		   $('#add-tarifa-edit').attr('value', id);
			
					$('#id_tarifa').attr('value', id);		
			
					$.ajax({
								url:  "/admin/editartarifa",
								type: "GET",
								data:{id: id},
								success: function(e){
									$('#fecha_inicio_edit').val(e.fecha_inicio);
									$('#fecha_fin_edit').val(e.fecha_fin);
									
									activo = e.estatus;
									if(activo == 1){
											$('#inp-check-edit').prop("checked", true);
											$('#inp-check-edit').attr('value', '1');
									} else {
											$('#inp-check-edit').prop("checked", false);
											$('#inp-check-edit').attr('value', '0');
									}

									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					$('#modal-edit-tarifa-detalle').modal({
       show: 'false',
     });
		
				 $('#add-sucursal_edit').attr('value', id);
			
			
			
			
			//Listamos las oficinas
			$.ajax({
								url:  "/admin/selectoficinasedit",
								type: "GET",
				    data:{id: id},
								success: function(e){
								     	option = "";
              s = $('#select_oficina_edit');
									
															option += '<option value="'+e.o_a[0].id+'">'+e.o_a[0].nombre+'</option>';
              for(datos in e.oficinas){

																			option += '<option value="'+e.oficinas[datos].id+'">'+e.oficinas[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			
			
			
			
	//Listar los detalles de la tarifa
	$.ajax({
				url:  "/admin/listartarifadetalleedit",
				type: "GET",
			   data:{id: id},
						success: function(t){
							if(t.t_d == ''){
									
								} else {

									body = $('#body-tarifa-detalle-edit');
									fila = "";

								for(datos in t.t_d){
																				

									fila += '<tr class="tr_actual" id="fila_edit_'+t.t_d[datos].id+'">'+
										'<td class="td_grupo_actual" value="'+t.t_d[datos].descripcion_grupo+'"><span class="text-info txt-escondido">Grupo: </span>'+t.t_d[datos].descripcion_grupo+'</td>'+
										'<td class="td_cobertura_actual" value="'+t.t_d[datos].cobertura+'"><span class="text-info txt-escondido">Cobertura: </span>'+t.t_d[datos].cobertura+'</td>'+
										'<td class="td_vehiculo_actual" value="'+t.t_d[datos].descripcion+'"><span class="text-info txt-escondido">Vehículo: </span>'+t.t_d[datos].descripcion+'</td>'+
										'<td class="td_tarifa_por_dia_actual" value="'+t.t_d[datos].tarifa_por_dia+'"><span class="text-info txt-escondido">Tarifa por día: </span>'+accounting.formatMoney(t.t_d[datos].tarifa_por_dia)+'</td>'+
										'<td><span class="editar-d-a btn btn-sm btn-info" title="Editar" value="'+t.t_d[datos].id+'"><span class="glyphicon glyphicon-edit"></span></span></td>'+
										'<td><span class="quitar-d-a btn btn-sm btn-danger" title="Eliminar" value="'+t.t_d[datos].id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
										'</tr>';


								}//end for

								body.append(fila);
							}
							
							

						},
	
						error: function(){
							alert('failure');
						}
														
			});
					
				
	});
	
	
	$(document).on('click', '#no-add-tarifa-edit', function(){
		$('#select_oficina_edit').html('');
		$('#body-tarifa-detalle-edit').html('');
		
  $('.error-oficina_edit').removeClass('has-error has-feedback');

  $('.error-fecha_inicio_edit').removeClass('has-error has-feedback');
  $('.icon-fecha_inicio_edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
  $('.error-fecha_fin_edit').removeClass('has-error has-feedback');
		$('.icon-fecha_fin_edit').removeClass('glyphicon glyphicon-remove form-control-feedback');

	});
	
	
	//Eliminar los detalles ya agregados
		$(document).on('click', '.quitar-d-a', function(){
			id = $(this).attr('value');

			$('#modal-confirm-delete-tarifa-detalle').modal({
				show:'false',
			});
			
			$('#confirm-delete-tarifa-detalle').attr('value', id);
			$('#confirm-delete-tarifa-detalle').addClass('delete-p-act');
		 
	});
	
		$(document).on('click', '.delete-p-act', function(){
			id = $(this).attr('value');
			
							 $.ajax({
								url:  "/admin/elimartarifadetalle",
								type: "GET",
								data:{id: id},
								success: function(p){
										
											$('#fila_edit_'+id).remove();
											$('#confirm-delete-tarifa-detalle').removeClass('delete-p-act');
								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
		 
	});
	
			$(document).on('click', '#no-quitar-tarifa-detalle', function(){
				 $('#confirm-delete-tarifa-detalle').removeClass('delete-p-act');
			});
	
	
	

	/******** Agregar nueva tarifa detalle al editar *******************************/
	$(document).on('click', '#ad-nueva-tarifa-detalle-edit', function(){
		
		id_tarifa = $('#id_tarifa').attr('value');
		$('#add-tarifa-detalle-edit').attr('data-id', id_tarifa);
	
		$('#modal-tarifa-detalle-edit').modal({
			show:'false',
		});
		
					//Listamos los grupos
			 $.ajax({
								url:  "/admin/selectgrupos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-grupo-edit');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.grupos){

																			option += '<option value="'+p.grupos[datos].id+'">'+p.grupos[datos].descripcion_grupo+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
						//Listamos los codigos
					 $.ajax({
								url:  "/admin/selectcodigos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-codigo-edit');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.codigos){

																			option += '<option value="'+p.codigos[datos].id+'">'+p.codigos[datos].codigo+' '+p.codigos[datos].descripcion_codigo+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
			//Listamos las coberturas
					 $.ajax({
								url:  "/admin/selectcoberturas",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-cobertura-edit');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.coberturas){

																			option += '<option value="'+p.coberturas[datos].id+'">'+p.coberturas[datos].cobertura+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		//Listamos los vehiculos
					 $.ajax({
								url:  "/admin/selectvehiculos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select-tarifa-vehiculo-edit');
									
															option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.vehiculos){
															
																		if(p.vehiculos[datos].transmision == 1){
																			    option += '<option value="'+p.vehiculos[datos].id+'">'+p.vehiculos[datos].descripcion+' Automático</option>';
																				
																			} else {
																				 option += '<option value="'+p.vehiculos[datos].id+'">'+p.vehiculos[datos].descripcion+' Estándard</option>';
																			}

																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		return false;
		
	});
	
	$('#select-tarifa-grupo-edit').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-grupo-edit').attr('value', id);
	});
	
	$('#select-tarifa-codigo-edit').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-codigo-edit').attr('value', id);
	});
	
	$('#select-tarifa-cobertura-edit').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-cobertura-edit').attr('value', id);
	});
	
		$('#select-tarifa-vehiculo-edit').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-vehiculo-edit').attr('value', id);
	});
	
	
		$(document).on('click', '#add-tarifa-detalle-edit', function(){
			id_tarifa = $(this).attr('data-id');
			grupo = $('#inp-tarifa-grupo-edit').attr('value');
			cobertura = $('#inp-tarifa-cobertura-edit').attr('value');
			vehiculo = $('#inp-tarifa-vehiculo-edit').attr('value');
			tarifa_por_dia = $('#tarifa-por-dia-edit').val();
			
			
						$.ajax({
								url:  "/admin/agregartarifadetalle",
								type: "GET",
					   data:{id_tarifa: id_tarifa, grupo: grupo, cobertura: cobertura, vehiculo: vehiculo, tarifa_por_dia: tarifa_por_dia},
							success: function(d){

											body_edit = $('#body-tarifa-detalle-edit');
								   nueva_fila_edit = "";
								
												nueva_fila_edit += '<tr class="tr_actual" id="fila_edit_'+d.id+'">'+
                '<td class="td_grupo_actual" value="'+d.descripcion_grupo+'"><span class="text-info txt-escondido">Grupo: </span>'+d.descripcion_grupo+'</td>'+
																'<td class="td_cobertura_actual" value="'+d.cobertura+'"><span class="text-info txt-escondido">Cobertura: </span>'+d.cobertura+'</td>'+
																'<td class="td_vehiculo_actual" value="'+d.descripcion+'"><span class="text-info txt-escondido">Vehículo: </span>'+d.descripcion+'</td>'+
																'<td class="td_tarifa_por_dia_actual" value="'+d.tarifa_por_dia+'"><span class="text-info txt-escondido">Tarifa por día: </span>'+accounting.formatMoney(d.tarifa_por_dia)+'</td>'+
                '<td><span class="editar-d-a btn btn-sm btn-info" title="Editar" value="'+d.id+'"><span class="glyphicon glyphicon-edit"></span></span></td>'+
													   '<td><span class="quitar-d-a btn btn-sm btn-danger" title="Eliminar" value="'+d.id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
											     '</tr>';
												
																body_edit.prepend(nueva_fila_edit);
								
								
								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			
			
			//Limpiamos
			$('#select-tarifa-grupo-edit').html('');
			$('#select-tarifa-cobertura-edit').html('');
			$('#select-tarifa-vehiculo-edit').html('');
			$('#tarifa-por-dia-edit').val('');

	});
	
		$(document).on('click', '#no-add-tarifa-detalle-edit', function(){
			
					$('#select-tarifa-grupo-edit').html('');
		   $('#select-tarifa-cobertura-edit').html('');
			  $('#select-tarifa-vehiculo-edit').html('');
			  $('#tarifa-por-dia-edit').val('');

					$('.error-tarifa-grupo-edit').removeClass('has-error has-feedback');

					$('.error-tarifa-cobertura-edit').removeClass('has-error has-feedback');

					$('.error-tarifa-vehiculo-edit').removeClass('has-error has-feedback');

					$('.error-tarifa-por-dia-edit').removeClass('has-error has-feedback');
					$('.icon-tarifa-por-dia-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');

	});
	
	
	//quitar tarifa detalle
		$(document).on('click', '.eliminar-btn-detalle-edit', function(){
			id = $(this).attr('value');
			
			$('#modal-confirm-delete-tarifa-detalle').modal({
				show:'false',
			});
			
			$('#confirm-delete-tarifa-detalle').attr('value', id);
			
			return false;
	});
	
	$(document).on('click', '#confirm-delete-tarifa-detalle', function(){
			id = $(this).attr('value');
		 $('#fila_nueva_'+id).remove();
	});
	
	
	
	/**********************************************************************************************************************/
	
	/******** Editar tarifa detalle *******************************/
	$(document).on('click', '.editar-d-a', function(){
			
		id = $(this).attr('value');
		id_tarifa = $('#id_tarifa').attr('value');
		
		$('#add-tarifa-detalle-edit-detalle').attr('value', id);
		$('#add-tarifa-detalle-edit-detalle').attr('data-id', id_tarifa);
		
		$('#modal-tarifa-detalle-edit-detalle').modal({
			show:'false',
		});
		
		
		
					//Listamos los grupos
			 $.ajax({
								url:  "/admin/selectgruposeditdetalle",
								type: "GET",
					   data:{id: id},
							success: function(e){
								     	option = "";
              s = $('#select-tarifa-grupo-edit-detalle');
									
															option += '<option value="'+e.x_a[0].id+'">'+e.x_a[0].descripcion_grupo+'</option>';
              for(datos in e.grupos){

																			option += '<option value="'+e.grupos[datos].id+'">'+e.grupos[datos].descripcion_grupo+'</option>';
																}

																s.append(option);
								
								      //Campo escondido ---
														$('#inp-tarifa-grupo-edit-detalle').attr('value', e.x_a[0].id);
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		

		
			//Listamos las coberturas
					  $.ajax({
								url:  "/admin/selectcoberturaseditdetalle",
								type: "GET",
					   data:{id: id},
							success: function(e){
								     	option = "";
              s = $('#select-tarifa-cobertura-edit-detalle');
									
															option += '<option value="'+e.x_a[0].id+'">'+e.x_a[0].cobertura+'</option>';
              for(datos in e.coberturas){

																			option += '<option value="'+e.coberturas[datos].id+'">'+e.coberturas[datos].cobertura+'</option>';
																}

																s.append(option);
								
																//Campo escondido ---
														$('#inp-tarifa-cobertura-edit-detalle').attr('value', e.x_a[0].id);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		//Listamos los vehiculos
					 $.ajax({
								url:  "/admin/selectvehiculoseditdetalle",
								type: "GET",
					   data:{id: id},
							success: function(e){
								     	option = "";
              s = $('#select-tarifa-vehiculo-edit-detalle');
															
															if(e.x_a[0].transmision == 1){
															       option += '<option value="'+e.x_a[0].id+'">'+e.x_a[0].descripcion+' Automático</option>';
																
															} else {
																 option += '<option value="'+e.x_a[0].id+'">'+e.x_a[0].descripcion+' Estándard</option>';
															}
								
              for(datos in e.vehiculos){
															
																			if(e.vehiculos[datos].transmision == 1){
																			    option += '<option value="'+e.vehiculos[datos].id+'">'+e.vehiculos[datos].descripcion+' Automático</option>';
																				
																			} else {
																				 option += '<option value="'+e.vehiculos[datos].id+'">'+e.vehiculos[datos].descripcion+' Estándard</option>';
																			}
															
																}

																s.append(option);
								
																//Campo escondido ---
													 	$('#inp-tarifa-vehiculo-edit-detalle').attr('value', e.x_a[0].id);
								
								
															//tarifa por dia
															$('#tarifa-por-dia-edit-detalle').val(e.tarifa.tarifa_por_dia);
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		return false;
		
	});
	
	$('#select-tarifa-grupo-edit-detalle').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-grupo-edit-detalle').attr('value', id);
	});
	
	$('#select-tarifa-codigo-edit-detalle').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-codigo-edit-detalle').attr('value', id);
	});
	
	$('#select-tarifa-cobertura-edit-detalle').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-cobertura-edit-detalle').attr('value', id);
	});
	
		$('#select-tarifa-vehiculo-edit-detalle').on('change',function(){
		id = $(this).val();
		$('#inp-tarifa-vehiculo-edit-detalle').attr('value', id);
	});
	
	
		$(document).on('click', '#add-tarifa-detalle-edit-detalle', function(){
			id = $(this).attr('value');
			id_tarifa = $(this).attr('data-id');
			grupo = $('#inp-tarifa-grupo-edit-detalle').attr('value');
			cobertura = $('#inp-tarifa-cobertura-edit-detalle').attr('value');
			vehiculo = $('#inp-tarifa-vehiculo-edit-detalle').attr('value');
			tarifa_por_dia = $('#tarifa-por-dia-edit-detalle').val();
			
			$.ajax({
								url:  "/admin/actualizardetalle",
								type: "GET",
					   data:{id: id, id_tarifa: id_tarifa, grupo: grupo, cobertura: cobertura, vehiculo: vehiculo, tarifa_por_dia: tarifa_por_dia},
							success: function(d){

												$('#fila_edit_'+id).replaceWith('<tr class="tr_actual" id="fila_edit_'+d.id+'">'+
                '<td class="td_grupo_actual" value="'+d.descripcion_grupo+'"><span class="text-info txt-escondido">Grupo: </span>'+d.descripcion_grupo+'</td>'+
																'<td class="td_cobertura_actual" value="'+d.cobertura+'"><span class="text-info txt-escondido">Cobertura: </span>'+d.cobertura+'</td>'+
																'<td class="td_vehiculo_actual" value="'+d.descripcion+'"><span class="text-info txt-escondido">Vehículo: </span>'+d.descripcion+'</td>'+
																'<td class="td_tarifa_por_dia_actual" value="'+d.tarifa_por_dia+'"><span class="text-info txt-escondido">Tarifa por día: </span>'+accounting.formatMoney(d.tarifa_por_dia)+'</td>'+
                '<td><span class="editar-d-a btn btn-sm btn-info" title="Editar" value="'+d.id+'"><span class="glyphicon glyphicon-edit"></span></span></td>'+
													   '<td><span class="quitar-d-a btn btn-sm btn-danger" title="Eliminar" value="'+d.id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
											     '</tr>');
								
								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
			
			
			//Limpiamos
			$('#select-tarifa-grupo-edit-detalle').html('');
			$('#select-tarifa-cobertura-edit-detalle').html('');
			$('#select-tarifa-vehiculo-edit-detalle').html('');
			$('#tarifa-por-dia-edit-detalle').val('');

	});
	
		$(document).on('click', '#no-add-tarifa-detalle-edit-detalle', function(){
			
					$('#select-tarifa-grupo-edit-detalle').html('');
		   $('#select-tarifa-cobertura-edit-detalle').html('');
			  $('#select-tarifa-vehiculo-edit-detalle').html('');
			  $('#tarifa-por-dia-edit-detalle').val('');

					$('.error-tarifa-por-dia-edit-detalle').removeClass('has-error has-feedback');
					$('.icon-tarifa-por-dia-edit-detalle').removeClass('glyphicon glyphicon-remove form-control-feedback');

	});
	
	/**********************************************************************************************************************/
	
	
	
	//Actualizar tarifa--------
	
	$(document).on('click', '#inp-check-edit', function(){
		if($(this).prop("checked") == true){
				$('#inp-check-edit').attr('value', '1');
		} else {
				$('#inp-check-edit').attr('value', '0');
		}
});
	
	$(document).on('click', '#add-tarifa-edit', function(){
		
		 id = $(this).attr('value');
			oficina = $('#select_oficina_edit').val();
	 	fehca_inicio = $('#fecha_inicio_edit').val();
		 fecha_fin = $('#fecha_fin_edit').val();
		 estatus = $('#inp-check-edit').val();
		
		tabla_a = $('#listar_');
		
		$.ajax({
								url:  "/admin/actualizartarifa",
								type: "GET",
								data:{id: id, oficina: oficina, fehca_inicio: fehca_inicio, fecha_fin: fecha_fin, estatus: estatus},
								success: function(t){
									
									$('#fila_'+id).replaceWith('<tr id="fila_'+t.id+'">'+
            '<td><span class="text-info txt-escondido">Id: </span>'+t.id+'</td>'+
												'<td><span class="text-info txt-escondido">Oficina: </span>'+t.nombre+'</td>'+ 
												'<td><span class="text-info txt-escondido">Fecha inicio: </span>'+t.fecha_inicio+'</td>'+
												'<td><span class="text-info txt-escondido">Fecha fin: </span>'+t.fecha_fin+'</td>'+
												'<td><span class="text-info txt-escondido">Estatus: </span><span class="estatus_'+t.estatus+'"></span></td>'+
												'<td>'+
											   '<button class="btn btn-sm btn-info editar-btn" value="'+t.id+'" title="Editar tarifa">'+
																 '<span class="glyphicon glyphicon-edit"></span>'+
														'</button>'+
											'</td>'+
											'<td>'+
											  '<button class="btn btn-sm btn-danger eliminar-btn" value="'+t.id+'" title="Eliminar tarifa">'+
																					 '<span class="glyphicon glyphicon-remove"></span>'+
													'</button>'+
											'</td>'+
									'</tr>');
										
										
										alertas("success","Tarifa actualizada correctamente.");
									
									$('.estatus_0').text('Inactivo');
									$('.estatus_0').addClass('text-danger');
									$('.estatus_1').text('Activo');
									$('.estatus_1').addClass('text-success');
										
									
								$('#select_oficina_edit').html('');
	 	     $('#fecha_inicio_edit').val('');
		      $('#fecha_fin_edit').val('');
									$('#body-tarifa-detalle-edit').html('');
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
	
	
	
	$(document).on('click', '#no-add-tarifa-edit', function(){
				$('#select_oficina_edit').html('');
	 	 $('#fecha_inicio_edit').val('');
		  $('#fecha_fin_edit').val('');
				$('#body-tarifa-detalle-edit').html('');
	});
	
	
	
	//Validaciones --------------------------------------------------------
	
	/*****************
	------Validaciones al agregar tarifa
	******************************************************************/
	  $("#add-tarifa").click(function () {

      if($("#select_oficina").val() == 0){
														$('.error-oficina').addClass('has-error has-feedback');
							       $('.icon-oficina').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	  $("#add-tarifa").click(function () {

      if($("#fecha_inicio").val().length  == 0){
              $('.error-fecha_inicio').addClass('has-error has-feedback');
							       $('.icon-fecha_inicio').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-tarifa").click(function () {

      if($("#fecha_fin").val().length  == 0){
              $('.error-fecha_fin').addClass('has-error has-feedback');
							       $('.icon-fecha_fin').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	 

	
	//cuanso se aga el foco en el input eliminamos lso errores
	
	$("#select_oficina").change(function () {
      $('.error-oficina').removeClass('has-error has-feedback');
});
	
	
	
	$("#fecha_inicio").focus(function () {
      $('.error-fecha_inicio').removeClass('has-error has-feedback');
						$('.icon-fecha_inicio').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#fecha_fin").focus(function () {
      $('.error-fecha_fin').removeClass('has-error has-feedback');
						$('.icon-fecha_fin').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	/*****************
	------Validaciones al agregar el detalle de la tarifa
	******************************************************************/
	  $("#add-tarifa-detalle").click(function () {

      if($("#select-tarifa-grupo").val() == 0){
														$('.error-tarifa-grupo').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	  $("#add-tarifa-detalle").click(function () {

      if($("#select-tarifa-codigo").val() == 0){
														$('.error-tarifa-codigo').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-tarifa-detalle").click(function () {

      if($("#select-tarifa-cobertura").val() == 0){
														$('.error-tarifa-cobertura').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-tarifa-detalle").click(function () {

      if($("#select-tarifa-vehiculo").val() == 0){
														$('.error-tarifa-vehiculo').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	

		  $("#add-tarifa-detalle").click(function () {

      if($("#tarifa-por-dia").val().length  == 0){
              $('.error-tarifa-por-dia').addClass('has-error has-feedback');
							       $('.icon-tarifa-por-dia').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	$("#select-tarifa-grupo").change(function () {
      $('.error-tarifa-grupo').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-codigo").change(function () {
      $('.error-tarifa-codigo').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-cobertura").change(function () {
      $('.error-tarifa-cobertura').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-vehiculo").change(function () {
      $('.error-tarifa-vehiculo').removeClass('has-error has-feedback');
});
	
	
	$("#tarifa-por-dia").focus(function () {
      $('.error-tarifa-por-dia').removeClass('has-error has-feedback');
						$('.icon-tarifa-por-dia').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
		
	
	
	/*****************
	------Validaciones al editar tarifa
	******************************************************************/
	  $("#add-tarifa-edit").click(function () {

      if($("#select_oficina_edit").val() == 0){
														$('.error-oficina_edit').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	  $("#add-tarifa-edit").click(function () {

      if($("#fecha_inicio_edit").val().length  == 0){
              $('.error-fecha_inicio_edit').addClass('has-error has-feedback');
							       $('.icon-fecha_inicio_edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-tarifa-edit").click(function () {

      if($("#fecha_fin_edit").val().length  == 0){
              $('.error-fecha_fin_edit').addClass('has-error has-feedback');
							       $('.icon-fecha_fin_edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	

	
	$("#select_oficina_edit").change(function () {
      $('.error-oficina_edit').removeClass('has-error has-feedback');
});
	
	
	
	$("#fecha_inicio_edit").focus(function () {
      $('.error-fecha_inicio_edit').removeClass('has-error has-feedback');
						$('.icon-fecha_inicio_edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	$("#fecha_fin_edit").focus(function () {
      $('.error-fecha_fin_edit').removeClass('has-error has-feedback');
					 $('.icon-fecha_fin_edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	

/*****************
	------Validaciones al agregar el detalle de la tarifa al editar
	******************************************************************/
	  $("#add-tarifa-detalle-edit").click(function () {

      if($("#select-tarifa-grupo-edit").val() == 0){
														$('.error-tarifa-grupo-edit').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	
	  $("#add-tarifa-detalle-edit").click(function () {

      if($("#select-tarifa-codigo-edit").val() == 0){
														$('.error-tarifa-codigo-edit').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});

	
	  $("#add-tarifa-detalle-edit").click(function () {

      if($("#select-tarifa-cobertura-edit").val() == 0){
														$('.error-tarifa-cobertura-edit').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	  $("#add-tarifa-detalle-edit").click(function () {

      if($("#select-tarifa-vehiculo-edit").val() == 0){
														$('.error-tarifa-vehiculo-edit').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	

		  $("#add-tarifa-detalle-edit").click(function () {

      if($("#tarifa-por-dia-edit").val().length  == 0){
              $('.error-tarifa-por-dia-edit').addClass('has-error has-feedback');
							       $('.icon-tarifa-por-dia-edit').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	$("#select-tarifa-grupo-edit").change(function () {
      $('.error-tarifa-grupo-edit').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-codigo-edit").change(function () {
      $('.error-tarifa-codigo-edit').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-cobertura-edit").change(function () {
      $('.error-tarifa-cobertura-edit').removeClass('has-error has-feedback');
});
	
	$("#select-tarifa-vehiculo-edit").change(function () {
      $('.error-tarifa-vehiculo-edit').removeClass('has-error has-feedback');
});
	
	
	$("#tarifa-por-dia-edit").focus(function () {
      $('.error-tarifa-por-dia-edit').removeClass('has-error has-feedback');
						$('.icon-tarifa-por-dia-edit').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
/*****************
	------Validaciones al agregar el detalle de la tarifa al editar el detalle
	******************************************************************/

	 $("#add-tarifa-detalle-edit-detalle").click(function () {

      if($("#tarifa-por-dia-edit-detalle").val().length  == 0){
              $('.error-tarifa-por-dia-edit-detalle').addClass('has-error has-feedback');
							       $('.icon-tarifa-por-dia-edit-detalle').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	
		
	
	$("#tarifa-por-dia-edit-detalle").focus(function () {
      $('.error-tarifa-por-dia-edit-detalle').removeClass('has-error has-feedback');
						$('.icon-tarifa-por-dia-edit-detalle').removeClass('glyphicon glyphicon-remove form-control-feedback');
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