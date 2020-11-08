<?php 
  include "conexion.php";
  
  $txt_corel=$_POST['txt_corel'];
  $txt_client=$_POST['txt_client'];
  $txt_habit=$_POST['txt_habit'];
  $txt_fechi=$_POST['txt_fechi'];
  $txt_estat=$_POST['txt_estat'];

  $sql= "INSERT INTO asignacion_habitacion(correlativo,cliente_id, habitacion_id,Fecha_ingreso,estatus_id)

values($txt_corel,$txt_client,$txt_habit,'$txt_fechi',$txt_estat)";


  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;

?>