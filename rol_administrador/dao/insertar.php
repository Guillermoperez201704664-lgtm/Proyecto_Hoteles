<?php
   include "conexion.php";

   $txtempleado_id=$_POST['txtempleado_id'];
   $txtnombre_empleado=$_POST['txtnombre_empleado'];
   $txtapellido_empleado=$_POST['txtapellido_empleado'];
   $txtDPI=$_POST['txtDPI'];
   $txtedad=$_POST['txtedad'];

      $txtuser=$_POST['txtuser'];
      $txtpassword=$_POST['txtpassword'];
      $txtsexo_id=$_POST['txtsexo_id'];
      $txtadministrador_id=$_POST['txtadministrador_id'];
   

$sql = "INSERT INTO empleados(empleado_id,nombre_empleado, apellido_empleado,DPI,edad,user,password,sexo_id,administrador_id) VALUES ($txtempleado_id,'$txtnombre_empleado','$txtapellido_empleado',$txtDPI,$txtedad,'$txtuser', '$txtpassword',$txtsexo_id,'$txtadministrador_id')";



   $cantidad= mysqli_query($conexion, $sql);
   echo $cantidad;
   
   

?>