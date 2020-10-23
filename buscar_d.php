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

    $query = "SELECT * FROM doctor ORDER By id_doc";

    if (isset($_POST['consulta'])) {
    	$q = $mysqli->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM doctor WHERE id_doc LIKE '%".$q."%' OR nom_doc LIKE '%".$q."%' OR cedula_doc LIKE '%".$q."%' OR especialidad_doc LIKE '%".$q."%' OR telefono_doc LIKE '%".$q."%' OR nacimineto_doc LIKE '%".$q."%' OR sexo_doc LIKE '%".$q."%'";
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
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Especialidad</th>
                <th>Telefono</th>
                <th>Nacimiento</th>
                <th>Sexo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($registros=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $registros['id_doc']; ?></td>
                    <td><?php echo $registros['nom_doc']; ?></td>
                    <td><?php echo $registros['cedula_doc']; ?></td>
                    <td><?php echo $registros['especialidad_doc']; ?></td>
                    <td><?php echo $registros['telefono_doc']; ?></td>
                    <td><?php echo $registros['nacimineto_doc']; ?></td>
                    <td><?php echo $registros['sexo_doc']; ?></td>
                    <td>
                        <a href="editar_doctor.php?id_doc=<?php echo $registros['id_doc']; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="eliminado_doc.php?id_doc=<?php echo $registros['id_doc']; ?>">Eliminar</a>
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