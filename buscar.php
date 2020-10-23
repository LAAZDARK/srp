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

    $query = "SELECT * FROM paciente ORDER By id_paciente";

    if (isset($_POST['consulta'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM paciente WHERE id_paciente LIKE '%".$q."%' OR nombrep LIKE '%".$q."%' OR rfcp LIKE '%".$q."%' OR sexop LIKE '%".$q."%' OR direccionp LIKE '%".$q."%' OR sangrep LIKE '%".$q."%' OR estadocp LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);

    if ($resultado) { ?>

        <!DOCTYPE html>
<html>
<head>
    <title>Busqueda de pacientes</title>
</head>
<body>
    <table class='tabla_datos'>
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
                <th>Editar</th>
                <th>Eliminar</th>
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
                        <a href="editar_paciente.php?id_paciente=<?php echo $registros['id_paciente']; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="eliminado.php?id_paciente=<?php echo $registros['id_paciente']; ?>">Eliminar</a>
                    </td>
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

<!-- 
        //$resultado->fetch_row(); 
        //$resultado->num_rows>0

      
    	$salida.="<table class='tabla_datos'>
    			<thead>
    				<t>
                        <th>ID</th>
    					<th>PACIENTE</th>
    					<th>RFC</th>
    					<th>SEXO</th>
    					<th>ESTADO</th>
                        <th>OPERACIONES</th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) { //resultado=row
    		$salida.="<tr>
                        <td>".$fila['id_paciente']."</td>
    					<td>".$fila['nombrep']."</td>
    					<td>".$fila['rfcp']."</td>
    					<td>".$fila['sexop']."</td>
                        <td>".$fila['estadocp']."</td>
                    </tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $mysqli->close();



?> -->