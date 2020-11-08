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
   

$sql = "INSERT INTO administrador(administrador_id, nombre_administrador,apellido_administrador, DPI, edad,sexo_id,user,password)

VALUES($txtadm_id,'$txtnombre_empleado','$txtapellido_empleado',$txtDPI,$txtedad,$txtsexo_id,'$txtuser','$txtpassword')";


   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;
   

?>