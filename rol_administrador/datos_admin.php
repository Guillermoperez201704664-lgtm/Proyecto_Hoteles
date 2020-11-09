<?php 
    include_once("diseno_pagina_administrador.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>

    <script src="jsA/funcionesClientes.js"></script>

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
                <CENTER><h3> Datos Administrador </h3></CENTER>

                <form id="frminsertarclientes" method="post">
                    <div class="form-group">
                        <div>
                         <center><input type="text" class="form-control" name="txtadm_id" id="txtadm_id" placeholder="Codigo Administrador"></center>
                        </div>
                    </div>

                    <div class="form-group">
                        <center><input type="text" class="form-control" name="txtnombre_empleado" id="txtnombre_empleado" placeholder="Nombre Administrador"></center>
                    </div>

                    <div class="form-group">
                        <center><input type="text" class="form-control" name="txtapellido_empleado" id="txtapellido_empleado" placeholder="Apellido Administrador"></center> 
                    </div>

                    <div class="form-group">
                        <center><input type="text" class="form-control" name="txtDPI" id="txtDPI" placeholder="DPI Administrador"></center> 
                    </div>

                    <div class="form-group">
                         <center><input type="text" class="form-control" name="txtedad" id="txtedad" placeholder="Edad Administrador"></center>
                    </div>



                    <div class="form-group">
                        <center>
                        <label> Sexo administrador  </label>
                             <br>
                        <select class="" name="txtsexo_id" id="txtsexo_id">
                            <?php
                            include "daoA/conexion.php";
                            $sql = "select * from sexo";
                            $ejecutar = mysqli_query($conexion, $sql);
                            while($txtsexo_id = mysqli_fetch_array($ejecutar)){
                                echo "<option value='".$txtsexo_id ['sexo_id']."'>".utf8_encode($txtsexo_id ['tipo_sexo'])."</option>";
                            } 
                            ?>
                        </select>
                        </center>  
                    </div>

                    <div class="form-group">
                        <center><input type="text" class="form-control" name="txtuser" id="txtuser" placeholder="User Administrador"></center>
                    </div>


                     <div class="form-group">
                        <center><input type="text" class="form-control" name="txtpassword" id="txtpassword" placeholder="Password Administrador"></center>
                    </div>
        
                    <button type="submit" class="btn btn-primary" name="btnguardar" id="btnguardar">Guardar</button>

                    <button type="submit" class="btn btn-secondary" name="btnactualizar" id="btnactualizar">Actualizar</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-secondary" name="btneliminar" id="btneliminar">Eliminar</button>


                </form>
            </div>
           <div class="col">
                <h3 class="text-center">Base de Datos Administrador </h3>
                  
                  <a href="datos_admin.php"><button type="submit" class="btn btn-secondary" name="btnverbasedatos" id="btnverbasedatos"> Ver Base de Datos</button> </a>

                  <a href="datos_admin.php"><button type="submit" class="btn btn-secondary" name="btnactualizar" id="btnactualizar"> Actualizar Pagina</button> </a>


                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">Codigo </th>
                            <th scope="col">Nombre Administrador </th>
                            <th scope="col">DPI</th>
                            <th scope="col">Edad</th>
                            <th scope="col">User</th>
                            <th scope="col">Password</th>
                            <th scope="col">Sexo</th>
                        </tr>
                    </thead>
                    <?php
                    include "daoA/conexion.php";
                    $sql = " SELECT administrador.administrador_id, CONCAT(administrador.apellido_administrador, ', ',administrador.nombre_administrador)AS Nombre_completo_admin,administrador.DPI,administrador.edad, sexo.tipo_sexo,administrador.user, administrador.password 
                         From administrador inner join sexo on administrador.sexo_id = sexo.sexo_id     ";
                    $ejecutar = mysqli_query($conexion, $sql);
                    while ($fila = mysqli_fetch_array($ejecutar)){
                        
                    
                    ?>

                    <tbody>
                        
                        <td> <center><?php echo $fila['administrador_id']?> </center></td>
                        <td> <center><?php echo $fila['Nombre_completo_admin']?> </center></td>
                        <td> <center><?php echo $fila['DPI']?> </center></td>
                        <td> <center><?php echo $fila['edad']?> </center></td>
                        <td> <center><?php echo $fila['user']?> </center></td>
                        <td> <center><?php echo $fila['password']?> </center></td>
                        <td> <center><?php echo $fila['tipo_sexo']?> </center></td>
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