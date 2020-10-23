<!--  -->
<?php

if (isset($_GET['id_doc'])) {
    $id=$_GET['id_doc'];
  }
  
//echo $id_paciente;
 try {
  $conn = new mysqli("localhost","root","","SRP");
   $sql="DELETE FROM doctor WHERE id_doc='$id';";
   $resultado=$conn->query($sql);
   //mysql_query($sql);
   
 } catch (Exception $e) {
   $error=$e->getMessage();
 }

  if ($resultado) {
	 //  header("location: buscar_paciente.php");
	
 ?>  
 
  <script language="javascript">
  
 alert("Regristro eliminado ")
  </script>
  
 
  <?php
 
  }

  else{
    echo "error";//.$conn->$error;
  }

 ?>