 <?php 
	include "conexion.php";


	$txtcodigopiso=$_POST['txtcodigopiso'];

	$sql =  " DELETE FROM piso WHERE piso_id = ". $txtcodigopiso ."";

	$cantidad=mysqli_query($conexion,$sql);
    echo $cantidad;

	
 ?>
