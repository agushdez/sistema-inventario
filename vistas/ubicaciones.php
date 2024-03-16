<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Ubicaciones</title>
</head>
<body>
    <a href="../index.php">Regresar</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>sector</th>
            <th>seccion</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../database/conexion.php';
        $query = "SELECT * FROM ubicaciones";
        $result = $conexion->query($query);
        while ($data = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$data['id']}</td>
                    <td>{$data['sector']}</td>
                    <td>{$data['seccion']}</td>
                </tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>