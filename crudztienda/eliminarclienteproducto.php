
<?php 
$id=$_GET['id'];

include('ds.php');
if(!isset($_GET['id'])){
    header('Location:indexclienteproducto.php');

}
$codigo=$_GET['id'];

$sentencia=$bd->prepare("DELETE FROM clienteproducto WHERE id_venta=?;");
$resultado=$sentencia->execute([$id]);
header('Location:indexclienteproducto.php');
?>


