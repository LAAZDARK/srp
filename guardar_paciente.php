<!--  -->
<?php

$conexion = new PDO ('mysql:host=localhost;dbname=SRP','root','');
if (!$conexion) {
  echo "no se conecto-.";
}else{
  //echo "conectado";
}

  $nombrep=$_POST['nombre'];
   $ap=$_POST['ap'];
    $am=$_POST['am'];
  $telp=$_POST['telefono'];
  $fechanp=$_POST['nacimiento'];
  $direccionp=$_POST['direccion'];
  $sexop=$_POST['sexo'];
  $rfcp=$_POST['rfc'];
  $estadocp=$_POST['estado'];
  $sintomap=$_POST['sintoma'];
  $sangrep=$_POST['sangre'];
  $vacunasp=$_POST['vacuna'];

  $statement= $conexion->prepare("INSERT INTO paciente(nombrep,apaternop,apmaternop,fechanp,rfcp,telp,direccionp,sexop,estadocp,sangrep,vacunasp,sintomap) VALUES
  ('$nombrep','$ap','$am','$fechanp','$rfcp','$telp','$direccionp','$sexop','$estadocp','$sangrep','$vacunasp','$sintomap')");

  $statement->execute();
  if (!$statement) {
    echo "Hubo algun error";
  }else{
    echo "Datos Guardados correctamente.  <a href='buscar_paciente.php'>Volver</a>";
  }

