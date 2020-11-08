<?php
   include "conexion.php";

   $txtcodigohabitacion=$_POST['txtcodigohabitacion'];
   $txtnombrehabitacion=$_POST['txtnombrehabitacion'];
   $txtprecioHabitacion=$_POST['txtprecioHabitacion'];

 


$sql = " INSERT INTO tipo_habitacion(tipo_habitacion_id, nombre_habitacion, Precio_dia)
VALUES($txtcodigohabitacion,'$txtnombrehabitacion',$txtprecioHabitacion)";


   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;
   

?>