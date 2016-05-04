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

<div class="seccion_tabla seccion_sucursal">
<div class="agregar">
	<button id="agregar-plaza" class="btn btn-primary" title="Agregar sucursal">
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
	<div class="tabla-sucursal">
			<table id="listar_" class="tabla_catalogo table-striped">
			<thead class="thead-tabla">
				<tr>
					<th class="cabecero">Sucursal</th>
					<th class="cabecero">Gerente</th>
					<th class="cabecero">Plaza</th>
					<th class="cabecero">Dirección 1</th>
					<th class="cabecero">Colonia</th>
					<th class="cabecero">Editar</th>
					<th class="cabecero">Eliminar</th>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
																						<label for="municipio" class="text-primary">Municipio: </label>
																						<input type="text" name="municipio" id="municipio" class="form-control" >
																						<span class="icon-municipio"></span>
																			</div>
																			
																			<div class="form-group error-cp">
																						<label for="cp" class="text-primary">CP: </label>
																						<input type="text" name="cp" id="cp" class="form-control" >
																						<span class="icon-cp"></span>
																			</div>
																	
													</div>
															
															<div class="content-t">
															
																<div class="form-group form-textarea">
																			<label for="referencia" class="text-primary">Referencias: </label>
																			<textarea id="referencia" class="form-control" rows="4"></textarea>
																</div>
																
																<div class="contenedor-tel-add">
																		<div class="content-add-t">
																					<h3 class="add-tel-txt">Agregar teléfono:</h3>
																					<button id="ad-nuevo-t" class="btn-add-t btn btn-primary btn-xs" title="Agregar teléfono">
																									<span class="glyphicon glyphicon-plus"></span>
																					</button>
																		</div>
																	
																		<div class="content-datos c-d">
																				
																				<table class="table table-tel">
																						<thead>
																							<tr>
																								<th>
																									<span class="text-info">Tipo:</span>
																								</th>
																								<th>
																									<span class="text-info">Numero:</span>
																								</th>
																								<th>
																									<span class="text-info">Quitar:</span>
																								</th>
																							</tr>
																						</thead>
																						<tbody id="c-d-telefonos">
																						</tbody>
																				</table>
																		
																		</div><!--END CONTENT DATOS-->
																</div>
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
    
    
        <!--  Modal para agregar telefono  -->
<div id="modal-add-tel" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar teléfono
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
																			
																		<div class="form-group error-tel">
																			<label for="select_tel" class="text-primary">Tipo teléfono: </label>
																							<select class="form-control" id="select_tel">
																						 </select>
																 	</div>
																	
																	 <div class="form-group error-numero">
																						<label for="numero" class="text-primary">Numero: </label>
																						<input type="text" name="numero" id="numero" class="form-control" >
																						<span class="icon-numero"></span>
																			</div>		
																			
																			<!--campos escondidos-->		
																			<input type="text" id="idtel" class="hidden" >			
																			<input type="text" id="tipotel" class="hidden" >										
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-tel" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-tel" class="btn btn-primary" data-dismiss="modal" >
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
																						<label for="municipio_edit" class="text-primary">Municipio: </label>
																						<input type="text" name="municipio_edit" id="municipio_edit" class="form-control" >
																						<span class="icon-municipio-edit"></span>
																			</div>
																			
																			<div class="form-group error-cp-edit">
																						<label for="cp_edit" class="text-primary">CP: </label>
																						<input type="text" name="cp_edit" id="cp_edit" class="form-control" >
																						<span class="icon-cp-edit"></span>
																			</div>
																	
													</div>
															
																									
													 <div class="content-t">
															
																<div class="form-group form-textarea">
																			<label for="referencia_edit" class="text-primary">Referencias: </label>
																			<textarea id="referencia_edit" class="form-control" rows="4"></textarea>
																</div>
																
																<div class="contenedor-tel-add">
																		<div class="content-add-t">
																					<h3 class="add-tel-txt-s">Agregar teléfono:</h3>
																					<button id="ad-nuevo-t-s" class="btn-add-t-s btn btn-primary btn-xs" title="Agregar teléfono">
																									<span class="glyphicon glyphicon-plus"></span>
																					</button>
																		</div>
																	
																		<div class="content-datos-edit">
																				
																				<table class="table table-tel-edit">
																						<thead>
																							<tr>
																								<th>
																									<span class="text-info">Tipo:</span>
																								</th>
																								<th>
																									<span class="text-info">Numero:</span>
																								</th>
																								<th>
																									<span class="text-info">Quitar:</span>
																								</th>
																							</tr>
																						</thead>
																						<tbody id="c-d-telefonos-edit">
																						</tbody>
																				</table>
																				
																		
																		</div><!--END CONTENT DATOS-->
																</div>
															</div><!--END content-t-->
																
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-aact-sucursal-edi" type="button" class="btn btn-danger" data-dismiss="modal">
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
    
    
            <!--  Modal para agregar telefono al editar sucursal -->
<div id="modal-add-tel-edit-s" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-plus"></span>
               Agregar teléfono
            </h4>
          </div>
          <div class="modal-body body-modal">

            <form class="form-modal" action="">
																			
																		<div class="form-group error-tel-s">
																			<label for="select_tel" class="text-primary">Tipo teléfono: </label>
																							<select class="form-control" id="select_tel_s">
																						 </select>
																 	</div>
																	
																	 <div class="form-group error-numero-s">
																						<label for="numero_s" class="text-primary">Numero: </label>
																						<input type="text" name="numero_s" id="numero_s" class="form-control" >
																						<span class="icon-numero-s"></span>
																			</div>		
																			
																			<!--campos escondidos-->		
																			<input type="text" id="idtel-s" class="hidden" >			
																			<input type="text" id="tipotel-s" class="hidden" >										
													 
            </form>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-add-tel-edit-s" type="button" class="btn btn-danger" data-dismiss="modal">
																	Cancelar
															</button>
															<span id="add-tel-edit-s" class="btn btn-primary" data-dismiss="modal" >
																		Agregar
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
    
 
          <!--  Modal para confirmar eliminar telefono  -->
<div id="modal-confirm-delete-telefono" class="modal fade" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title text-center">
              <span class="glyphicon glyphicon-trash"></span>
               Eliminar teléfono
            </h4>
          </div>
          <div class="modal-body body-modal">

             <h3 class="txt-delete-confirm text-danger text-center">¿Estás seguro que deseas eliminar este teléfono?</h3>
                
          </div>
          <div class="modal-footer">
													
											 		<div class="footer-modal">
																<button id="no-quitar" type="button" class="btn btn-danger" data-dismiss="modal">
																	No
															</button>
															<span id="confirm-delete-tel-s" class="btn btn-primary" data-dismiss="modal" >
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
																															'<span class="text-info txt-escondido">Sucursal: </span><span class="hidden">'+l[i].created_at+'</span>'+l[i].nombre_sucursal,
																															'<span class="text-info txt-escondido">Gerente: </span>'+l[i].nombre,
																															'<span class="text-info txt-escondido">Plaza: </span>'+l[i].nombre_plaza,
																															'<span class="text-info txt-escondido">Dirección 1: </span>'+l[i].direccion1,
																															'<span class="text-info txt-escondido">Colonia: </span>'+l[i].colonia,
																															'<button class="btn btn-sm btn-info editar-btn" value="'+l[i].id+'" title="Editar sucursal">'+
																					            '<span class="glyphicon glyphicon-edit"></span>'+
																					          '</button>',
																															'<button class="btn btn-sm btn-danger eliminar-btn" value="'+l[i].id+'" title="Eliminar sucursal">'+
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
	
	//Agregar teleono a la sucursal
	$(document).on('click', '#ad-nuevo-t', function(){
			$('#modal-add-tel').modal({
      show: 'false',
    });
				
						//Listamos tipos de telefonos
			 $.ajax({
								url:  "/admin/selectelefonos",
								type: "GET",
								success: function(p){
																			
								     	option = "";
              s = $('#select_tel');
									
																		option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.tel){

																			option += '<option value="'+p.tel[datos].id+'" class="'+p.tel[datos].nombre+'">'+p.tel[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		
		return false;
	});
	
	$('#select_tel').on('change',function(){
		
		tipo = $(this).val();
		$('#idtel').attr('value', tipo);
		tipo_nombre = $('#select_tel option:selected').text();
		$('#tipotel').attr('value', tipo_nombre);
		
	});
	
	$(document).on('click', '#add-tel', function(){
		id = $('#idtel').attr('value');
		tipo = $('#tipotel').attr('value');
		numero = $('#numero').val();
		
		//Mostramos la seccion de los telefonos
		$('.content-datos').removeClass('c-d');
		
		//Le cambiamos el texto
		$('.add-tel-txt').text('Agregar otro teléfono:');
		
		//Agregamos los telefonos
		$('#c-d-telefonos').append('<tr id="telefono_'+id+'">'+
																													  '<td value="'+id+'">'+tipo+'</td>'+
																													  '<td class="numero" value="'+numero+'">'+numero+'</td>'+
																													  '<td><span class="quitar btn btn-xs btn-danger" value="'+id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
																													'</tr>');
		
		
		//Limpiamos los campos
		$('#select_tel').html('');
		$('#numero').val('');
		
	});
	
	
	//quitar telefono 
		$(document).on('click', '.quitar', function(){
			id = $(this).attr('value');
			
			$('#modal-confirm-delete-telefono').modal({
				show:'false',
			});
			
			$('#confirm-delete-tel-s').attr('value', id);
			
	});
	
	$(document).on('click', '#confirm-delete-tel-s', function(){
			id = $(this).attr('value');
			
		 $('#telefono_'+id).remove();
	});
	
	
	$(document).on('click', '#no-add-tel', function(){
		$('#select_tel').html('');
		$('#numero').val('');
		
  $('.error-tel').removeClass('has-error has-feedback');
		
  $('.error-numero').removeClass('has-error has-feedback');
		$('.icon-numero').removeClass('glyphicon glyphicon-remove form-control-feedback');

	
		
		
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
												'<td><span class="text-info txt-escondido">Sucursal: </span><span class="hidden">'+s.created_at+'</span>'+s.nombre_sucursal+'</td>'+
												'<td><span class="text-info txt-escondido">Gerente: </span>'+s.nombre+'</td>'+
												'<td><span class="text-info txt-escondido">Plaza: </span>'+s.nombre_plaza+'</td>'+
												'<td><span class="text-info txt-escondido">Dirección 1: </span>'+s.direccion1+'</td>'+
												'<td><span class="text-info txt-escondido">Colonia: </span>'+s.colonia+'</td>'+
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
									
									registrartelefonosucursal(s.id);
										
										alertas("success","Sucursal "+s.nombre_sucursal+" agregada correctamente.");
										
									
									
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
								$('#c-d-telefonos').html('');
								$('.content-datos').addClass('c-d');
									
								//Le regresamos el nombre
								$('.add-tel-txt').text('Agregar teléfono:');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
	});
	
	
	
	function registrartelefonosucursal(id){
		
		var DATA = [];
		
		$('.table-tel tbody tr').each(function(){
							id_s = id;
							id_t  = $(this).find("td").attr('value');
							numero  = $(this).find("td[class*='numero']").attr('value');

							datos = {id_s, id_t, numero};

							DATA.push(datos);
			
  });
		
		
		if(DATA == ''){

		} else {

			   aInfo = JSON.stringify(DATA);
			
						$.ajax({
								url:  "/admin/agregartelefonosucursal",
								type: "POST",
								data:{aInfo: aInfo, id: id},
								success: function(s){
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		}
		
		
		
		
		
	}//end functiom
	
	
	
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
			   $('#c-d-telefonos').html('');
						$('.content-datos').addClass('c-d');
			
			   //Le regresamos el nombre
						$('.add-tel-txt').text('Agregar teléfono:');
			
			
      $('.error-sucursal').removeClass('has-error has-feedback');
						$('.icon-sucursal').removeClass('glyphicon glyphicon-remove form-control-feedback');

      $('.error-gerente').removeClass('has-error has-feedback');

      $('.error-plaza').removeClass('has-error has-feedback');

      $('.error-direccion1').removeClass('has-error has-feedback');
						$('.icon-direccion1').removeClass('glyphicon glyphicon-remove form-control-feedback');

      $('.error-colonia').removeClass('has-error has-feedback');
						$('.icon-colonia').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
      $('.error-estado').removeClass('has-error has-feedback');
						$('.icon-estado').removeClass('glyphicon glyphicon-remove form-control-feedback');
	
      $('.error-municipio').removeClass('has-error has-feedback');
						$('.icon-municipio').removeClass('glyphicon glyphicon-remove form-control-feedback');

      $('.error-cp').removeClass('has-error has-feedback');
						$('.icon-cp').removeClass('glyphicon glyphicon-remove form-control-feedback');
			
			
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
			
			
			
			
			//Listar los telefonos de la sucursal
			$.ajax({
								url:  "/admin/listarteleditar",
								type: "GET",
					   data:{id: id},
								success: function(t){
											
									if(t.t_s == ''){
											//console.log('esta vacio');
										} else {
													$('.content-datos-edit').show();
												tabla = $('#c-d-telefonos-edit');
												fila = "";

											for(datos in t.t_s){

												fila += '<tr class="tr_actual" id="phone_'+t.t_s[datos].id+'">'+
													'<td class="tel_actual" value="'+t.t_s[datos].tipo_tel_id+'" id="'+t.t_s[datos].id+'"><select class="s_num" id="select_numero_'+t.t_s[datos].tipo_tel_id+'">'+
													'</select></td>'+
													'<td><input class=" inp-edit-num" type="text" value="'+t.t_s[datos].numero+'"></td>'+
													'<td><span class="quitar-p btn btn-xs btn-danger" value="'+t.t_s[datos].id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
													'</tr>';


												listartelselect(t.t_s[datos].tipo_tel_id);

											}//end for

											tabla.append(fila);
										}
									
									

								},
			
								error: function(){
									alert('failure');
								}
																
					});
					
					
					function listartelselect(id){
						$.ajax({
								url:  "/admin/listartelselectedit",
								type: "GET",
					   data:{id: id},
								success: function(t){

									 option = "";
              s = $('#select_numero_'+t.tel_a[0].id);
									
														option += '<option value="'+t.tel_a[0].id+'">'+t.tel_a[0].nombre+'</option>';
              for(datos in t.tel){

																			option += '<option value="'+t.tel[datos].id+'">'+t.tel[datos].nombre+'</option>';
																}

																s.append(option);
									

								},
			
								error: function(){
									alert('failure');
								}
																
					});
					}
					

			
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
	
	
		//Agregar teleono al editar sucursal
	$(document).on('click', '#ad-nuevo-t-s', function(){
			$('#modal-add-tel-edit-s').modal({
      show: 'false',
    });
				
						//Listamos tipos de telefonos
			 $.ajax({
								url:  "/admin/selectelefonos",
								type: "GET",
								success: function(p){
								     	option = "";
              s = $('#select_tel_s');
									
																		option += '<option value="0">-- Seleccione --</option>';
              for(datos in p.tel){

																			option += '<option value="'+p.tel[datos].id+'" class="'+p.tel[datos].nombre+'">'+p.tel[datos].nombre+'</option>';
																}

																s.append(option);

								},
			
								error: function(){
									alert('failure');
								}
																
					});
		
		
		return false;
	});
	
	
	
		$('#select_tel_s').on('change',function(){
		
		tipo = $(this).val();
		$('#idtel-s').attr('value', tipo);
		tipo_nombre = $('#select_tel_s option:selected').text();
		$('#tipotel-s').attr('value', tipo_nombre);
		
	});
	
	$(document).on('click', '#add-tel-edit-s', function(){
		id = $('#idtel-s').attr('value');
		tipo = $('#tipotel-s').attr('value');
		numero = $('#numero_s').val();
		
		$('.content-datos-edit').show();
		
		//Mostramos la seccion de los telefonos
		//$('.content-datos').removeClass('c-d');
		
		//Le cambiamos el texto
		$('.add-tel-txt-s').text('Agregar otro teléfono:');
		
		//Agregamos los telefonos
		$('#c-d-telefonos-edit').append('<tr class="tr" id="telefonoedit_'+id+'">'+
																													  '<td class="text-info n_val" value="'+id+'">'+tipo+'</td>'+
																													  '<td class=" text-info n_numero" value="'+numero+'">'+numero+'</td>'+
																													  '<td><span class="quitar btn btn-xs btn-danger" value="'+id+'"><span class="glyphicon glyphicon-remove"></span></span></td>'+
																													'</tr>');
		
		
		//Limpiamos los campos
		$('#select_tel_s').html('');
		$('#numero_s').val('');
		
		
	});
	
	
	//quitar telefono
		$(document).on('click', '.quitar', function(){
			id = $(this).attr('value');
			
			$('#modal-confirm-delete-telefono').modal({
				show:'false',
			});
			
			$('#confirm-delete-tel-s').attr('value', id);
		 
	});
	
	
	$(document).on('click', '#confirm-delete-tel-s', function(){
			id = $(this).attr('value');
			
		 $('#telefonoedit_'+id).remove();
	});
	
			$(document).on('click', '#no-quitar', function(){
				
			  $('#confirm-delete-tel-s').removeClass('delete-p');
		 
	});
	
	//Eliminar los telefonos que ya estaban agregados
		$(document).on('click', '.quitar-p', function(){
			id = $(this).attr('value');

			$('#modal-confirm-delete-telefono').modal({
				show:'false',
			});
			
			$('#confirm-delete-tel-s').attr('value', id);
			$('#confirm-delete-tel-s').addClass('delete-p');
		 
	});
	
		$(document).on('click', '.delete-p', function(){
			id = $(this).attr('value');
			
							 $.ajax({
								url:  "/admin/elimarteledit",
								type: "GET",
								data:{id: id},
								success: function(p){
										
											$('#phone_'+id).remove();
											$('#confirm-delete-tel-s').removeClass('delete-p');
								},
			
								error: function(){
									alert('failure');
								}
																
					});
			
		 
	});
	
	
	
	$(document).on('click', '#no-add-tel-edit-s', function(){
		$('#select_tel_s').html('');
		$('#numero_s').val('');
		
  $('.error-tel-s').removeClass('has-error has-feedback');
	
  $('.error-numero-s').removeClass('has-error has-feedback');
  $('.icon-numero-s').removeClass('glyphicon glyphicon-remove form-control-feedback');

	
		
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
               '<td><span class="text-info txt-escondido">Sucursal: </span><span class="hidden">'+s.created_at+'</span>'+s.nombre_sucursal+'</td>'+
												'<td><span class="text-info txt-escondido">Gerente: </span>'+s.nombre+'</td>'+
												'<td><span class="text-info txt-escondido">Plaza: </span>'+s.nombre_plaza+'</td>'+
												'<td><span class="text-info txt-escondido">Dirección 1: </span>'+s.direccion1+'</td>'+
												'<td><span class="text-info txt-escondido">Colonia: </span>'+s.colonia+'</td>'+
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
										
												registrartelefonosucursaledit(s.id);
									
												actualizartelefonosucursaledit(s.id);
										
										alertas("success","Sucursal "+s.nombre_sucursal+" actualizada correctamente.");
										
									
								$('.add-tel-txt-s').text('Agregar teléfono');
		     	$('#c-d-telefonos-edit').html('');
								$('.content-datos-edit').hide();
									
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
	});
	
	//Registramos los nuevos telefonos agregados	
	function registrartelefonosucursaledit(id){
		
		var DATA = [];
		
		$('.table-tel-edit tbody .tr').each(function(){
							id_s = id;
							id_t  = $(this).find("td[class*='n_val']").attr('value');
							numero  = $(this).find("td[class*='n_numero']").attr('value');
							datos = {id_s, id_t, numero};

							DATA.push(datos);
			
  });
		
		
		if(DATA == ''){

		} else {

			   aInfo = JSON.stringify(DATA);
			
						$.ajax({
								url:  "/admin/agregartelefonosucursal",
								type: "POST",
								data:{aInfo: aInfo, id: id},
								success: function(s){
									console.log('Telefonos registrados');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		}
		
	}//end functiom
	
	
		//Actualizar los telefonos que ya estaban agregados
	function actualizartelefonosucursaledit(id){
		
		var DATA = [];
		
		$('.table-tel-edit tbody .tr_actual').each(function(){
							id_s = id;
			
							//obtenemos el id del telefono de la sucursal
							id_t_s  = $(this).find("td[class*='tel_actual']").attr('id');
			
						//nuevo valor id
			   id_n  = $(this).find('.s_num option:selected').attr('value');
		   	//$('#select_tel option:selected').text();
			
							//numero actual
							numero  = $(this).find("input[class*='inp-edit-num']").val();
			
							datos = {id_s, id_t_s, id_n, numero};

							DATA.push(datos);
			
  });
		
		
		if(DATA == ''){

		} else {

			   aInfo = JSON.stringify(DATA);
			
						$.ajax({
								url:  "/admin/actualizartelefonosucursal",
								type: "POST",
								data:{aInfo: aInfo, id: id},
								success: function(s){
									console.log('Telefonos registrados');
									
								},
			
								error: function(){
									alert('failure');
								}
																
					});
		}
		
	}//end functiom
	
	
	$(document).on('click', '#no-aact-sucursal-edi', function(){
			$('.add-tel-txt-s').text('Agregar teléfono');
			$('#c-d-telefonos-edit').html('');
		 $('.content-datos-edit').hide();
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
	

	
	
	
	
	/*****************
	------Validaciones al agregar un telefono
	******************************************************************/
		  $("#add-tel").click(function () {

      if($("#select_tel").val() == 0){
              $('.error-tel').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	  $("#add-tel").click(function () {

      if($("#numero").val().length == 0){
														$('.error-numero').addClass('has-error has-feedback');
							       $('.icon-numero').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	

	
//Foco----
	$("#select_tel").change(function () {
      $('.error-tel').removeClass('has-error has-feedback');
});
	
	$("#numero").focus(function () {
      $('.error-numero').removeClass('has-error has-feedback');
						$('.icon-numero').removeClass('glyphicon glyphicon-remove form-control-feedback');
});
	
	
	
	
	/*****************
	------Validaciones al agregar un telefono al editar sucursal
	******************************************************************/
		  $("#add-tel-edit-s").click(function () {

      if($("#select_tel_s").val() == 0){
              $('.error-tel-s').addClass('has-error has-feedback');
              return false;

      }  else {
          return true;
      }
});
	
	
	  $("#add-tel-edit-s").click(function () {

      if($("#numero_s").val().length == 0){
														$('.error-numero-s').addClass('has-error has-feedback');
							       $('.icon-numero-s').addClass('glyphicon glyphicon-remove form-control-feedback');
              return false;

      }  else {
          return true;
      }
});
	

	
//Foco----
	$("#select_tel_s").change(function () {
      $('.error-tel-s').removeClass('has-error has-feedback');
});
	
	$("#numero_s").focus(function () {
      $('.error-numero-s').removeClass('has-error has-feedback');
						$('.icon-numero-s').removeClass('glyphicon glyphicon-remove form-control-feedback');
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