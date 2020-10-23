<!-- sudo /opt/lampp/lampp start -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar paciente</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
  </head>
  <header>
    
  </header>
  <body>
    <div class="container">

<?php
if (isset($_GET['id_doc'])) {
    $id_doc=$_GET['id_doc'];
  }
try {
  $conexion = new mysqli("localhost","root","","SRP");

  $resultado=$conexion->query("SELECT * FROM doctor WHERE id_doc='$id_doc'"); //rfcp
  $row=$resultado->fetch_assoc();
  $sexo_doc=$row['sexo_doc'];
?>
    <form class="dato" action="guardar_edicion_doc.php" method="GET" name="dato">
     
      
      <table align="center">
        <tr>
          <td colspan="3" align="center"><h1>Editar doctor</h1></td>
        </tr>
        <tr>
          <td><input type="text" name="nombre" id="nombre" placeholder="Nombre completo" value="<?php echo $row['nom_doc'];?>"></td>
          <td><input type="text" name="cedula" id="cedula" placeholder="Cedula Profecional" value="<?php echo $row['cedula_doc'];?>"></td>
        </tr>
        <tr>
          <td><input type="tel" name="telefono" id="telefono" placeholder="Numero telefonico" value="<?php echo $row['telefono_doc'];?>"></td>
          <td><input type="text" name="especialidad" id="especialidad" placeholder="Especialidad" value="<?php echo $row['especialidad_doc'];?>"></td>
        </tr>
        
        <tr>
          <td>Sexo:</td>
          <td>Fecha de nacimiento:</td>
        </tr>
        <tr>
          <td><input type="radio" name="sexo" id="sexo" value="masculino" <?php if( $sexo_doc == "masculino" ) { ?>checked="checked"<?php } ?>>Masculino<input type="radio" name="sexo" id="sexo" value="femenino" <?php if( $sexo_doc == "femenino" ) { ?>checked="checked"<?php } ?>>Femenino</td>
          <td><input type="date" name="nacimiento" id="nacimiento" value="<?php echo $row['nacimineto_doc'];?>" min="1900-01-01" max="2012-01-01" step="1"></td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value="<?php echo $row['id_doc']; ?>">  </td>
          <td colspan="2" align="center"><input type="submit" value="ACTUALIZAR"></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>

<?php 
} catch (PDOException $e) {
  echo "Error: ". $e->getMessage();
}

 ?>
