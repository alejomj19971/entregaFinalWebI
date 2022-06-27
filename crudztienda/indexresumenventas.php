<?php 
require('ds.php');
include('header.php');

$sentencia=$bd->query("SELECT *FROM ventas");
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
    <title>ResumenVentas</title>
</head>

<body>
    <div class="contenedort mt-3">
        <div class="contenedorFormulario mt-5 ">
    <form action="guardarventas.php" method="POST">
        <div>
           
            <label for="">ID DEL CLIENTE</label>
            <br>
            <input type="text" name="idCliente2">
        </div>

            <div>
           <input id="botones" type="reset" value="Limpiar" class="mt-1">
           <br>
           <br>
             <input id="botones" type="submit" name="bntenviar" class=" mb-1">
            </div>

        </form>
        </div>
                
        <div class="containertabla ">
            <table class="w-100">
            <tr>
            <td>id_ventas</td>   
            <td>id_cliente</td>
            <td>nom_cliente</td>
            <td>cantidad_productos</td>
            <td>Total</td>
            

               
                  
              </tr>
              

            <?php 
            foreach($ventas as $venta){
              ?>  
              <tr>
                  <td><?php echo $venta->id_ventas ?></td>
                  <td><?php echo $venta->id_cliente2 ?></td>
                  <td><?php echo $venta->nom_cliente?></td>
                  <td><?php echo $venta->cantidad_prod ?></td>
                  <td><?php echo $venta->valor_total_productos ?></td>
                  
                 
                  <td><a href="eliminarresumen.php?id=<?php echo $venta->id_ventas; ?>"><button><i class="fa-solid fa-trash"></i></button></a></td>
                 
              
              </tr>
         
              
              <?php
              
            }
            ?>
            </table>
        </div>
    </div>
   
</body>
</html>