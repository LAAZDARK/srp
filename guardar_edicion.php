<!--  -->
<?php

if (isset($_GET['id'])) {
    $id=$_GET['id'];
  }
if (isset($_GET['nombre'])) {
  $nombrep=$_GET['nombre'];
}
if (isset($_GET['ap'])) {
  $ap=$_GET['ap'];
}
if (isset($_GET['am'])) {
  $am=$_GET['am'];
}
if (isset($_GET['telefono'])) {
  $telp=$_GET['telefono'];
}
if (isset($_GET['nacimiento'])) {
  $fechanp=$_GET['nacimiento'];
}
if (isset($_GET['direccion'])) {
  $direccionp=$_GET['direccion'];
}
if (isset($_GET['sexo'])) {
  $sexop=$_GET['sexo'];
}
if (isset($_GET['rfc'])) {
  $rfcp=$_GET['rfc'];
}
if (isset($_GET['estado'])) {
  $estadocp=$_GET['estado'];
}
if (isset($_GET['sintoma'])) {
  $sintomap=$_GET['sintoma'];
}
if (isset($_GET['sangre'])) {
  $sangrep=$_GET['sangre'];
}
if (isset($_GET['vacuna'])) {
  $vacunasp=$_GET['vacuna'];
}

//echo $id_paciente;
 try {
  $conn = new mysqli("localhost","root","","SRP");
   $sql="UPDATE paciente SET nombrep='$nombrep',apaternop='$ap',apmaternop='$am',fechanp='$fechanp',rfcp='$rfcp',telp='$telp',direccionp='$direccionp',sexop='$sexop',estadocp='$estadocp',sangrep='$sangrep',vacunasp='$vacunasp',sintomap='$sintomap' WHERE id_paciente='$id'";
   $resultado=$conn->query($sql);
   //mysql_query($sql);
   
 } catch (Exception $e) {
   $error=$e->getMessage();
 }

  if ($resultado) {
   ?>  
 
  <script language="javascript">
  
 alert("REGISTRO ACTUALIZADO ")
  </script>
 
  <?php
  }else{
    echo "error".$error;
  }

 ?>