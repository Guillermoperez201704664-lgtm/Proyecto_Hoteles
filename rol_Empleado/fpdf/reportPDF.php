<?php
   require('fpdf.php');

   require ('conexion.php');
   $consulta = "SELECT * FROM asignacion_habitacion";
   $resultado = mysqli_query($conexion, $consulta);
  
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont('Arial','B',12);
   
   while($row=$resultado->fetch_assoc()){
       $pdf->Cell(10, 10,$row['correlativo'], 1, 0,'C', 0);
       $pdf->Cell(20, 10,$row['cliente_id'], 1, 0,'C', 0);
       $pdf->Cell(30, 10,$row['habitacion_id'], 1, 0,'C', 0);
       $pdf->Cell(30, 10,$row['Fecha_ingreso'], 1, 0,'C', 0);
       $pdf->Cell(10, 10,$row['estatus_id'], 1, 1,'C', 0);
       
   }

   $pdf->Output();

?>
