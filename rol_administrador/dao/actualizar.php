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




    $sql = "UPDATE empleados SET nombre_empleado = '". $txtnombre_empleado ."', apellido_empleado = '". $txtapellido_empleado ."', DPI = ". $txtDPI .", edad = ". $txtedad .", user  = '". $txtuser ."', password = '". $txtpassword  ."',sexo_id = " . $txtsexo_id .",administrador_id = ". $txtadministrador_id ." 

     WHERE empleado_id = ". $txtempleado_id ."";



 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;



?>