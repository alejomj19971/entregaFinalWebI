<?php
include("ds.php");



$idCliente=trim($_POST['idCliente']);
$nombreCliente=trim($_POST['nombreCliente']);
$telefono=trim($_POST['telefono']);
$email=trim($_POST['emailCliente']);
$direccion=trim($_POST['dirCliente']);
$activo=trim($_POST['activo']);




$sentencia = $bd->prepare("INSERT INTO clientes(id_cliente,nom_cliente,telefono,email_cliente,direccion,activo) VALUES(?,?,?,?,?,?);");
$resultado =$sentencia->execute([$idCliente,$nombreCliente,$telefono,$email,$direccion,$activo]);

if($resultado===TRUE){
    echo ("Insertado con éxito en la base de datos");
    header('Location:indexcliente.php');
}

?>