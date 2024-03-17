<?php
include '../database/conexion.php';
include '../library/fpdf186/fpdf.php';

class reportes_controller
{

    public function obtenerProductosBajoStock()
    {
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

    public function generarReporteBajoStock22()
    {
        require('fpdf.php');

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, '¡Hola, Mundo!');
        $pdf->Output();
    }

    public function generarReporteBajoStock()
    {
        header('Location: ../index.php');
    }

    //Funcionalidad futura
    public function agregarDiezMaz($id)
    {
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
