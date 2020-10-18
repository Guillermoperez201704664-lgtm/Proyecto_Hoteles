<?php 
    include_once("diseno_pagina_administrador.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>

    <script src="js/funcionesClientes.js"></script>

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
                <h3>Datos Empleados </h3>

                <form id="frminsertarclientes" method="post">
                    <div class="form-group">
                        
                        <div>
                            <input type="text" class="form-control" name="txtempleado_id" id="txtempleado_id" placeholder="Codigo Empleado">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="txtnombre_empleado" id="txtnombre_empleado" placeholder="Nombre Empleado">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="txtapellido_empleado" id="txtapellido_empleado" placeholder="Apellido Empleado"> 
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="txtDPI" id="txtDPI" placeholder="DPI Empleado">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="txtedad" id="txtedad" placeholder="Edad Empleado">
                    </div>


                     <div class="form-group">
                        <input type="text" class="form-control" name="txtuser" id="txtuser" placeholder="User Empleado">
                    </div>


                     <div class="form-group">
                        <input type="text" class="form-control" name="txtpassword" id="txtpassword" placeholder="Password Empleado">
                    </div>


                    <div class="form-group">
                        <select class="" name="txtsexo_id" id="txtsexo_id">
                            <option value="0"> Sexo Empleado</option>
                            <option value="1"> Femenino</option>
                            <option value="2"> Masculino </option>
                        </select>  
                    </div>


                     <div class="form-group">
                        <input type="text" class="form-control" name="txtadministrador_id" id="txtadministrador_id" placeholder="Codigo Administrador">
                    </div>


                    <button type="submit" class="btn btn-primary" name="btnguardar" id="btnguardar">Guardar</button>

                    <button type="submit" class="btn btn-secondary" name="btnactualizar" id="btnactualizar">Actualizar</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary" name="btneliminar" id="btneliminar">Eliminar</button>


                </form>
            </div>
            <div class="col">
                <h3 class="text-center">Base de Datos Empleado</h3>
                <button type="submit" class="btn btn-secondary" name="btnlistado" id="btnlistado"> Listado </button>

                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Codigo </th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">DPI</th>
                            <th scope="col">Edad</th>
                            <th scope="col">User</th>
                            <th scope="col">Password</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Codigo Administrador</th>
                        </tr>
                    </thead>
                    <?php
                    include "dao/conexion.php";
                    $sql = "select * from empleados";
                    $ejecutar = mysqli_query($conexion, $sql);
                    while ($fila = mysqli_fetch_array($ejecutar)){
                        
                    
                    ?>

                    <tbody>
                        
                        <td> <center><?php echo $fila['empleado_id']?> </center></td>
                        <td> <center><?php echo $fila['nombre_empleado']?> </center></td>
                        <td> <center><?php echo $fila['apellido_empleado']?> </center></td>
                        <td> <center><?php echo $fila['DPI']?> </center></td>
                        <td> <center><?php echo $fila['edad']?> </center></td>
                        <td> <center><?php echo $fila['user']?> </center></td>
                        <td> <center><?php echo $fila['password']?> </center></td>
                        <td> <center><?php echo $fila['sexo_id']?> </center></td>
                        <td> <center><?php echo $fila['administrador_id']?> </center></td>
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
                              &copy; 2020, Todos los derechos reservados - | Desarrollador Guillermo Perez |.
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