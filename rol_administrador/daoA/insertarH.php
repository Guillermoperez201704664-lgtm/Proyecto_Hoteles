<?php
   include "conexion.php";

   $txtcorrelativo=$_POST['txtcorrelativo'];
   $txtnumeroHabitacion=$_POST['txtnumeroHabitacion'];
   $txttipo_habitacion=$_POST['txttipo_habitacion'];
   $txtpiso_id=$_POST['txtpiso_id'];




$sql = " INSERT INTO habitacion(habitacion_id, numero_habitacion,tipo_habitacion_id, piso_id)  VALUES($txtcorrelativo,$txtnumeroHabitacion,$txttipo_habitacion,$txtpiso_id)";


   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;
   

?>