<?php
include("ds.php");

$idProducto1=trim($_POST['IdProducto1']);
$idCliente1=trim($_POST['idCliente1']);
$cantidad=trim($_POST['cantidadProd']);

// innerjoin clientes,productos,clienteproducto me muestra toda la tabla)
$sentencia1=$bd->query("SELECT *FROM productos WHERE id_producto='$idProducto1';");
$filas=$sentencia1->fetchALL(PDO::FETCH_OBJ);
print_r($filas);

$valorVenta=0;
foreach($filas as $fila){
if (($fila->id_producto)==($idProducto1)){

    $valorVenta=0+floatval($fila->valor_venta);

}
else{
   echo("no");
}

}
echo($valorVenta);

$valorVenta1=floatval($valorVenta);
echo($valorVenta1);
$total=(intval($cantidad))*(floatval($valorVenta1));

if(isset($valorVenta1)&&($valorVenta1!=0)){

    $sentencia = $bd->prepare("INSERT INTO clienteproducto(id_producto1,id_cliente1,cantidad,valor_venta,total_venta) VALUES(?,?,?,?,?);");
    $resultado =$sentencia->execute([$idProducto1,$idCliente1,$cantidad,$valorVenta1,$total]);
    
    if($resultado===TRUE){
        echo ("Insertado con éxito en la base de datos");
        header('Location:indexclienteproducto.php');
    }

}
else{
    echo("No funciono ");
}



?>