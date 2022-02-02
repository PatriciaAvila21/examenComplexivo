<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$codcit  = $_GET['codcit'];
			$dates = $_POST['dates'];
			$hour = $_POST['hour'];

			$estado = $_POST['estado'];
			$fecha_create = $_POST['fecha_create'];
			$motivocit = $_POST['motivocit'];
					

			$sql = "UPDATE cita SET dates = '$dates',hour = '$hour',estado = '$estado',fecha_create = '$fecha_create',motivocit = '$motivocit' WHERE codcit = '$codcit'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Área actualizado correctamente' : 'No se puso actualizar el área';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/cita.php');

?>