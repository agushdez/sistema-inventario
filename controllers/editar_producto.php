<?php
include '../database/conexion.php'; //Ajjjjj!!

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad_stock = $_POST['cantidad_stock'];
$id_ubicacion = $_POST['id_ubicacion'];
$id_ubicacion_temporal = $_POST['id_ubicacion_temporal'];

if ($id_ubicacion <= 10) {
    $sql = "UPDATE productos SET nombre='$nombre', codigo='$codigo', descripcion='$descripcion', precio='$precio', cantidad_stock='$cantidad_stock' , id_ubicacion='$id_ubicacion' WHERE id=$id";
} else {
    echo 'El valor de id_ubicacion debe ser igual o menor a 10';
}


if ($conexion->query($sql) === TRUE) {
    //si ubicacion temporal cambia de estado significa que lo tenemos que reportar a la tabla de movimientos
    if ($id_ubicacion != $id_ubicacion_temporal) {
        $fecha_actual = date('Y-m-d'); // Obtiene la fecha actual en el formato de tipo DATE
        $sql_movimientos = "INSERT INTO movimientos (fecha, id_producto, id_ubicacion, tipo_movimiento) VALUES ('$fecha_actual', '$id', '$id_ubicacion', 'Cambio de id_ubicacion')";
        if ($conexion->query($sql_movimientos) === TRUE) {
            header('Location: ../index.php');
        }
    }
    header('Location: ../index.php');
} else {
    echo 'Error al actualizar el producto:';
}
?>
