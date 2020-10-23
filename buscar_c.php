<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "SRP";

	$mysqli = new mysqli($servername, $username, $password, $dbname);
      /*if($mysqli->mysqliect_error){
        die("Conexión fallida: ".$mysqli->mysqliect_error);
      }*/

    $salida = "";

    $query = "SELECT * FROM clinica ORDER By id_clinica";

    if (isset($_POST['consulta'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM clinica WHERE id_clinica LIKE '%".$q."%' OR nom_clin LIKE '%".$q."%' OR dir_clin LIKE '%".$q."%' OR tel_clin LIKE '%".$q."%' OR resp_clin LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);

    if ($resultado) { ?>

        <!DOCTYPE html>
<html>
<head>
    <title>Busqueda de doctores</title>
</head>
<body>
    <table class='tabla_datos'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Clinia</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Responsable</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($registros=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $registros['id_clinica']; ?></td>
                    <td><?php echo $registros['nom_clin']; ?></td>
                    <td><?php echo $registros['dir_clin']; ?></td>
                    <td><?php echo $registros['tel_clin']; ?></td>
                    <td><?php echo $registros['resp_clin']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>



   <?php 
   }else{
        $salida.="NO HAY DATOS :(";
    }
echo $salida;
$mysqli->close();
?>