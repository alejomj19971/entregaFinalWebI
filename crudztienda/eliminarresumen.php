
<?php 
$id=$_GET['id'];

include('ds.php');
if(!isset($_GET['id'])){
    header('Location:indexresumenventas.php');

}
$codigo=$_GET['id'];

$sentencia=$bd->prepare("DELETE FROM ventas WHERE id_ventas=?;");
$resultado=$sentencia->execute([$id]);
header('Location:indexresumenventas.php');
?>


