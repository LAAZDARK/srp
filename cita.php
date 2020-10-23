<?php 
$id_paciente=$_GET['id_paciente'];
if (isset($_GET['id_paciente'])) {
	$id_paciente=$_GET['id_paciente'];
}
if (isset($_GET['nombrep'])) {
	$nombrep=$_GET['nombrep'];
}


$conexion = new mysqli("localhost","root","","SRP");

  $resultado=$conexion->query("SELECT * FROM paciente WHERE id_paciente='$id_paciente'"); //rfcp
  $row=$resultado->fetch_assoc();
  $sexop=$row['sexop'];
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de paciente</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
  </head>
  <header>
    <style>.boton{
		border: 2px solid #2e518b; /*anchura, estilo y color borde*/
		padding: 10px; /*espacio alrededor texto*/
		background-color: #13ADD6; /*color botón*/
		color: #ffffff; /*color texto*/
		text-decoration: none; /*decoración texto*/
		text-transform: uppercase; /*capitalización texto*/
		font-family: 'Helvetica', sans-serif; /*tipografía texto*/
		border-radius: 50px; /*bordes redondos*/
		}
		</style>
  </header>
  <body>
    <div class="container">
    	<form class="dato" action="guardar_cita.php" method="GET" name="dato">
     
      
      <table align="center">
        <tr>
          <td colspan="3" align="center"><h1>Registro Paciente</h1></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><?php echo $row['nombrep'];?></td>
          <td>&nbsp;&nbsp;Apellido Paterno</td>
          <td><?php echo $row['apaternop'];?></td>
            
        </tr>
        <tr>
          <td>Apellido materno</td> 
          <td><?php echo $row['apmaternop'];?></td>
          <td>&nbsp;&nbsp;Telefono</td>
          <td><?php echo $row['telp'];?></td>
        </tr>
        <tr>
           <td>Tipo de sangre</td>
           <td><?php echo $row['sangrep'];?></td>
           <td>&nbsp;&nbsp;RFC</td>
           <td><?php echo $row['rfcp'];?></td>
        </tr>
        <tr>
          <td>Estado Civil</td>
          <td><?php echo $row['estadocp'];?></td>
          <td>&nbsp;&nbsp;Sintoma</td>
          <td><?php echo $row['sintomap'];?></td>
        </tr>
        <tr>
          <td>Domicilio</td>
          <td><?php echo $row['direccionp'];?></td>
          <td>&nbsp;&nbsp;Vacunas</td>
          <td><?php echo $row['vacunasp'];?></td>
        </tr>
        <tr>
          <td>Sexo</td>
          <td><?php echo $row['sexop'];?></td>
          
          <td>&nbsp;&nbsp;Fecha de nacimiento</td>
          <td><?php echo $row['fechanp'];?></td>
        </tr>
        <tr>
          <td><h3>Agendar Cita</h3></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><center>Hora</center></td>
          <td><input type="time" name="hora" id="hora" min="09:00" max="18:00" step="60" value="10:45:00"></td>
          <td><center>Dia</center></td>
          <td><input type="date" name="dia" id="dia" min="2019-05-01" max="2020-01-01" step="1"></td>
        </tr>
        <tr>
        	<td colspan="4" align="center"><TEXTAREA rows="5" cols="30" name="motivo" placeholder="Motivo de cita, Aqui..." ></TEXTAREA><BR></td>
      		<!-- <INPUT type="hidden" name="identificador" value="Z87X09RF"><BR> -->
        </tr>
        <tr>
          <td><input type="hidden" name="id" value="<?php echo $row['id_paciente']; ?>">  </td>
          <td><input type="hidden" name="nombrep" value="<?php echo $row['nombrep']; ?>">  </td>
          <td colspan="2" align="center"><input type="submit" value="ENVIAR"></td>
		  
		 <td><a  class="boton" href="indexPac.php?usuario=<?php echo $row['nombrep'];?>">Volver</a></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>