<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de paciente</title>
	
	<style>.boton{
		border: 2px solid #2e518b; /*anchura, estilo y color borde*/
		padding: 10px; /*espacio alrededor texto*/
		background-color: #13ADD6; /*color botón*/
		color: #ffffff; /*color texto*/
		text-decoration: none; /*decoración texto*/
		text-transform: uppercase; /*capitalización texto*/
		font-family: 'Helvetica', sans-serif; /*tipografía texto*/
		border-radius: 60px; /*bordes redondos*/
		}
		</style>
  </head>
  <header>
    <?php
    //require 'admon_head.php';
     ?>
  </header>
  <body>
    <div class="container">
    <form class="dato" action="guardar_paciente.php" method="post" name="dato">
      <table align="center" border="0">
        <tr>
          <td colspan="4" align="center"><h1>Registro Paciente</h1></td>
        </tr>
        <tr>
          <td>Nombre</td>
          <td><input required type="text" name="nombre" id="nombre" ></td>
          <td>&nbsp;&nbsp;Apellido Paterno</td>
          <td><input required type="text" name="ap" id="ap" ></td>
            
        </tr>
        <tr>
          <td>Apellido materno</td> 
          <td><input required type="text" name="am" id="am" ></td>
          <td>&nbsp;&nbsp;Telefono</td>
          <td><input required type="tel" name="telefono" id="telefono" ></td>
        </tr>
        <tr>
           <td>Tipo de sangre</td>
           <td><input type="text" name="sangre" id="sangre" ></td>
           <td>&nbsp;&nbsp;RFC</td>
           <td><input required type="text" name="rfc" id="rfc"></td>
        </tr>
        <tr>
          <td>Estado Civil</td>
          <td><input type="text" name="estado" id="estado" ></td>
          <td>&nbsp;&nbsp;Sintoma</td>
          <td><input required type="text" name="sintoma" id="sintoma" ></td>
        </tr>
        <tr>
		      <td>Domicilio</td>
          <td><input type="text" name="direccion" id="direccion"></td>
          <td>&nbsp;&nbsp;Vacunas</td>
          <td><input required type="text" name="vacuna" id="vacuna"></td>
        </tr>
        <tr>
          <td>Sexo</td>
          <td><input type="radio" name="sexo" id="sexo" value="masculino">Masculino<input type="radio" name="sexo" id="sexo" value="femenino">Femenino</td>
          
          <td>&nbsp;&nbsp;Fecha de nacimiento</td>
          <td><input required type="date" name="nacimiento" id="nacimiento" min="1900-01-01" max="2012-01-01" step="1"></td>
        </tr>
        <tr>
          <td colspan="4" align="center"><input type="submit" value="REGISTRAR"></font></a></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
