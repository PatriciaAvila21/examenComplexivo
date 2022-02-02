<?php

$conexion = mysqli_connect("localhost","root","","paty");

$query = $conexion->query("SELECT * FROM pacientes");

echo '<option value="0">paciente</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpaci']. '">' . $row['nombrep'] . '</option>' . "\n";
}



