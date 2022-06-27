<?php
include('ds.php');

$id=$_GET['id'];

$sentencia= $bd->prepare("SELECT *FROM productos where id_producto=? ;");
$sentencia->execute([$id]);
$producto= $sentencia->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilopreactualizar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Actualizar Producto</title>
</head>
<body id="aproductos">
<div  class="contenedorFormulario">
    <form action="actualizarpro.php" method="POST">
    <div>
            <label for="">ID DEL PRODUCTO</label>
            <br>
            <input type="text" name="txtIdProducto" value="<?php echo $producto->id_producto ?>">
        </div>

            <div>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <br>
                <input type="text" name="txtnombreProducto" value="<?php echo $producto->nom_pro ?>">
            </div>

            <div>
                <label for="">REFERENCIA</label>
                <br>
                <input type="text" name="txtreferencia" value="<?php echo $producto->referencia ?>">
            </div>
            <div>
                <label for="">STOCK</label>
                <br>
                <input type="text" name="txtstock" value="<?php echo $producto->stock ?>">
            </div>
            <div>
                <label for="">VALOR DE  COMPRA</label>
                <br>
                <input type="text" name="txtvalorCompra" value="<?php echo $producto->valor_compra ?>">
            </div>
            <div>
                <label for="">VALOR DE VENTA</label>
                <br>
                <input type="text" name="txtvalorVenta" value="<?php echo $producto->valor_venta ?>">
            </div>
            <div>
                <label for="">ACTIVO</label>
                <br>
                <input type="text" name="txtactivo" value="<?php echo $producto->activo ?>">
            </div>
            <div>
                <label for="">URL IMAGEN</label>
                <br>
                <input type="text" name="txtfoto" value="<?php echo $producto->foto ?>">
            </div>
            <div>
                <label for="">ID ADMINISTRADOR</label>
                <br>
                <input type="text" name="txtid_admin1" value="<?php echo $producto->id_administrador1 ?>">
            </div>

          

            <div>
                <br>
           <input id="botones" type="reset" value="Limpiar">
           <br>
           <br>
             <input id="botones" type="submit" name="bntenviar">
            </div>

        </form>


</body>
</html>