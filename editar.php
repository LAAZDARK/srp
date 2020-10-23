<?php  
try {
	$conexion = new mysqli("localhost","root","","SRP");

  $resultado=$conexion->query("SELECT * FROM paciente "); 
  
} catch (Exception $e) {
	$error=$e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<table class='tabla_datos'>
		<thead>
			<h2 align="center">Editar Registros</h2>
			<tr>
				<th>Nombre</th>
				<th>Fecha</th>
				<th>estado</th>
				<th>sexo</th>
				<th>telefono</th>
				<th>direccion</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($registros=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $registros['nombrep']; ?></td>
					<td><?php echo $registros['fechanp']; ?></td>
					<td><?php echo $registros['estadocp']; ?></td>
					<td><?php echo $registros['sexop']; ?></td>
					<td><?php echo $registros['telp']; ?></td>
					<td><?php echo $registros['direccionp']; ?></td>
					<td>
						<a href="editar_paciente.php?id_paciente=<?php echo $registros['id_paciente']; ?>">Editar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>