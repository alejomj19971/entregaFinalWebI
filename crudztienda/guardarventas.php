<?php
include("ds.php");

$idCliente2=trim($_POST['idCliente2']);

$consultaNombres=$bd->query("SELECT nom_cliente FROM clientes WHERE id_cliente='$idCliente2';");
$arregloNombres=$consultaNombres->fetchALL(PDO::FETCH_OBJ);

$nombreCliente='';
foreach($arregloNombres as $nombre){
    $nombreCliente=$nombreCliente.$nombre->nom_cliente;
}


$consultaTablaClienteProductos=$bd->query("SELECT *FROM clienteproducto WHERE id_cliente1='$idCliente2' ");
$registro=$consultaTablaClienteProductos->fetchAll(PDO::FETCH_OBJ);

$numerito=0;
$totalPrecioProductos=0;
foreach($registro as $campos){
    $numerito=$numerito+intval($campos->cantidad);
    $totalPrecioProductos=$totalPrecioProductos+floatval($campos->total_venta);
}


    $sentencia = $bd->prepare("INSERT INTO ventas(id_cliente2,nom_cliente,cantidad_prod,valor_total_productos) VALUES(?,?,?,?);");
    $resultado =$sentencia->execute([$idCliente2,$nombreCliente,$numerito,$totalPrecioProductos]);
    
    if($resultado===TRUE){
        echo ("Insertado con éxito en la base de datos");
        header('Location:indexresumenventas.php');
    }







?>