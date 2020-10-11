<?php 
     include_once 'conx_bd.php';
     $usuario1 = $_POST["txtusuario"];
     $contrasena = $_POST["txtcontrasena"];
     $boton = $_POST["btnInicio"];


     $sqlSelectEmpleado = "SELECT * FROM empleados Where user = '". $usuario1 ."' AND password = '". $contrasena."'";  
     $ejecutarEmpleado = mysqli_query($cadenaConexion,$sqlSelectEmpleado);
     $datosEmpleado = mysqli_fetch_array( $ejecutarEmpleado);
     
    

     $sqlSelectAdministrador = "SELECT * FROM administrador Where user = '". $usuario1 ."' AND password = '". $contrasena."'";
     $ejecutarAdministrador = mysqli_query($cadenaConexion, $sqlSelectAdministrador);
     $datosAdministrador = mysqli_fetch_array($ejecutarAdministrador);


      
	if ($_POST["txtusuario"] == $datosEmpleado['user'] && $_POST['txtcontrasena'] == $datosEmpleado['password']) {
		session_start();
		$_SESSION["autenticado"] =true;
		$_SESSION["usuario"]=$_POST["txtusuario"];
		header("Location: rol_Empleado/Menu_Empleado.php");


	}elseif ($_POST["txtusuario"] ==  $datosAdministrador ['user'] && $_POST['txtcontrasena'] ==  $datosAdministrador ['password']){
		session_start();
		$_SESSION["autenticado"] =true;
		$_SESSION["usuario"]=$_POST["txtusuario"];
		header("Location: rol_administrador/Menu_administrador.php");

	
	}else{
		header("Location: Seccion.php");
	}
?>
