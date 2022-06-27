<?php 
require('ds.php');
include('header.php');



  
    $sentencia=$bd->query("SELECT *FROM productos");
    $productos=$sentencia->fetchALL(PDO::FETCH_OBJ);
    




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
<h2 class="text-dark text-center mt-5">Productos</h2>
    <div class="contenedort ">
        <div class="contenedorFormulario  ">

    <form action="guardarpro.php" method="POST">
        <div>
            <label for="">ID DEL PRODUCTO</label>
            <br>
            <input type="text" name="idProducto">
        </div>

            <div>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <br>
                <input type="text" name="nombreProducto">
            </div>

            <div>
                <label for="">REFERENCIA</label>
                <br>
                <input type="text" name="referencia">
            </div>
            <div>
                <label for="">STOCK</label>
                <br>
                <input type="text" name="stock">
            </div>
            <div>
                <label for="">VALOR DE  COMPRA</label>
                <br>
                <input type="text" name="valorCompra">
            </div>
            <div>
                <label for="">VALOR DE VENTA</label>
                <br>
                <input type="text" name="valorVenta">
            </div>
            <div>
                <label for="">ACTIVO</label>
                <br>
                <input type="text" name="activo">
            </div>
            <div>
                <label for="">URL DE IMAGEN</label>
                <br>
                <input type="text" name="foto">
            </div>

            <div>
                <label for="">ID ADMINISTRADOR</label>
                <br>
                <input type="text" name="id_admin1">
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
                  
                    <td>id_producto</td>
                    <td>nom_producto</td>
                    <td>referencia</td>
                    <td>stock</td>
                    <td>valor_compra</td>
                    <td>valor_venta</td>
                    <td>activo</td>
                    <td>fotos</td>
                    <td>id_admin</td>
                    
                </tr>
              

            <?php 
            foreach($productos as $producto){
              ?>  
              <tr>
                  <td><?php echo $producto->id_producto ?></td>
                  <td><?php echo $producto->nom_pro ?></td>
                  <td><?php echo $producto->referencia ?></td>
                  <td><?php echo $producto->stock ?></td>
                  <td><?php echo $producto->valor_compra?></td>
                  <td><?php echo $producto->valor_venta ?></td>
                  <td><?php echo $producto->activo ?></td>
                  <td><img id="fotos"  class="imgProd" src="<?php echo $producto->foto ?>" alt="img"> </td>
                  <td><?php echo $producto->id_administrador1 ?></td>
                  <td><a href="preactualizarpro.php?id=<?php echo $producto->id_producto; ?>"><button><i class="fa-solid fa-screwdriver-wrench"></i></button></a></td>
                  <td><a href="eliminarpro.php?id=<?php echo $producto->id_producto; ?>"><button><i class="fa-solid fa-trash"></i></button></a></td>
                  
              
              </tr>
         
              
              <?php
              
            }
            ?>
            </table>
        </div>
    </div>
   
</body>
</html>