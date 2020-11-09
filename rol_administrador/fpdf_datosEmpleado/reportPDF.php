<?php
   require('fpdf.php');

   require ('conexion.php');

   $consulta = "Select empleados.empleado_id, CONCAT(empleados.apellido_empleado, ', ',empleados.nombre_empleado)AS Nombre_completo_empleado,empleados.DPI, empleados.edad, empleados.user, empleados.password, sexo.tipo_sexo, CONCAT(administrador.apellido_administrador, ',',administrador.nombre_administrador)AS Nombre_completo_administrador FROM sexo INNER JOIN (administrador INNER JOIN empleados on administrador.administrador_id = empleados.administrador_id) on empleados.sexo_id = sexo.sexo_id ";

   $resultado = mysqli_query($conexion, $consulta);
  
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont('Arial','B',12);

   
   while($row=$resultado->fetch_assoc()){
       $pdf->Cell(10, 20,$row['empleado_id'],);
       $pdf->Cell(12, 20,$row['Nombre_completo_empleado'],);
       $pdf->Cell(28, 30,$row['DPI'],);
       $pdf->Cell(26, 22,$row['edad'],);
       $pdf->Cell(28, 20,$row['user'],);
       $pdf->Cell(20, 20,$row['password'],);
       $pdf->Cell(22, 20,$row['tipo_sexo'],);
       $pdf->Cell(24, 20,$row['Nombre_completo_administrador'],);
       
   }

   $pdf->Output();

?>
