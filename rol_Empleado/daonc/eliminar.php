<?php
  include "conexion.php";

  $txt_cid_id=$_POST['txt_cid'];
  $txt_nom_id=$_POST['txt_nom'];
  $txt_apellido_id=$_POST['txt_apellido'];
  $txt_dpi=$_POST['txt_dpi'];
  $txt_sexo=$_POST['txt_sexo'];;
 


 $sql = "delete from asignacion_habitacion Where correlativo = $txtcorre";
  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;  

?>