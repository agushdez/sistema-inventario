<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <?php
    include '../database/conexion.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM productos WHERE id = $id";
    $result = $conexion->query($sql);
    $data = $result->fetch_assoc();
    ?>
    <h2>Editar Producto</h2>
    <form action="../controllers/editar_producto.php?id=<?= $data['id'] ?>" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="id_ubicacion_temporal" value="<?= $data['id_ubicacion'] ?>

        <div class=" form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $data['nombre'] ?>">
</div>
<div class="form-group">
    <label for="codigo">Código:</label>
    <input type="number" class="form-control" id="codigo" name="codigo" value="<?= $data['codigo'] ?>">
</div>
<div class="form-group">
    <label for="descripcion">Descripción:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion"
           value="<?= $data['descripcion'] ?>">
</div>
<div class="form-group">
    <label for="precio">Precio:</label>
    <input type="number" class="form-control" id="precio" name="precio" value="<?= $data['precio'] ?>">
</div>
<div class="form-group">
    <label for="cantidad_stock">Cantidad en Stock:</label>
    <input type="number" class="form-control" id="cantidad_stock" name="cantidad_stock"
           value="<?= $data['cantidad_stock'] ?>">
</div>
<div class="form-group">
    <label for="id_ubicacion">id_ubicacion</label>
    <input type="number" class="form-control" id="id_ubicacion" name="id_ubicacion"
           value="<?= $data['id_ubicacion'] ?>">
</div>
<button type="submit" class="btn">Editar</button>
</form>
</div>
</body>
</html>
