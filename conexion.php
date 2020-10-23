<?php
$host="localhost";
$usuario="root";
$clave= "";
$bd="SRP";

$conexion= mysqli_connect($host,$usuario, $clave, $bd);

	if($conexion){
		//echo "conectado";
		echo " <a href='inicio.html'>REGRESAR</a>";
	}
	else{
		echo "no se conecto";
	}
?>
