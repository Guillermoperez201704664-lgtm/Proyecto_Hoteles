<?php
   include "conexion.php";

   $txtcliente_id=$_POST['txtcliente_id'];
   $txthabit_id=$_POST['txthabit_id'];
   $txtesta_id=$_POST['txtesta_id'];
   $txtcorre=$_POST['txtcorre'];
   $txtfecha=$_POST['txtfecha'];
 
  $sql = "update asignacion_habitacion set correlativo = $txtcorre, cliente_id = $txtcliente_id, habitacion_id = $txthabit_id, Fecha_ingreso = '$txtfecha', estatus_id = $txtesta_id)";
  $cantidad= mysqli_query($conexion, $sql);
  echo $cantidad;  

?>