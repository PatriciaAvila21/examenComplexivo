<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			
			$codpaci  = $_GET['codcat'];
			$nombre = $_POST['nombre'];
			$f_elavo = $_POST['f_elavo'];
			$f_caduci = $_POST['f_caduci'];
			$f_ingr = $_POST['f_ingr'];
		
			
			$sql = "UPDATE catalogoMedicina SET nombre = '$nombre',f_elavo = '$f_elavo',f_caduci = '$f_caduci',f_ingr = '$f_ingr' WHERE codcat = '$codcat'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Paciente actualizado correctamente' : 'No se puso actualizar el paciente';

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

	header('location: ../../folder/catalogoMedicina.php');

?>