<?php
   include "conexion.php";

   $txtcodigopiso=$_POST['txtcodigopiso'];
   $txtDescripcion=$_POST['txtDescripcion'];


$sql = " INSERT INTO piso(piso_id, descripcion)

VALUES($txtcodigopiso,'$txtDescripcion')";


   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;
   

?>