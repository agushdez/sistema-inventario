<?php
require 'library/fpdf186/fpdf.php';
include 'database/conexion.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(30, 10, 'ID', 1);
$pdf->Cell(40, 10, 'Fecha', 1);
$pdf->Cell(50, 10, 'Tipo de Movimiento', 1);
$pdf->Cell(30, 10, 'ID Producto', 1);
$pdf->Cell(30, 10, 'ID Ubicacion', 1);
$pdf->Ln(); // Salto de línea

$query = "SELECT id, fecha, tipo_movimiento, id_producto, id_ubicacion FROM movimientos";
$result = $conexion->query($query);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['id'], 1);
    $pdf->Cell(40, 10, $row['fecha'], 1);
    $pdf->Cell(50, 10, $row['tipo_movimiento'], 1);
    $pdf->Cell(30, 10, $row['id_producto'], 1);
    $pdf->Cell(30, 10, $row['id_ubicacion'], 1);
    $pdf->Ln(); // Salto de línea
}
$pdf->Output();
?>
