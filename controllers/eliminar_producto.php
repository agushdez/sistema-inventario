<?php
include '../database/conexion.php'; //Ajjjjj!!

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id=$id";
if ($conexion->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    echo 'Error al eliminar el producto';
}
?>
