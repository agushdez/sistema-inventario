<?php
require 'library/fpdf186/fpdf.php';
include 'database/conexion.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 8);

$pdf->Cell(10, 10, 'ID', 1);
$pdf->Cell(40, 10, 'nombre', 1);
$pdf->Cell(20, 10, 'codigo', 1);
$pdf->Cell(40, 10, 'descripcion', 1);
$pdf->Cell(15, 10, 'precio', 1);
$pdf->Cell(20, 10, 'cantidad_stock', 1);
$pdf->Cell(20, 10, 'id_ubicacion', 1);
$pdf->Ln(); // Salto de línea

$query = "SELECT id, nombre, codigo, descripcion, precio, cantidad_stock, id_ubicacion FROM productos";
$result = $conexion->query($query);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(10, 10, $row['id'], 1);
    $pdf->Cell(40, 10, $row['nombre'], 1);
    $pdf->Cell(20, 10, $row['codigo'], 1);
    $pdf->Cell(40, 10, $row['descripcion'], 1);
    $pdf->Cell(15, 10, $row['precio'], 1);
    $pdf->Cell(20, 10, $row['cantidad_stock'], 1);
    $pdf->Cell(20, 10, $row['id_ubicacion'], 1);
    $pdf->Ln(); // Salto de línea
}
$pdf->Output();
?>
