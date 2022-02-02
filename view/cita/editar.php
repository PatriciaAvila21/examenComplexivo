	<!-- Modalo-editar -->
	<div class="modal fade" id="editRowModal<?php echo $va['codcit']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">Editar</span> 
														
					</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
               <!-- INICIO MODEL-BODY -->	
				<div class="modal-body">
											 
					<form method="POST" action="../view/cita/obtener.php?codcit=<?php echo $va['codcit']; ?>">
						<!-- INICIO CLASS ROW -->									 	
						<div class="row">
                              <!-- FECHA -->
							<div class="col-sm-12">
							    <div class="form-group form-group-default">
									<label>Fecha</label>
											<input type="date" class="form-control"  name="dates" value="<?php echo $va['dates']; ?>">
								</div>
							</div>
								<!-- HORA -->							
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label>Hora</label>
										<input type="time" class="form-control" name="hour" value="<?php echo $va['hour']; ?>">
								</div>
							</div>
								<!-- PACIENTE -->							
							<div class="col-sm-12">
								<div class="form-group form-group-default" >
									<label>Paciente</label>   
										<select class="form-control" name="nomdoc">
											<option value=""><?php echo $va['nombrep']; ?></option>
										</select>      											         
								</div>
							</div>
							<!-- MEDICO -->								
							<div class="col-sm-12">
								<div class="form-group form-group-default" >
									<label>Médico</label>
										<select class="form-control" name="nomdoc">
										  <option value=""><?php echo $va['nomdoc']; ?></option>
										</select>
								</div>
						    </div>
								<!-- Consultorio -->							
				            <div class="col-sm-12">
								<div class="form-group form-group-default" >
									<label>Consultorio</label>
										<select class="form-control" name="nombrees">
											<option value=""><?php echo $va['nombrees']; ?></option>
										</select>
								</div>
							</div>
								<!-- MOTIVO DE CONSULTA -->																																				
							<div class="col-sm-12">
						        <div class="form-group form-group-default">
						            <label>Motivo de la consulta</label>
					                    <input type="text" class="form-control" name="motivocit" value="<?php echo $va['motivocit']; ?>">
						        </div>
						    </div>
	
						</div>
						<!-- FIN CLASS ROW -->									
													
				</div>
				<!-- FIN MODEL-BODY -->	
				
                <!-- INICIO DE LOS BOTONES EDITAR O CANCELAR -->	
				<div class="modal-footer no-bd">
					<button type="submit"  name="editar" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>

												</form>
											</div>
										</div>
									</div>
									
									
								<!-- Delete -->
<div class="modal fade" id="deleteRowModal<?php echo $va['codcit']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>

            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar está cita?</p>
				<h2 class="text-center"><?php echo $va['dates']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/cita/BorrarRegistro.php?codcit=<?php echo $va['codcit']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
				

								<!-- Delete -->
<div class="modal fade" id="updateRowModal<?php echo $va['codcit']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro activar el estado?</p>
				<h2 class="text-center"><?php echo $va['estado']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
				
                <a href="../view/cita/desactivar.php?codcit=<?php echo $va['codcit']; ?>" class="btn btn-success"><span class="fa fa-times"></span> Activar</a>
            </div>

        </div>
    </div>
</div>				
									