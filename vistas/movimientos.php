<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Movimientos</title>
</head>
<body>
<div class="text-center"></div>
<a href="../index.php">Regresar</a>
<h2>Movimientos y registros</h2>
<a href="fpdfmovimientos.php">Reporte PDF</a>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>fecha ultima modificacion</th>
        <th>tipo_movimiento</th>
        <th>id_producto</th>
        <th>id_ubicacion</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include '../database/conexion.php';
    $query = "SELECT * FROM movimientos";
    $result = $conexion->query($query);
    while ($data = $result->fetch_assoc()) {
        echo "<tr>
                    <td>{$data['id']}</td>
                    <td>{$data['fecha']}</td>
                    <td>{$data['tipo_movimiento']}</td>
                    <td>{$data['id_producto']}</td>
                    <td>{$data['id_ubicacion']}</td>
                </tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>