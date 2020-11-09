<?php
   require('fpdf.php');

   require ('conexion.php');
   $consulta = "SELECT administrador.administrador_id, CONCAT(administrador.apellido_administrador, ', ',administrador.nombre_administrador)AS Nombre_completo_admin,administrador.DPI,administrador.edad, sexo.tipo_sexo,administrador.user, administrador.password 
   From administrador inner join sexo on administrador.sexo_id = sexo.sexo_id";

   $resultado = mysqli_query($conexion, $consulta);
  
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont('Arial','B',12);

   
   while($row=$resultado->fetch_assoc()){
       $pdf->Cell(10, 20,$row['administrador_id'],);
       $pdf->Cell(12, 20,$row['Nombre_completo_admin'],);
       $pdf->Cell(28, 30,$row['DPI'],);
       $pdf->Cell(26, 20,$row['edad'],);
       $pdf->Cell(28, 20,$row['user'],);
       $pdf->Cell(20, 20,$row['password'],);
       $pdf->Cell(22, 20,$row['tipo_sexo'],);
       
   }

   $pdf->Output();

?>
