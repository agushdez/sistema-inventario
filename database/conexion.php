<?php
$conexion = new mysqli('localhost', 'root', '', 'sistemainventario');
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
?>
