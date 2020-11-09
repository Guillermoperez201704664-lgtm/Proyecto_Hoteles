<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="JS/funcion.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
        
        <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Registro de nuevo cliente</title>

</head>
<body>
    <br>
    <h1 class="text-center"><div class="p-3 mb-2 bg-dark text-white">Registro de Cliente</div></h1>
  
      
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
   <form id="frmncliente" method="post">
        <div class="form-row">
           <div class="form-group col-md-2">
             <label for="txt_cid">Cliente Id</label>
             <input type="text" class="form-control" name="txt_cid" id="txt_cid">
           </div>
           <div class="form-group col-md-3">
              <label for="txt_nom">Nombre </label>
              <input type="text" class="form-control" name="txt_nom" id="txt_nom">
           </div>
           <div class="form-group col-md-3">
              <label for="txt_apellido">Apellido</label>
              <input type="text" class="form-control" name="txt_apellido" id="txt_apellido">
           </div>
        </div><br>
        <div class="form-row">
           <div class="form-group col-md-3">
              <label for="txt_dpi">DPI</label>
              <input type="text" class="form-control" name="txt_dpi" id="txt_dpi" >
           </div>
           <div class="form-group col-md-5">
              <label for="txt_sexo">Sexo</label><br>
              <select class="" name="txt_sexo" id="txt_sexo">
                <?php
                  include "daonc/conexion.php";
                  $sql = "select * from sexo";
                  $ejecutar = mysqli_query($conexion, $sql);
                  while($txt_sexo = mysqli_fetch_array($ejecutar)){
                  echo "<option value='".$txt_sexo ['sexo_id']."'>".utf8_encode($txt_sexo ['tipo_sexo'])."</option>";
                  } 
                ?>
              </select>
           </div>
        </div> 
         
        <div>
             <button type="submit" class="p-3 mb-2 bg-dark text-white" name="btnguardarnv" id="btnguardarnv">Guardar</button> 
             <button type="submit" class="p-3 mb-2 bg-primary text-white" name="btnactualizarvn" id="btnactualizarvn">Actualizar</button>
             <button type="submit" class="p-3 mb-2 bg-primary text-white" name="bteliminarvn" id="bteliminarvn">Eliminar</button>
             <tr><td><a href="Menu_Empleado.php"><img src="imgensE/imge.4.png"  ></td></tr>
             <tr><td><a href="../Seccion.php"><img src="imgensE/imge.5.png" ></td></tr>
        </div>
    </form>       
  </div><br>   
   
  <div class="container">
    <table class="table">
     <thead class="thead-dark">
       <tr>
          <th scope="col">Cliente id</th>
          <th scope="col">Nombre del cliente</th>
          <th scope="col">Apellido del cliente</th>
          <th scope="col">DPI</th>
          <th scope="col">Sexo</th>
       </tr>
      </thead>
    
      <?php
          include "daonc/conexion.php";
          $sql = "select * from cliente";
          $ejecutar = mysqli_query($conexion, $sql);
          while ($fila = mysqli_fetch_array($ejecutar)){              
      ?>
      <tbody>
        <td><?php echo $fila['cliente_id']?></td>
        <td><?php echo $fila['nombre_cliente']?></td>
        <td><?php echo $fila['apellido_cliente']?></td>
        <td><?php echo $fila['Dpi']?></td>
        <td><?php echo $fila['sexo_id']?></td>
        <td></td>
      </tbody>

        <?php
        }    
        ?>
        </table>
  </div>
  <script type="text/javascript">
        $(document).ready(function() {
            $("#btnguardarnv").on('click', function(e) {
                //alert("click");
                e.preventDefault();
                agregar_datos();
            });
            $("#btnactualizarvn").on('click', function(e){
                alert("click en boton actualizar");
                e.preventDefault();
                modificar_datos();
            });
            $("#bteliminarvn").on('click', function(e){
                alert("click en boton eliminar");
                e.preventDefault();
                eliminar_datos();
            });
        });
    </script>
</body>
</html>