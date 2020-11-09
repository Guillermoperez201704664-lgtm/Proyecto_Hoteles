<?php 
    include_once("diseno_pagina_Habitaciones.php");
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
                <CENTER><h3> Datos de Habitaciones </h3></CENTER>

                <form id="frminsertarclientes" method="post">

                    <div class="form-group">
                        <center><input type="text" class="form-control"           name="txtcorrelativo" id="txtcorrelativo" placeholder="Correlativo"></center>
                    </div>


                     <div class="form-group">
                        <center><input type="text" class="form-control"           name="txtnumeroHabitacion" id="txtnumeroHabitacion" placeholder="Numero Habitacion"></center>
                    </div>

                   

                    <div class="form-group">
                        <center>
                            <label>Tipo Habitaciones  </label>
                            <br>
                        <select class="" name="txttipo_habitacion" id="txttipo_habitacion">
                            <?php
                            include "daoA/conexion.php";
                            $sql = "select * from tipo_habitacion";
                            $ejecutar = mysqli_query($conexion, $sql);
                            while($txttipo_habitacion = mysqli_fetch_array($ejecutar)){
                                echo "<option value='".$txttipo_habitacion ['tipo_habitacion_id']."'>".utf8_encode($txttipo_habitacion ['nombre_habitacion'])."</option>";
                            } 
                            ?>
                        </select>
                        </center>  
                    </div>


                     <div class="form-group">
                        <center>
                             <label>Piso Habitaciones  </label>
                             <br>
                        <select class="" name="txtpiso_id" id="txtpiso_id">
                            <?php
                            include "daoA/conexion.php";
                            $sql = "select * from piso";
                            $ejecutar = mysqli_query($conexion, $sql);
                            while($txtpiso_id = mysqli_fetch_array($ejecutar)){
                                echo "<option value='".$txtpiso_id ['piso_id']."'>".utf8_encode($txtpiso_id ['descripcion'])."</option>";
                            } 
                            ?>
                        </select>
                        </center>  
                    </div>


                    <button type="submit" class="btn btn-primary" name="btnguardar" id="btnguardar">Guardar</button>

                    <button type="submit" class="btn btn-secondary" name="btnactualizar" id="btnactualizar">Actualizar</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary" name="btneliminar" id="btneliminar">Eliminar</button>


                </form>
            </div>
           <div class="col">
                <h3 class="text-center">Base de Datos Habitaciones </h3>
                  
                  <a href="datos_Habitaciones.php"><button type="submit" class="btn btn-secondary" name="btnverbasedatos" id="btnverbasedatos"> Ver Base de Datos</button> </a>

                  <a href="datos_Habitaciones.php"><button type="submit" class="btn btn-secondary" name="btnactualizar" id="btnactualizar"> Actualizar Pagina</button> </a>


                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Codigo Habitación </th>
                            <th scope="col">Numero Habitación </th>
                            <th scope="col">Nombre Habitación</th>
                            <th scope="col">Piso Habitación</th>
                            <th scope="col">Precio Habitación</th>
                        </tr>
                    </thead>
                    <?php
                    include "daoA/conexion.php";
                    $sql = " SELECT habitacion.habitacion_id,habitacion.numero_habitacion,tipo_habitacion.nombre_habitacion,tipo_habitacion.Precio_dia,piso.descripcion  FROM tipo_habitacion INNER JOIN ( piso Inner JOIN habitacion on piso.piso_id = habitacion.piso_id) ON habitacion.tipo_habitacion_id = tipo_habitacion.tipo_habitacion_id ";

                    $ejecutar = mysqli_query($conexion, $sql);
                    while ($fila = mysqli_fetch_array($ejecutar)){
                        
                    
                    ?>

                    <tbody>
                        
                        <td> <center><?php echo $fila['habitacion_id']?> </center></td>
                        <td> <center><?php echo $fila['numero_habitacion']?> </center></td>
                        <td> <center><?php echo $fila['nombre_habitacion']?> </center></td>
                        <td> <center><?php echo $fila['descripcion']?> </center></td>
                        <td> <center><?php echo $fila['Precio_dia']?> </center></td>
    
                        <td></td>
                       
                    </tbody>
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