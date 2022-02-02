<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO pacientes (dnipa, nombrep,apellidop,seguro,tele,sexo,nacionalidad,email,clave ,cargo,estado,fechanaci,direccion,residencia) 
		VALUES (:dnipa, :nombrep, :apellidop, :seguro, :tele,:sexo,:nacionalidad, :email,:clave,:cargo,:estado, :fechanaci, :direccion, :residencia)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':dnipa' => $_POST['dnipa'] , ':nombrep' => $_POST['nombrep'] , ':apellidop' => $_POST['apellidop'], 
		':seguro' => $_POST['seguro'], ':tele' => $_POST['tele'], ':sexo' => $_POST['sexo'], ':nacionalidad' => $_POST['nacionalidad'], ':email' => $_POST['email'], ':clave' => MD5($_POST['clave']), 
		':cargo' => $_POST['cargo'], ':estado' => $_POST['estado'], ':fechanaci' => $_POST['fechanaci'], ':direccion' => $_POST['direccion'], ':residencia' => $_POST['residencia'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../../folder/pacientes.php');
	
?>