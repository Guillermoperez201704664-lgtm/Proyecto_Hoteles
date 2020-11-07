<?php 
  include "conexion.php";
  
  $corel=$_POST['txtcorel'];
  $client=$_POST['txtclient'];
  $habit=$_POST['txthabit'];
  $fechi=$_POST['txtfechi'];
  $estat=$_POST['txtestat'];

  $sql= "INSERT Into asignacion_habitacion (correlativo,cliente_id,habitacion_id,Fecha_ingreso,estatus_id) VALUES($corel,$clien,$habit,'$fechi',$estat)";
  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;

?>