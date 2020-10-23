<?php 

if (isset($_GET['id'])) {
	$id_paciente=$_GET['id'];
}
if (isset($_GET['hora'])) {
	$hora_cita=$_GET['hora'];
}
if (isset($_GET['dia'])) {
	$dia_cita=$_GET['dia'];
}
if (isset($_GET['motivo'])) {
	$mot_cita=$_GET['motivo'];
}
if (isset($_GET['nombrep'])) {
	$nombrep=$_GET['nombrep'];
}





$conexion = new PDO ('mysql:host=localhost;dbname=SRP','root','');
if (!$conexion) {
  echo "no se conecto-.";
}else{
  //echo "conectado";
}

  $statement= $conexion->prepare("UPDATE paciente SET dia_cita='$dia_cita', hora_cita='$hora_cita', mot_cita='$mot_cita' WHERE id_paciente='$id_paciente'");

  $statement->execute();
  if (!$statement) {
    echo "Hubo algun error";
  }else{
    echo "Cita creada.  <a href='cita_paciente.php'>Volver</a>";
  }
?>