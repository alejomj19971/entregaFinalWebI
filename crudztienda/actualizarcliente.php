<?php 
include('ds.php');


$idCliente=$_POST['txtIdCliente'];
$nomCliente=$_POST['txtnombreCliente'];
$telefono=$_POST['txttelefono'];
$email=$_POST['txtemail'];
$direccion=$_POST['txtdireccion'];
$activo=$_POST['txtactivo'];



$sentencia = $bd->prepare("UPDATE clientes SET id_cliente=?, nom_cliente= ?,telefono= ?,email_cliente=?,direccion=?,activo=? WHERE id_cliente=? " );
$resultado =$sentencia->execute([$idCliente,$nomCliente,$telefono,$email,$direccion,$activo,$idCliente]);


if($resultado===TRUE){
    header('Location:indexcliente.php');
}


?>