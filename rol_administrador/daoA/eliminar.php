 <?php 
	include "conexion.php";


	$txtadm_id=$_POST['txtadm_id'];

	$sql =  " DELETE FROM administrador  WHERE administrador_id = ". $txtadm_id ."";

	 $cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;

	
 ?>
