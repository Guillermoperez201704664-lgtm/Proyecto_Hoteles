<?php
  include "conexion.php";

  $txt_cid=$_POST['txt_cid'];
  $txt_nom=$_POST['txt_nom'];
  $txt_apellido=$_POST['txt_apellido'];
  $txt_dpi=$_POST['txt_dpi'];
  $txt_sexo=$_POST['txt_sexo'];
 

  $sql = "delete from cliente where cliente_id = $txt_cid";
  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;  

?>