<?php 
  include "conexion.php";
  
  $corel=$_POST['txt_corel'];
  $client=$_POST['txt_client'];
  $habit=$_POST['txt_habit'];
  $fechi=$_POST['txt_fechi'];
  $estat=$_POST['txt_estat'];

  $sql= "insert into asigna_habit (correlativo,cliente_id,habitacion_id,Fecha_ingreso,estatus_id) values($corel,'$client',$habit,'$fechi','$estat')";
  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;

?>