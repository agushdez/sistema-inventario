<?php
include '../database/conexion.php';

class reportes_controller {

    public function obtenerProductosBajoStock() {
        global $conexion;
        $query = "SELECT id, nombre, codigo, cantidad_stock FROM productos WHERE cantidad_stock <= 10";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            $productos = array();

            while ($fila = $result->fetch_assoc()) {
                $productos[] = $fila;
            }

            return $productos;
        } else {
            return array();
        }
    }

    //Funcionalidad futura
    public function agregarDiezMaz($id) {
        global $conexion;
        $query = "UPDATE productos SET cantidad_stock = cantidad_stock + 10 WHERE id = $id";
        $result = $conexion->query($query);
    
        if ($result === TRUE) {
            header('Location: ../index.php');
        } else {
            return false;
        }
    }
}
?>
