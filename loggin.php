<?php
require "conexion.php" ;

	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	
	$query="select *  from administrador where nombre='$usuario' and contrasena='$contrasena'";
	$query_paciente="select *  from paciente where nombrep='$usuario' and rfcp='$contrasena'";
	$consulta=mysqli_query($conexion, $query);	
	$consulta_paciente=mysqli_query($conexion, $query_paciente);
	
	
	if($row=mysqli_fetch_array($consulta)){
		if($row['contrasena']==$contrasena){
			$_SSESION['nombre']=$usuario;
			session_start(); 

			header("location: indexAdm.php?usuario=$usuario ");
			} 
	}else if($row2=mysqli_fetch_array($consulta_paciente)){
		if($row2['rfcp']==$contrasena){
			$_SSESION['nombrep']=$usuario;
			session_start(); 

			header("location: indexPac.php?usuario=$usuario");//****id	
 		}
	}else{
		
			echo"<script language='javascript'>
	alert('No es valido, intente de nuevo')
	</script>";
	
		}
?>
				


