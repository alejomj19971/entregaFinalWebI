<?php 
include('ds.php');

$id=$_GET['id'];

$idProducto1=$_POST['txtIdProducto1'];
$idCliente1=$_POST['txtIdCliente1'];
$cantidad=$_POST['txtcantidad'];
$valorVenta=$_POST['txtValorVenta'];
$totalVenta=$_POST['txtTotalVenta'];

/*
$sentenciaverifica=$bd->query("SELECT *FROM clienteproducto WHERE id_producto1='$idProducto1' ");
$registro=$sentenciaverifica->fetch(PDO::FETCH_OBJ);

$cantidad1=0;
$valor_venta1=0;
$totalventa1=0;

foreach($registro as $campo)
    if( (($campo->cantidad)!=$cantidad) || (($campo->valor_venta)!=$valorVenta) ){
        $cantidad1=$cantidad1+intval($cantidad);
        $valor_venta1=$valor_venta1+floatval($valorVenta);
        
    }


    $totalventa1=$totalventa1+$cantidad1* $valor_venta1;

*/



$sentencia = $bd->prepare("UPDATE clienteproducto SET id_producto1=?, id_cliente1= ?,cantidad= ?,valor_venta=?,total_venta=? WHERE id_producto1=? " );
$resultado =$sentencia->execute([$idProducto1,$idCliente1,$cantidad,$valorVenta,$totalVenta,$idProducto1]);



if($resultado===TRUE){
    header('Location:indexclienteproducto.php');
}


?>

