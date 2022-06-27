<?php
include("ds.php");



$idProducto=trim($_POST['idProducto']);
$nombreProducto=trim($_POST['nombreProducto']);
$referencia=trim($_POST['referencia']);
$stock=trim($_POST['stock']);
$valorCompra=trim($_POST['valorCompra']);
$valorVenta=trim($_POST['valorVenta']);
$activo=trim($_POST['activo']);
$fotoPro=trim($_POST['foto']);
$idAdmin1=trim($_POST['id_admin1']);



$sentencia = $bd->prepare("INSERT INTO productos(id_producto,nom_pro,referencia,stock,valor_compra,valor_venta,activo,foto,id_administrador1) VALUES(?,?,?,?,?,?,?,?,?);");
$resultado =$sentencia->execute([$idProducto,$nombreProducto,$referencia,$stock,$valorCompra,$valorVenta,$activo,$fotoPro,$idAdmin1]);

if($resultado===TRUE){
    echo ("Insertado con éxito en la base de datos");
    header('Location:indexpro.php');
}

?>

