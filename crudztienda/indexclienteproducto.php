<?php 
require('ds.php');
include('header.php');



  
    $sentencia=$bd->query("SELECT *FROM clienteproducto");
    $ventas=$sentencia->fetchALL(PDO::FETCH_OBJ);
    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="estiloProducto.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/20a61cc948.js" crossorigin="anonymous"></script>
    <title>ZzetaPC</title>
</head>

<body>
    <h2 class="text-dark text-center mt-5">Ventas</h2>
    <div class="contenedort mt-3">
        <div class="contenedorFormulario mt-5 ">
    <form action="guardarclienteproducto.php" method="POST">
        <div>
            <label for="">ID DEL CLIENTE</label>
            <br>
            <input type="text" name="idCliente1">
        </div>

            <div>
                <label for="">ID DEL PRODUCTO</label>
                <br>
                <input type="text" name="IdProducto1">
            </div>

            <div>
                <label for="">CANTIDAD</label>
                <br>
                <input type="text" name="cantidadProd">
            </div>
            <div>
           <input id="botones" type="reset" value="Limpiar" class="mt-1">
           <br>
           <br>
             <input id="botones" type="submit" name="bntenviar" class=" mb-1">
            </div>

        </form>
        </div>
                
        <div class="containertabla">
            <table>
            <tr>
              <td>id_venta</td>    
             <td>id_cliente</td>
             <td>id_producto</td>
             <td>cantidad</td>
             <td>valor_venta</td>
             <td>total_venta</td>

               
                  
              </tr>
              

            <?php 
            foreach($ventas as $venta){
              ?>  
              <tr>
                    <td><?php echo $venta->id_venta ?></td>
                  <td><?php echo $venta->id_cliente1 ?></td>
                  <td><?php echo $venta->id_producto1 ?></td>
                  <td><?php echo $venta->cantidad ?></td>
                  <td><?php echo $venta->valor_venta ?></td>
                  <td><?php echo $venta->total_venta?></td>
                  <td><a href="preactualizarclienteproducto.php?id=<?php echo $venta->id_venta; ?>"><button><i class="fa-solid fa-screwdriver-wrench"></i></button></a></td>
                  <td><a href="eliminarclienteproducto.php?id=<?php echo $venta->id_venta; ?>"><button><i class="fa-solid fa-trash"></i></button></a></td>
              
              </tr>
         
              
              <?php
              
            }
            ?>
            </table>
        </div>
    </div>
   
</body>
</html>