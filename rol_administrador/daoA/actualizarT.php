<?php
    include "conexion.php";

   $txtcodigohabitacion=$_POST['txtcodigohabitacion'];
   $txtnombrehabitacion=$_POST['txtnombrehabitacion'];
   $txtprecioHabitacion=$_POST['txtprecioHabitacion'];




$sql = "UPDATE tipo_habitacion SET nombre_habitacion ='" . $txtnombrehabitacion . "',Precio_dia = " . $txtprecioHabitacion . " WHERE tipo_habitacion_id = ". $txtcodigohabitacion ."";




 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;



?>