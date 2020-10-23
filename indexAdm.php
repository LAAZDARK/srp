<?php
session_start();
 $usuario=$_GET['usuario'];
if (isset($_GET['usuario'])) {
    $usuario=$_GET['usuario'];
  }
  $usuario=strtoupper($usuario)
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <meta charset="utf-8">
    <title>Paciente</title>
	 <link rel="StyleSheet" href="estilo1.css" type="text/css">
   <link rel="StyleSheet" href="boton2.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/menu.css"> 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
	
  </head>
  <body>
    <table border="0" align="center" bgcolor="#2380C1" align="center" width="950" height="600">
    
	  <tr bgcolor="#2380C1"><td ><img src="img/logo1.png" align="left"  width="190" height="190"></td>
	<td> <center><p1> Cl&iacutenica Medica <br> Los Angeles <p1></center>
	 <p><h3>USUARIO:  <?php echo $_GET['usuario']; ?></h3> </p><br>
	
	
	</td>
	  
	   </tr>
	   <tr> <td bgcolor="#65AD6C" ></td>
	 <td bgcolor="#65AD6C">
	   <div id="header">
      <ul class="nav">
        
        <li><a href="buscar_paciente.php" target="1">Pacientes</a>
          <ul>
            <li><a href="buscar_paciente.php" target="1">Buscar</a></li>
            <li><a href="registro_paciente.php" target="1">Registrar</a></li>
            <li><a href="cita_paciente.php" target="1">Citas</a></li>
            <!-- <li><a href="eliminar_paciente.php" target="1">Eliminar</a></li>--> 
          </ul>
        </li>
        <li><a href="buscar_doctor.php" target="1">Personal</a>
          <ul>
            <li><a href="buscar_doctor.php" target="1">Buscar</a></li>
            <li><a href="registro_doctor.php" target="1">Registrar</a></li>
           <!-- <li><a href="">Editar</a></li>
            <li><a href="">Eliminar</a></li>-->
          </ul>
        </li>
        <li><a href="buscar_clinica.php" target="1">Clinica</a>
          <ul>
            <li><a href="buscar_clinica.php" target="1">Consultar</a></li>
           <!--  <li><a href="">Registrar</a></li>
            <li><a href="">Editar</a></li>
            <li><a href="">Eliminar</a></li>-->
          </ul>
        
        <li><a href="contacto.php" target="1">Contacto</a></li>
      </ul>
    </div>
 
  </body>
</html>
	 
	 
	 
	 </td>
	   <tr >
	   
	   
	   <td><center><a class="boton2" href="loggin1.html"  >CERRAR SESION</a></center><br><br>
	  
       </td>
	   
	 
	
	   
      <td  bgcolor="#C5C8CD">
	  
	  <IFRAME NAME="1" SRC="" WIDTH="1100" HEIGHT="500" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	   <IFRAME NAME="1" SRC="buscar_paciente.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	 <IFRAME NAME="1" SRC="registro_paciente.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	 <IFRAME NAME="1" SRC="editar.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	<IFRAME NAME="1" SRC="eliminar_paciente.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	<IFRAME NAME="1" SRC="buscar_doctor.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">
	<IFRAME NAME="1" SRC="registro_doctor.php" WIDTH="800" HEIGHT="800" FRAMEBORDER="1" MARGINWIDTH="5" MARGINHEIGHT="5" SCROLLING="AUTO">

	</IFRAME><td> </tr>

    </table>
  </body>
</html>


	














