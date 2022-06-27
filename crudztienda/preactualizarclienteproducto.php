<?php
include('ds.php');

$id=$_GET['id'];

$sentencia= $bd->prepare("SELECT *FROM clienteproducto where id_venta=? ;");
$sentencia->execute([$id]);
$venta= $sentencia->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="estilopreactualizar.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="preactualizar.css">

    <title>ActualizarVenta</title>
</head>
<body id="aventas">
<div class="contenedorFormulario">
    <form action="actualizarclienteproducto.php" method="POST">
    <div>
            <label for="">ID DEL PRODUCTO</label>
            <br>
            <input type="text" name="txtIdProducto1" value="<?php echo $venta->id_producto1 ?>">
        </div>

            <div>
                <label for="">ID DEL CLIENTE</label>
                <br>
                <input type="text" name="txtIdCliente1" value="<?php echo $venta->id_cliente1 ?>">
            </div>

            <div>
                <label for="">CANTIDAD</label>
                <br>
                <input type="text" name="txtcantidad" value="<?php echo $venta->cantidad ?>">
            </div>
            <div>
                <label for="">VALOR VENTA</label>
                <br>
                <input type="text" name="txtValorVenta" value="<?php echo $venta->valor_venta ?>">
            </div>
            <div>
                <label for="">TOTAL VENTA</label>
                <br>
                <input type="text" name="txtTotalVenta" value="<?php echo $venta->total_venta ?>">
            </div>
       
         
            <div>
                <br>
           <input id="botones"type="reset" value="Limpiar">
                <br>
                <br>
             <input id="botones" type="submit" name="bntenviar">
            </div>

        </form>


</body>
</html>