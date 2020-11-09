<?php
   include "conexion.php";

   $txtcliente_id=$_POST['txtcliente_id'];
   $txthabit_id=$_POST['txthabit_id'];
   $txtesta_id=$_POST['txtesta_id'];
   $txtcorre=$_POST['txtcorre'];
   $txtfecha=$_POST['txtfecha'];
 


 $sql = "delete from asignacion_habitacion Where correlativo = $txtcorre";
   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;  

?>