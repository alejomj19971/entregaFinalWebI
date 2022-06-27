<?php 
$id=$_GET['id'];
include 'ds.php';
if(!isset($_GET['id'])){
    header('Location:indexpro.php');

}
$codigo=$_GET['id'];
$desactivado=-1;
$sentencia=$bd->prepare("DELETE FROM productos WHERE id_producto=?;");
$resultado=$sentencia->execute([$id]);
header('Location:indexpro.php');
?>