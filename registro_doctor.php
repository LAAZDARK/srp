<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de doctor</title>
  </head>
  <header>
  </header>
  <body>
    <div class="container">
    <form  action="guar_doctor.php" method="POST" name="dato" class="dato">
      <table align="center">
        <tr>
          <td colspan="2" align="center"><h1>Registro Doctor</h1></td>
        </tr>
        <tr>
          <td><input type="text" name="nombre" id="nombre" placeholder="Nombre completo"></td>
          <td><input type="text" name="cedula" id="cedula" placeholder="Cedula Profecional"></td>
        </tr>
        <tr>
          <td><input type="tel" name="telefono" id="telefono" placeholder="Numero telefonico"></td>
          <td><input type="text" name="especialidad" id="especialidad" placeholder="Especialidad"></td>
        </tr>
        
        <tr>
          <td>Sexo:</td>
          <td>Fecha de nacinmineto:</td>
        </tr>
        <tr>
          <td><input type="radio" name="sexo" id="sexo" value="masculino">Masculino<input type="radio" name="sexo" id="sexo" value="femenino">Femenino</td>
          <td><input type="date" name="nacimiento" id="nacimiento" min="1900-01-01" max="2012-01-01" step="1"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Registrar"></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
