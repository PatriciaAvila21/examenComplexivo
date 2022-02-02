	<!-- Modal-edit -->
<div class="modal fade" id="editRowModal<?php echo $va['codcat']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
					Editar</span> 
					
				</h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			 <!-- INICIO MODEL-BODY -->
			<div class="modal-body">
		
				 
				<form  method="POST" action="../view/catalogoMedicina/obtener.php?codcat=<?php echo $va['codcat']; ?>">
							
				<!-- INICIO CLASS ROW -->	
					<div class="row">

						
						
					    <div class="col-sm-12">
						    <div class="form-group form-group-default">
								<label>Nombre del Medicamento</label>
					            <input type="text" class="form-control" name="nombre" value="<?php echo $va['nombre']; ?>">
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="form-group form-group-default">
								<label>Fecha de Elaboracion</label>
									<input type="date" class="form-control"  name="f_elavo" value="<?php echo $va['f_elavo']; ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group form-group-default">
								<label>Fecha de Caducidad</label>
									<input type="date" class="form-control"  name="f_caduci" value="<?php echo $va['f_caduci']; ?>">
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Fecha de ingreso del medicamento al sistema</label>
									<input type="date" class="form-control"  name="f_ingr" value="<?php echo $va['f_elavo']; ?>">
							</div>
						</div>

					</div>
					<!-- FIN CLASS ROW -->	
		    </div>
	     	<!-- FIN MODEL-BODY -->

	               <!-- INICIO DE LOS BOTONES EDITAR O CANCELAR -->
				     <div class="modal-footer no-bd">
				        	<button type="submit" name="editar" class="btn btn-primary">Editar</button>
			             	<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				    </div>

			     </form> 
		</div>
	</div>
</div>
									
									
<!-- ELIMINAR -->
<div class="modal fade" id="deleteRowModal<?php echo $va['codcat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"></h4></center>
            </div>
			
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<!--<h2 class="text-center">
					<?php echo $row['nombrep']; ?></h2>-->	
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="../view/pacientes/BorrarRegistro.php?codpaci=<?php echo $row['codpaci']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>
            </div>

        </div>
    </div>
</div>	
									
			<!-- Password-->	
<div class="modal fade" id="PassRowModal<?php echo $row['codpaci']; ?>"  aria-labelledby="myModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd">
				<h5 class="modal-title">
					<span class="fw-mediumbold">
					Password</span> 
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		
				 
				<form  method="POST" action="../view/pacientes/password.php?codpaci=<?php echo $row['codpaci']; ?>">
							
			<!--	<input class="form-control" name="codpaci" type="hidden" value="<?php echo $row->codpaci; ?>">-->
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group form-group-default">
								<label>Nueva contraseña</label>
						
						<input type="password" class="form-control" name="clave">
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="modal-footer no-bd">
					<button type="submit" name="editar" class="btn btn-primary">Editar
				
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>