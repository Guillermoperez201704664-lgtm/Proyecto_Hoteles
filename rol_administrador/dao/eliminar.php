 <?php 
	include "conexion.php";

	$txtempleado_id=$_POST['txtempleado_id'];

	$sql =  " DELETE FROM empleados WHERE empleado_id = ". $txtempleado_id ."";

	 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;

	
 ?>
