<!-- sudo /opt/lampp/lampp start -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de paciente</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
  </head>
  <header>
    
  </header>
  <body>
    <div class="container">

<?php
if (isset($_GET['id_paciente'])) {
    $id_paciente=$_GET['id_paciente'];
  }
try {
  $conexion = new mysqli("localhost","root","","SRP");

  $resultado=$conexion->query("SELECT * FROM paciente WHERE id_paciente='$id_paciente'"); //rfcp
  $row=$resultado->fetch_assoc();
  $sexop=$row['sexop'];
?>
    <form class="dato" action="guardar_edicion.php" method="GET" name="dato">
     
      
      <table align="center">
        <tr>
          <td colspan="3" align="center"><h1>Actualizar registro</h1></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><input required type="text" name="nombre" id="nombre" value="<?php echo $row['nombrep'];?>" ></td>
          <td>&nbsp;&nbsp;Apellido Paterno</td>
          <td><input required type="text" name="ap" id="ap" value="<?php echo $row['apaternop'];?>" ></td>
            
        </tr>
        <tr>
          <td>Apellido materno</td> 
          <td><input required type="text" name="am" id="am" value="<?php echo $row['apmaternop'];?>" ></td>
          <td>&nbsp;&nbsp;Telefono</td>
          <td><input required type="tel" name="telefono" id="telefono" value="<?php echo $row['telp'];?>" ></td>
        </tr>
        <tr>
           <td>Tipo de sangre</td>
           <td><input type="text" name="sangre" id="sangre" value="<?php echo $row['sangrep'];?>" ></td>
           <td>&nbsp;&nbsp;RFC</td>
           <td><input required type="text" name="rfc" id="rfc" value="<?php echo $row['rfcp'];?>" ></td>
        </tr>
        <tr>
          <td>Estado Civil</td>
          <td><input type="text" name="estado" id="estado" value="<?php echo $row['estadocp'];?>" ></td>
          <td>&nbsp;&nbsp;Sintoma</td>
          <td><input required type="text" name="sintoma" id="sintoma" value="<?php echo $row['sintomap'];?>" ></td>
        </tr>
        <tr>
          <td>Domicilio</td>
          <td><input type="text" name="direccion" id="direccion" value="<?php echo $row['direccionp'];?>"></td>
          <td>&nbsp;&nbsp;Vacunas</td>
          <td><input required type="text" name="vacuna" id="vacuna" value="<?php echo $row['vacunasp'];?>"></td>
        </tr>
        <tr>
          <td>Sexo</td>
          <td><input type="radio" name="sexo" id="sexo" value="masculino" <?php if( $sexop == "masculino" ) { ?>checked="checked"<?php } ?>>Masculino<input type="radio" name="sexo" id="sexo" value="femenino" <?php if( $sexop == "femenino" ) { ?>checked="checked"<?php } ?>>Femenino</td>
          
          <td>&nbsp;&nbsp;Fecha de nacimiento</td>
          <td><input required type="date" name="nacimiento" value="<?php echo $row['fechanp'];?>" id="nacimiento" min="1900-01-01" max="2012-01-01" step="1"></td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value="<?php echo $row['id_paciente']; ?>">  </td>
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
