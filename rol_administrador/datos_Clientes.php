<?php 
    include_once("diseno_pagina_administrador.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>

    <script src="jsA/funcionesClientes3.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body>
<div class="content-article">
            <article>

    <br> <br>
    <div class="container">

        <div class="row">
            <div class="col-3">



                </form>
            </div>
           <div class="col">
                <h3 class="text-center">Base de datos del Historial de Clientes </h3>
                  
                  <a href="datos_Clientes.php"><button type="submit" class="btn btn-secondary" name="btnverbasedatos" id="btnverbasedatos"> Ver Base de Datos</button> </a>

                  <a href="datos_Clientes.php"><button type="submit" class="btn btn-secondary" name="btnactualizar1" id="btnactualizar1"> Actualizar Pagina</button> </a>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Correlativo </th>
                            <th scope="col">Codigo Cliente </th>
                            <th scope="col">Nombre Cliente </th>
                            <th scope="col">Codigo Habitación</th>
                            <th scope="col">Piso Habitación</th>
                            <th scope="col">Precio Habitación</th>
                            <th scope="col">Nombre Habitación</th>
                            <th scope="col">Tipo Estatus Habitación</th>
                            <th scope="col">Fecha Ingreso Habitación</th>
                        </tr>
                    </thead>
                    <?php
                    include "daoA/conexion.php";
                    $sql = "SELECT cliente.cliente_id,CONCAT(cliente.apellido_cliente, ', ',cliente.nombre_cliente)AS Nombre_completo_Cliente,habitacion.habitacion_id,piso.descripcion FROM cliente INNER JOIN ( asignacion_habitacion INNER JOIN( habitacion INNER JOIN piso ON piso.piso_id = habitacion.piso_id) ON habitacion.habitacion_id = asignacion_habitacion.habitacion_id) ON asignacion_habitacion.cliente_id = cliente.cliente_id";

                    $ejecutar = mysqli_query($conexion, $sql);
                    while ($fila = mysqli_fetch_array($ejecutar)){
                        
                    
                    ?>

                    <?php
                    include "daoA/conexion.php";
                    $sql1 = "SELECT asignacion_habitacion.correlativo,tipo_habitacion.nombre_habitacion, tipo_habitacion.Precio_dia, estatus_habitacion.tipo_estatus, asignacion_habitacion.Fecha_ingreso FROM tipo_habitacion INNER JOIN (habitacion INNER JOIN ( asignacion_habitacion INNER JOIN estatus_habitacion on estatus_habitacion.estatus_id = asignacion_habitacion.estatus_id) on asignacion_habitacion.habitacion_id = habitacion.habitacion_id) on habitacion.tipo_habitacion_id = tipo_habitacion.tipo_habitacion_id ";

                    $ejecutar1 = mysqli_query($conexion, $sql1);
                    while ($fila1 = mysqli_fetch_array($ejecutar1)){
                        
                    
                    ?>


                    <tbody>

                        <td> <center><?php echo $fila1['correlativo']?> </center></td>
                        <td> <center><?php echo $fila['cliente_id']?> </center></td>
                        <td> <center><?php echo $fila['Nombre_completo_Cliente']?> </center></td>
                        <td> <center><?php echo $fila['habitacion_id']?> </center></td>
                        <td> <center><?php echo $fila['descripcion']?> </center></td>


                        <td> <center><?php echo $fila1['Precio_dia']?> </center></td>
                        <td> <center><?php echo $fila1['nombre_habitacion']?> </center></td>
                        <td> <center><?php echo $fila1['tipo_estatus']?> </center></td>
                        <td> <center><?php echo $fila1['Fecha_ingreso']?> </center></td>
    
                        <td></td>
                       
                    </tbody>
                    <?php
                    }    
                    ?>
                    <?php
                    }    
                    ?>
                </table>

            </div>
        </div>

    </div>
  
    
   <script type="text/javascript">
        $(document).ready(function() {
            $("#btnguardar").on('click', function(e) {
               
                e.preventDefault();
                agregar_datos();
            });
            $("#btnactualizar").on('click', function(e){
                alert("click en boton actualizar");
                e.preventDefault();
                modificar_datos();
            });

            $("#btneliminar").on('click', function(e) {
                e.preventDefault();
                eliminar_datos();
            }); 

        });

    </script>

    </article>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
         <br>
        <br>
        <br>
        <br>
        <br>
     <div class="footer-copy-redes">
                  <div class="main-copy-redes">
                        <div class="footer-copy">
                              &copy; 2020, Todos los derechos reservados - | Desarrollador Guillermo Perez 201704664|.
                        </div>
                        <div class="footer-redes">
                              <a href="#" class="fa fa-facebook"></a>
                              <a href="#" class="fa fa-twitter"></a>
                              <a href="#" class="fa fa-youtube-play"></a>
                              <a href="#" class="fa fa-github"></a>
                        </div>
                  </div>
            </div>
</body>
</html>