<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "SRP";

	$mysqli = new mysqli($servername, $username, $password, $dbname);


    $salida = "";
    //segunda tabla
    $query2 = "SELECT * FROM paciente ";
    $resulta2 = $mysqli->query($query2);

    if ($resulta2) { 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>        
    <meta charset="utf-8">
    <title>Paciente</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
  </head>
  <body>
    <table class='tabla_datos'>
        <center><h6>Citas</h6> </center>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>RFC</th>
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
                    <td><?php echo $registros2['rfcp']; ?></td>
                    <td><?php echo $registros2['dia_cita']; ?></td>
                    <td><?php echo $registros2['hora_cita']; ?></td>
                    <td><?php echo $registros2['mot_cita']; ?></td>
                    <td>
                        <center><a href="cita_actualizar_admin.php?id_paciente=<?php echo $registros2['id_paciente']; ?>">Actualizar</a></center>
                    </td>
                    
                </tr>
            <?php } ?>

        </tbody>
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


