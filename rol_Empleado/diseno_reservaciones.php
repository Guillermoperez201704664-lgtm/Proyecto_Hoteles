<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       <script src="JS/funcionese.js"></script>
       <script src="jquery-3.5.1.min.js"></script>

        <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Registro de recervacione</title>

</head>
<body>
    <br>
    <h1 class="text-center"><div class="p-3 mb-2 bg-dark text-white">Registro de reservaciones</div></h1>
  
    
    <table>
      <tr>
        <th><img src="imgensE/img1.jpg" class="d-block w-100" ></th>
        <th><img src="imgensE/img2.jpg" class="d-block w-100" ></th>
        <th><img src="imgensE/img3.jpg" class="d-block w-100" ></th>
        <th><img src="imgensE/img4.jpg" class="d-block w-100" ></th>
      </tr>
    </table>   
        <br> <br>
    
  <div class="container">     
   <form id="frmrecervacion" method="post">
        <div class="form-row">

          
           <div class="form-group">
                        <center>
                        <select class="" name="txtsexo_id" id="txtsexo_id">
                            <?php
                            include "dao/conexion.php";
                            $sql = "select * from sexo";
                            $ejecutar = mysqli_query($conexion, $sql);
                            while($txtsexo_id = mysqli_fetch_array($ejecutar)){
                                echo "<option value='".$txtsexo_id ['sexo_id']."'>".utf8_encode($txtsexo_id ['tipo_sexo'])."</option>";
                            } 
                            ?>
                        </select>
                        </center>  
                    </div>





        </div> 
         
        <div>
             <button type="submit" class="p-3 mb-2 bg-dark text-white" name="btnguardarem" id="btnguardarem">Guardar</button> 
             <button type="submit" class="p-3 mb-2 bg-primary text-white" name="btnactualizarem" id="btnactualizarem">Actualizar</button>
             <button type="submit" class="p-3 mb-2 bg-dark text-white" name="btneliminarem" id="btneliminarem">Buscar</button>
             <button type="submit" class="p-3 mb-2 bg-primary text-white" name="btnactualizarem" id="btnactualizarem">Eliminar</button>
             <tr><td><a href="Menu_Empleado.php"><img src="imgensE/imge.4.png"  ></td></tr>
             <tr><td><a href="../Seccion.php"><img src="imgensE/imge.5.png" ></td></tr>
        </div>
    </form>       
  </div><br>   
   
  <div class="container">
    <table class="table">
     <thead class="thead-dark">
       <tr>
          <th scope="col">Correlativo</th>
          <th scope="col">Cliente id</th>
          <th scope="col">habitacion id</th>
          <th scope="col">Fecha de ingreso</th>
          <th scope="col">Estatus</th>
       </tr>
      </thead>
    
      <?php
          include "conexion.php";
          $sql = "select * from asignacion_habitacion";
          $ejecutar = mysqli_query($conexion, $sql);
          while ($fila = mysqli_fetch_array($ejecutar)){              
      ?>
      <tbody>
        <td><?php echo $fila['correlativo']?></td>
        <td><?php echo $fila['cliente_id']?></td>
        <td><?php echo $fila['habitacion_id']?></td>
        <td><?php echo $fila['Fecha_ingreso']?></td>
        <td><?php echo $fila['estatus_id']?></td>
        <td></td>
      </tbody>

        <?php
        }    
        ?>
        </table>
  </div>
  <script type="text/javascript">
        $(document).ready(function() {
            $("#btnguardarem").on('click', function(e) {
                //alert("click");
                e.preventDefault();
                agregar_datosres();
            });
            $("#btnactualizarem").on('click', function(e){
                alert("click en boton actualizar");
                e.preventDefault();
                modificar_datos();
            });
            $("#btneliminarem").on('click', function(e){
                alert("click en boton eliminar");
                e.preventDefault();
                eliminar_datos();
            });
        });
  </script>

</body>
</html>