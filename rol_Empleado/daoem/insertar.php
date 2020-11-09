<?php
   include "conexion.php";

   $txtcliente_id=$_POST['txtcliente_id'];
   $txthabit_id=$_POST['txthabit_id'];
   $txtesta_id=$_POST['txtesta_id'];
   $txtcorre=$_POST['txtcorre'];
   $txtfecha=$_POST['txtfecha'];
 

  $sql = " INSERT INTO asignacion_habitacion(correlativo, cliente_id, habitacion_id, Fecha_ingreso, estatus_id)
  VALUES($txtcorre,$txtcliente_id,$txthabit_id,'$txtfecha',$txtesta_id)";

   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;  
?>