<!--  -->
<?php

if (isset($_GET['id'])) {
    $id=$_GET['id'];
  }
if (isset($_GET['nombre'])) {
    $nom_doc=$_GET['nombre'];
  }
  if (isset($_GET['cedula'])) {
    $cedula_doc=$_GET['cedula'];
  }
if (isset($_GET['especialidad'])) {
    $especialidad_doc=$_GET['especialidad'];
  }
if (isset($_GET['telefono'])) {
    $telefono_doc=$_GET['telefono'];
  }
if (isset($_GET['nacimiento'])) {
    $nacimineto_doc=$_GET['nacimiento'];
  }
if (isset($_GET['sexo'])) {
    $sexo_doc=$_GET['sexo'];
  }


//echo $id_paciente;
 try {
  $conn = new mysqli("localhost","root","","SRP");

   $sql="UPDATE doctor SET nom_doc='$nom_doc',cedula_doc='$cedula_doc',especialidad_doc='$especialidad_doc',telefono_doc='$telefono_doc',nacimineto_doc='$nacimineto_doc',sexo_doc='$sexo_doc' WHERE id_doc='$id'";
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