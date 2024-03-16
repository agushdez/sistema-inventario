<?php 
include '../database/conexion.php'; //Ajjjjj!!

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad_stock = $_POST['cantidad_stock'];

$query = "INSERT INTO productos (nombre, codigo, descripcion, precio, cantidad_stock) VALUES ('$nombre', '$codigo', '$descripcion', '$precio', '$cantidad_stock')";

if($conexion->query($query) === TRUE) {
    header('Location: ../index.php');
} else {
    echo 'Error al registrar el producto';
}
?>
