<?php 
$id=$_GET['id'];
include 'ds.php';
if(!isset($_GET['id'])){
    header('Location:indexcliente.php');

}
$codigo=$_GET['id'];
$desactivado=-1;
$sentencia=$bd->prepare("DELETE FROM clientes WHERE id_cliente=?;");
$resultado=$sentencia->execute([$id]);
header('Location:indexcliente.php');
?>