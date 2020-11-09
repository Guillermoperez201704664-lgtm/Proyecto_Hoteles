<?php
    include "conexion.php";

    $txtcorrelativo=$_POST['txtcorrelativo'];
   $txtnumeroHabitacion=$_POST['txtnumeroHabitacion'];
   $txttipo_habitacion=$_POST['txttipo_habitacion'];
   $txtpiso_id=$_POST['txtpiso_id'];



    $sql = "UPDATE habitacion SET numero_habitacion = ". $txtnumeroHabitacion .", tipo_habitacion_id = " . $txttipo_habitacion . ",piso_id = " . $txtpiso_id . " WHERE habitacion_id = " . $txtcorrelativo . "";



 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;



?>