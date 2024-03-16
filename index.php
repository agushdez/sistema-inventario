<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-3">Lista de Productos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad en Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'database/conexion.php';
                $query = "SELECT * FROM productos";
                $result = $conexion->query($query);
                while ($data = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$data['id']}</td>
                            <td>{$data['nombre']}</td>
                            <td>{$data['codigo']}</td>
                            <td>{$data['descripcion']}</td>
                            <td>{$data['precio']}</td>
                            <td>{$data['cantidad_stock']}</td>
                            <td>
                                <a href='vistas/editar-producto.php?id={$data['id']}' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='controllers/eliminar_producto.php?id={$data['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>

        <h2 class="mt-5">Agregar Producto</h2>
        <form action="controllers/crear_producto.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="number" class="form-control" id="codigo" name="codigo">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="cantidad_stock">Cantidad en Stock:</label>
                <input type="number" class="form-control" id="cantidad_stock" name="cantidad_stock">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
</body>
</html>
