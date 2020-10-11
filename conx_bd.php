<?php 
  $servidor ="localhost";
  $usurio="root";
  $contra = ""; 
  $bd="hoteles"; 
 
  $cadenaConexion = mysqli_connect($servidor,$usurio,$contra,$bd);

  if (!$cadenaConexion) {
  	echo " Error en conexcion"; 
  }
 ?>