<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Productos con Stock Bajo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <a

    <div class="container mt-5">
        <h2>Reporte de Productos con Stock Bajo(MENOS DE 10)</h2>
        <a href='../controllers/reportes_controller.php?action=generarReporteBajoStock' class='btn btn-sm'>Generar PDF</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Cantidad en Stock</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../controllers/reportes_controller.php';

                $reportesController = new reportes_controller();
                $productos = $reportesController->obtenerProductosBajoStock();

                foreach ($productos as $producto) {
                    echo "<tr>
                            <td>{$producto['id']}</td>
                            <td>{$producto['nombre']}</td>
                            <td>{$producto['codigo']}</td>
                            <td>{$producto['cantidad_stock']}</td>
                            <td>
                                <a href='../controllers/reportes_controller.php?action=generarReporteBajoStock' class='btn btn-sm'>+10</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
