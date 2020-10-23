<?php
session_start();
$usuario=$_GET['usuario'];
if (isset($_GET['usuario'])) {
	$usuario=$_GET['usuario'];
}
$usuario=strtoupper($usuario);


	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "SRP";

	$mysqli = new mysqli($servername, $username, $password, $dbname);


    $salida = "";

    $query = "SELECT * FROM paciente WHERE nombrep='$usuario'";
    $resultado = $mysqli->query($query);

    //segunda tabla
    $query2 = "SELECT * FROM paciente WHERE nombrep='$usuario'";
    $resulta2 = $mysqli->query($query2);

    if ($resultado) { 

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>		
    <meta charset="utf-8">
    <title>Paciente</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	 <style>.boton{
		border: 2px solid #2e518b; /*anchura, estilo y color borde*/
		padding: 10px; /*espacio alrededor texto*/
		background-color: #13ADD6; /*color botón*/
		color: #ffffff; /*color texto*/
		text-decoration: none; /*decoración texto*/
		text-transform: uppercase; /*capitalización texto*/
		font-family: 'Helvetica', sans-serif; /*tipografía texto*/
		border-radius: 30px; /*bordes redondos*/
		}
		</style>
  </head>
  <body>
    <table class='tabla_datos' >
    	<center><h5>Bienvenido</h5> </center>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Rfc</th>
                <th>Sexo</th>
                <th>Sangre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Agendar Cita</th>
           
            </tr>
        </thead>
        <tbody>
            <?php while ($registros=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $registros['id_paciente']; ?></td>
                    <td><?php echo $registros['nombrep']; ?></td>
                    <td><?php echo $registros['fechanp']; ?></td>
                    <td><?php echo $registros['rfcp']; ?></td>
                    <td><?php echo $registros['sexop']; ?></td>
                    <td><?php echo $registros['sangrep']; ?></td>
                    <td><?php echo $registros['telp']; ?></td>
                    <td><?php echo $registros['direccionp']; ?></td>                
                    <td>
                        <center><a href="cita.php?id_paciente=<?php echo $registros['id_paciente']; ?>">Cita</a></center>
                    </td>
                    
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <table class='tabla_datos'>
    	<center><h6>Citas</h6> </center>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Actualizar Cita</th>
           
            </tr>
        </thead>
        <tbody>
            <?php while ($registros2=$resulta2->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $registros2['id_paciente']; ?></td>
                    <td><?php echo $registros2['nombrep']; ?></td>
                    <td><?php echo $registros2['dia_cita']; ?></td>
                    <td><?php echo $registros2['hora_cita']; ?></td>
                    <td><?php echo $registros2['mot_cita']; ?></td>
                    <td>
                        <center><a href="cita.php?id_paciente=<?php echo $registros2['id_paciente']; ?>">Actualizar</a></center>
                </td>
                   
                </tr>
				  
				
            <?php } ?>

        </tbody>
    </table>
	<table align="center">
	<tr> 
	
	<td align="center"> <a   href="loggin2.html" ><input type= "submit" value="CERRAR SESION"></a></td></tr>
	</table>
</body>
</html>



   <?php }
   else{
        $salida.="NO HAY DATOS :(";
    }
echo $salida;
$mysqli->close();
?>


