<?php
    include "conexion.php";

   $txtadm_id=$_POST['txtadm_id'];
   $txtnombre_empleado=$_POST['txtnombre_empleado'];
   $txtapellido_empleado=$_POST['txtapellido_empleado'];
   $txtDPI=$_POST['txtDPI'];
   $txtedad=$_POST['txtedad'];
   $txtuser=$_POST['txtuser'];
   $txtpassword=$_POST['txtpassword'];
   $txtsexo_id=$_POST['txtsexo_id'];



    $sql = "UPDATE administrador SET nombre_administrador = '" .$txtnombre_empleado ."', apellido_administrador = '" . $txtapellido_empleado . "',DPI = " . $txtDPI . ", edad = " . $txtedad . ",sexo_id = " . $txtsexo_id . ",user = '" . $txtuser. "',password = '" . $txtpassword ."'

    WHERE administrador_id = ". $txtadm_id ."";


 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;



?>