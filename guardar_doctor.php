<!--  -->
<?php

$conexion = new PDO ('mysql:host=localhost;dbname=SRP','root','');
if (!$conexion) {
  echo "no se conecto-.";
}else{
  //echo "conectado";
}

  $nom_doc=$_POST['nombre'];
  $cedula_doc=$_POST['cedula'];
  $especialidad_doc=$_POST['especialidad'];
  $telefono_doc=$_POST['telefono'];
  $nacimiento_doc=$_POST['nacimiento'];
  $sexo_doc=$_POST['sexo'];
  

  $statement= $conexion->prepare("INSERT INTO doctor(nom_doc,cedula_doc,especialidad_doc,telefono_doc,nacimiento_doc,sexo_doc) VALUES
  ('$nom_doc','$cedula_doc','$especialidad_doc','$telefono_doc','$nacimiento_doc','$sexo_doc')");

  $statement->execute();
  if (!$statement) {
    echo "Hubo algun error";
  }else{
    echo "Doctor Guardado correctamente.  <a href='buscar_doctor.php'>Volver</a>";
  }
?>
