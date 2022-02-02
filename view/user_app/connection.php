<?php

function connect(){
	return new mysqli("localhost","root","","paty");
}

function get_categorias(){
	$con = connect();
	$sql = "SELECT cita.codcit, cita.dates, cita.hour, pacientes.codpaci, 
						pacientes.dnipa, pacientes.nombrep, pacientes.apellidop, medico.coddoc, medico.dnidoc, medico.nomdoc, 
						medico.apedoc, especialidad.codespe, especialidad.nombrees, cita.estado FROM cita INNER JOIN pacientes ON 
						cita.codpaci=pacientes.codpaci INNER JOIN medico ON cita.coddoc=medico.coddoc INNER JOIN especialidad ON 
						cita.codespe=especialidad.codespe";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

?>