<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_GET['coddoc'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM medico WHERE coddoc  = '".$_GET['coddoc']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'medico borrado' : 'Hubo un error al borrar el área';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccionar miembro para eliminar primero';
	}

	header('location: ../../folder/medico.php');

?>