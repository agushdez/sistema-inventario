<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema inventario</title>
</head>
<body>
    <h1 class="text-center">Productos</h1>

    <div class="container-fluid row">
    <h2>Formulario de Producto</h2>
    <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del producto">
        </div>
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" placeholder="Ingrese el código del producto">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio del producto">
        </div>
        <div class="mb-3">
            <label for="cantidad_stock" class="form-label">Cantidad en Stock</label>
            <input type="number" class="form-control" id="cantidad_stock" placeholder="Ingrese la cantidad en stock del producto">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" select * from producto ");
                    while($datos=$sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->id ?></th>
                            <th scope="row"><?= $datos->nombre ?></th>
                            <th scope="row"><?= $datos->codigo ?></th>
                            <th scope="row"><?= $datos->precio ?></th>
                            <th scope="row"><?= $datos->cantidad_stock ?></th>
                            <td>
                                <a href="">Editar</a>
                                <a href="">Eliminar</a>
                            </td>
                        </tr>
                <?php }
                ?>
                >
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>