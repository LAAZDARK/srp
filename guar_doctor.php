<?php

  $nom_doc=$_POST['nombre'];
  $cedula_doc=$_POST['cedula'];
  $especialidad_doc=$_POST['especialidad'];
  $telefono_doc=$_POST['telefono'];
  $nacimineto_doc=$_POST['nacimiento'];
  $sexo_doc=$_POST['sexo'];

try {
  $conn = new mysqli("localhost","root","","SRP");

   $sql="INSERT INTO doctor(id_doc,nom_doc,cedula_doc,especialidad_doc,telefono_doc,nacimineto_doc,sexo_doc) VALUES
  (NULL,'$nom_doc','$cedula_doc','$especialidad_doc','$telefono_doc','$nacimineto_doc','$sexo_doc')";
   $resultado=$conn->query($sql);
   //mysql_query($sql);
   
 } catch (Exception $e) {
   $error=$e->getMessage();
 }

  if ($resultado) {
   echo "Datos Guardados correctamente";
  }else{
    echo "error ".$conn->error;
    //echo $sql;
  }

 ?>