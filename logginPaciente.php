<?php
require "conexion.php" ;

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	
	$query="select *  from paciente where nombrep='$usuario' and rfcp='$contrasena'";
	
	$consulta=mysqli_query($conexion, $query);	
	$result=mysqli_query($conexion, $query);
	
	 echo"<form  action='indexPac.php' method='GET' name='dato'>";
	if($row=mysqli_fetch_array($consulta)){
		if($row['rfcp']==$contrasena){
			session_start();
			$row=$_SSESION['nombre'];
			
			//$_SSESION['nombre']=$nombre;
			header("location: indexPac.php");
			
		}
		else{
			echo "no se encontro";
		}
	}
	else{
		echo "no se encontro";
		exit();
	} 
	

	