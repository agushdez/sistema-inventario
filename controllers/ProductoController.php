<?php
include '../database/conexion.php';

class CrearProductoController
{
    public function crearProducto($nombre, $codigo, $descripcion, $precio, $cantidad_stock)
    {
        global $conexion;
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad_stock = $_POST['cantidad_stock'];

        $query = "INSERT INTO productos (nombre, codigo, descripcion, precio, cantidad_stock) VALUES ('$nombre', '$codigo', '$descripcion', '$precio', '$cantidad_stock')";

        if ($conexion->query($query) === TRUE) {
            header('Location: ../index.php');
        } else {
            echo 'Error al registrar el producto';
        }
    }
}

class EditarProductoController
{
    public function editarProducto($id, $nombre, $codigo, $descripcion, $precio, $cantidad_stock)
    {
        global $conexion;
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
    }
}
?>
