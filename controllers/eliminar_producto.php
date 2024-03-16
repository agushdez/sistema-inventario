<?php
include '../database/conexion.php'; //Ajjjjj!!

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id=$id";
if ($conexion->query($sql) === TRUE) {
    $fecha_actual = date('Y-m-d'); // Obtiene la fecha actual en el formato de tipo DATE
    $sql_movimientos = "INSERT INTO movimientos (fecha, id_producto, id_ubicacion, tipo_movimiento) VALUES ('$fecha_actual', '$id', ' --- ', 'Eliminacion del producto')";
    if ($conexion->query($sql_movimientos) === TRUE) {
        header('Location: ../index.php');
    }
    header('Location: ../index.php');
} else {
    echo 'Error al eliminar el producto';
}
?>
