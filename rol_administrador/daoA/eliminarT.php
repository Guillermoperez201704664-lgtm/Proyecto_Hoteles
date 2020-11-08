 <?php 
	include "conexion.php";


	$txtcodigohabitacion=$_POST['txtcodigohabitacion'];

	$sql =  " DELETE FROM tipo_habitacion  WHERE tipo_habitacion_id = ". $txtcodigohabitacion ."";

	 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;

	
 ?>
