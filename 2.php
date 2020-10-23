<?php
session_start();
$usuario= $_SSESION['usuario'];
 $nombre= $_SSESION['nombre']=;
if(isset($usuario)){
	header("location: loggin1.html" );
}
else{
	echo $nombre;
}


?>