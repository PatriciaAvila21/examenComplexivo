<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Registro</h4></center>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>

			
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
						<form method="POST" autocomplete="off"  action="../view/pacientes/nuevo.php">
					<div class="row">

				
						<div class="col-sm-6">
							<div class="form-group form-group-default">
								<label>Cedula</label>
								<input name="dnipa" type="text" required class="form-control" maxlength="10" placeholder="Ingrese su cedula" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Nacionalidad</label>
				             	<select class="form-control" name="nacionalidad">
								 <option value="Peruana(o)">Peruana</option>
						<option value="Venezolana">Venezolana</option>
						<option value="Argentina">Argentina</option>
						<option value="Ecuatoriana">Ecuatoriana</option>
						<option value="Uruguaya">Uruguaya</option>
				                </select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Apellidos</label>
								<input name="apellidop" type="text" class="form-control" required placeholder="Ingrese apellidos">
							</div>
						</div>

						<div class="col-md-6 pr-0">
							<div class="form-group form-group-default">
								<label>Nombres</label>
								<input name="nombrep" type="text" class="form-control" required placeholder="Ingrese nombre">
							</div>
						</div>				

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha nacimiento</label>
								<input name="fechanaci" type="date" class="form-control" placeholder="Ingrese fecha">
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Seguro</label>
								<select class="form-control" name="seguro">
			                	<option value="Si">Si</option>
			                	<option value="No">No</option>
				            	</select>
							</div>
						</div>
								
					
						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Tel??fono</label>
								<input name="tele" type="text" class="form-control" required maxlength="10" placeholder="Ingrese tel??fono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Sexo</label>
				             	<select class="form-control" name="sexo">
				        		<option value="Masculino">Masculino</option>
					        	<option value="Femenino">Femenino</option>
				                </select>
							</div>
						</div>

	
									
						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Lugar de Residencia</label>
								<input name="residencia" type="text" class="form-control" required placeholder="Ingrese el lugar donde Usted vive">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Direccion</label>
								<input name="direccion" type="text" class="form-control" required placeholder="Ingrese el lugar donde Usted vive">
							</div>
						</div>

						<div class="modal-header">
               				<center><h4 class="modal-title" id="myModalLabel">Crear usuario del paciente</h4></center>
		                </div>
						
					    <div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Correo Electronico</label>
								<input name="email" type="text" class="form-control" required placeholder="Ingrese su correo">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Contrase??a</label>
								<input name="clave" type="password" class="form-control" required placeholder="Ingrese contrase??a">
							</div>
						</div>
						

						<div class="col-md-6" style="display:none;">
							<div class="form-group form-group-default">
								<label>Cargo</label>
								<select class="form-control" name="cargo">
							<option value="2">2</option>
							</select>
							</div>
						</div>
						


						<div class="col-md-6" style="display:none;">
							<div class="form-group form-group-default">
								<label>Estado</label>
								<select class="form-control" name="estado">
							 <option value="1">1</option>
							</select>
							</div>
						</div>
						
						

					</div>
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" onclick="funcionAlerta()" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->