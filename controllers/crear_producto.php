<?php
include '../database/conexion.php'; //Ajjjjj!!

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad_stock = $_POST['cantidad_stock'];
$id_ubicacion = $_POST['id_ubicacion'];

$query = "INSERT INTO productos (nombre, codigo, descripcion, precio, cantidad_stock, id_ubicacion) VALUES ('$nombre', '$codigo', '$descripcion', '$precio', '$cantidad_stock', '$id_ubicacion')";

if ($conexion->query($query) === TRUE) {
    $sql_ultimo_registro_productos_id = "SELECT id FROM productos ORDER BY id DESC LIMIT 1"; // Obtener el ID del último registro insertado en la tabla productos
    $result = $conexion->query($sql_ultimo_registro_productos_id); // 🥲
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_producto = $row['id'];

        $fecha_actual = date('Y-m-d'); //fecha actual

        $sql_movimientos = "INSERT INTO movimientos (fecha, id_producto, id_ubicacion, tipo_movimiento) VALUES ('$fecha_actual', '$id_producto', '$id_ubicacion', 'Producto creado')";

        if ($conexion->query($sql_movimientos) === TRUE) {
            header('Location: ../index.php');
        } else {
            echo 'Error movimientos';
        }
    } else {
        echo 'Error ultimo ID';
    }
} else {
    echo 'Error registro';
}
?>
