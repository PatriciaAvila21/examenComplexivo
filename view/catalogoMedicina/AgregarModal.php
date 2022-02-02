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
						<form method="POST" autocomplete="off"  action="../view/catalogoMedicina/nuevo.php">
					<div class="row">

				
						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Nombre del medicamento</label>
								<input name="nombre" type="text" class="form-control" required placeholder="Nombre de la medicina">
							</div>
						</div>		

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha de Elaboracion</label>
								<input name="f_elavo" type="date" class="form-control" placeholder="Ingrese fecha">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Fecha de Caducidad</label>
								<input name="f_caduci" type="date" class="form-control" placeholder="Ingrese fecha">
							</div>
						</div>


						<div class="col-md-12">
							<div class="form-group form-group-default">
								<label>Fecha de ingreso al sisteman</label>
								<input name="f_ingr" type="date" class="form-control" placeholder="Ingrese fecha">
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