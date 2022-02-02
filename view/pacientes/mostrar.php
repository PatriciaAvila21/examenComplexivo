<?php
  // Se prendio esta mrd :v
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
    header('location: ../login.php');
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pacientes</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>

	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../view/admin/admin.php" class="logo">
					<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Buscar ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
									Mensajes									
									<a href="#" class="small">Marcar todo como leido</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Manuel Alava</span>
													<span class="block">
														Como estas?
													</span>
													<span class="time">Hace 3 minutos</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Maria Perez</span>
													<span class="block">
														Gracias!
													</span>
													<span class="time">Hace 20 minutos</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jose Intriago</span>
													<span class="block">
													Lista para la reunión de hoy...
													</span>
													<span class="time">Hace 1 Hora</span> 
												</div>
											</a>
									
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">Ver todos los mensajes<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">0</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">Tienes 0 notificaciones nuevas</div>
								</li>
								<li>
									
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">Ver todas las notificaciones<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
					
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/paty.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/paty.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
												<p class="text-muted">Administrador</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Ver perfil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Mi perfil</a>
										<a class="dropdown-item" href="#">Mi balance</a>
										<a class="dropdown-item" href="#">Bandeja de entrada</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Configuración de cuenta</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="../controller/cerrarSesion.php">Cerrar sesión</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/paty.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo ucfirst($_SESSION['nombre']); ?>
									<span class="user-level">Administrador</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
										<span class="link-collapse">Mi perfil</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Editar perfil</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Ajustes</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
						
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Principal</p>
								<span class="caret"></span>
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Citas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									
									
									<li>
										<a href="../folder/cita.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
									
									
									
								</ul>
							</div>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-male"></i>
								<p>Pacientes</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="../folder/pacientes.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
									
									
								
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-user-md"></i>
								<p>Médicos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="../folder/medico.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Especialidades</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="especialidad.php">
											<span class="sub-item">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Pacientes</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="../view/admin/admin.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							
							
							<li class="nav-item">
								<a href="#">Mostrar</a>
							</li>
						</ul>
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Mostrar</h4>
										
										<a href="#addRowModal" class="btn btn-primary btn-round ml-auto" data-toggle="modal">Nuevo</a>
										<?php include('AgregarModal.php'); ?>
									</div>
									<div class="card-tools">
											<a href="../view/especialidad/reporte.php" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Exportar
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Imprimir
											</a>
										</div>
										<div class="card-body">
								
								
										<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>Cedula</th>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Teléfono</th>
													<th>Estado</th>
													<th>Fecha</th>
													<th style="width: 10%">Acción</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>Dedula</th>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Teléfono</th>
													<th>Estado</th>
													<th>Fecha</th>
													<th>Action</th>
												</tr>
											</tfoot>
											
											
										<tbody>
					<?php
						//incluimos el fichero de conexion
						include_once('../view/config/dbconect.php');

						$database = new Connection();
						$db = $database->open();
						try{	
							$sql = 'SELECT pacientes.codpaci, pacientes.dnipa,pacientes.nombrep,pacientes.apellidop ,pacientes.seguro,pacientes.tele,pacientes.sexo,pacientes.email,pacientes.clave,pacientes.cargo,pacientes.estado,pacientes.nacionalidad, pacientes.fecha_create, pacientes.fechanaci, pacientes.residencia, pacientes.direccion    FROM pacientes';
							foreach ($db->query($sql) as $row) {
								?>
								<tr>
									<td><?php echo $row['codpaci']; ?></td>
									<td><?php echo $row['dnipa']; ?></td>
									<td><?php echo $row['nombrep']; ?></td>
									<td><?php echo $row['apellidop']; ?></td>
									<td><?php echo $row['tele']; ?></td>
															
							   <td>
						 <?php    if($row['estado']==1)  { ?> 
						  <form  method="get" action="javascript:activo('<?php echo $row['codpaci']; ?>')">
							<button type="submit" class="btn btn-success btn-xs">Activo</button>
						  </form>
						<?php  }   else {?> 

						  <form  method="get" action="javascript:inactivo('<?php echo $row['codpaci']; ?>')"> 
							<button type="submit" class="btn btn-danger btn-xs">Inactivo</button>
						  </form>
						<?php  } ?>                         
					</td>
															
															
								<td><?php echo $row['fecha_create']; ?></td>
															
										<td>
											<div class="form-button-action">
							
							
							<button href="#editRowModal=<?php echo $row['codpaci'];?>" class="btn btn-link btn-primary btn-lg" data-toggle="modal"  title="" data-original-title="Edit Task" data-target="#editRowModal<?php echo $row['codpaci']; ?>">
									<i class="fa fa-edit"></i>
									
										</button>
										
										<button href="#PassRowModal=<?php echo $row['codpaci'];?>" class="btn btn-link btn-primary btn-lg" data-toggle="modal"  title="" data-original-title="Pass Task" data-target="#PassRowModal<?php echo $row['codpaci']; ?>">
									<i class="fa fa-key"></i>
									
										</button>
										
										<button href="#deleteRowModal=<?php echo $row['codpaci'];?>" class="btn btn-link btn-danger btn-lg" data-toggle="modal"  title="" data-original-title="Delete Task" data-target="#deleteRowModal<?php echo $row['codpaci']; ?>">
									<i class="fa fa-times"></i>
									
										</button>
										
								<?php include('editar.php'); ?>
										</div>
										</td>
																		
																	</tr>
																	<?php 
																}
															}
															catch(PDOException $e){
																echo "Hubo un problema en la conexión: " . $e->getMessage();
															}

															//Cerrar la Conexion
															$database->close();

														?>
																</tbody>
																							
																							
											
											
											
										</table>
									</div>
									
									
								</div>
								</div>
								
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	  	<script>
	function activo(codpaci)
{
	var id=codpaci;
	$.ajax({
        type:"GET",
		url:"../assets/ajax/editar_estado_activo_pacientes.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/pacientes.php';
    })

}

// Editar estado inactivo
function inactivo(codpaci)
{
	var id=codpaci;
	$.ajax({
		type:"GET",
		url:"../assets/ajax/editar_estado_inactivo_pacientes.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/pacientes.php';
    })
}

	</script>
</body>
</html>