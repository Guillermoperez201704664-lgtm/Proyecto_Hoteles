<?php
    include "conexion.php";

   $txtcodigopiso=$_POST['txtcodigopiso'];
   $txtDescripcion=$_POST['txtDescripcion'];




$sql = "UPDATE piso SET descripcion ='" . $txtDescripcion . "' WHERE piso_id = ". $txtcodigopiso ."";


 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;



?>