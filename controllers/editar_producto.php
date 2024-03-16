<?php
include '../database/conexion.php'; //Ajjjjj!!

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad_stock = $_POST['cantidad_stock'];

$sql = "UPDATE productos SET nombre='$nombre', codigo='$codigo', descripcion='$descripcion', precio='$precio', cantidad_stock='$cantidad_stock' WHERE id=$id";

if ($conexion->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    echo 'Error al actualizar el producto:';
}
?>
