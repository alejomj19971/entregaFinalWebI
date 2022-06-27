<?php 
include('ds.php');


$idProducto=$_POST['txtIdProducto'];
$nomProducto=$_POST['txtnombreProducto'];
$referenciaProducto=$_POST['txtreferencia'];
$stockProducto=$_POST['txtstock'];
$valorCompra=$_POST['txtvalorCompra'];
$valorVenta=$_POST['txtvalorVenta'];
$activo=$_POST['txtactivo'];
$idAdmin=$_POST['txtid_admin1'];
$imgProd1=$_POST['txtfoto'];


$sentencia = $bd->prepare("UPDATE productos SET id_producto=?, nom_pro= ?,referencia= ?,stock=?,valor_compra=?,valor_venta=?,activo=?,foto=?,id_administrador1=? WHERE id_producto=? " );
$resultado =$sentencia->execute([$idProducto,$nomProducto,$referenciaProducto,$stockProducto,$valorCompra,$valorVenta,$activo,$imgProd1,$idAdmin,$idProducto]);


if($resultado===TRUE){
    header('Location:indexpro.php');
}


?>

