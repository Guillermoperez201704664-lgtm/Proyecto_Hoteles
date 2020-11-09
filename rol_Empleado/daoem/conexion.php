<?php
    $servidor="localhost";
    $usuario="root";
    $contra="";
    $bd="hoteles";


    $conexion=mysqli_connect($servidor, $usuario, $contra, $bd);
    if(!$conexion){
        echo "Error en conexión";
    }

?>