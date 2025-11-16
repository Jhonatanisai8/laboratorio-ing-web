<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 11</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/general.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="h1">Lista de Productos</h1>
</div>
<div class="container">
    <div>
        <a style="margin: 10px;" class="btn btn-primary" href="?controller=producto&action=create">Crear un Nuevo
            Producto</a>
    </div>
    <div>
        <table class="table table-bordered border-primary">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CODIGO</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">INVENTARIABLE</th>
                <th scope="col">STOCK</th>
                <th scope="col">ACTIVO</th>
                <th scope="col">ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto["id_producto"]) ?></td>
                    <td><?php echo htmlspecialchars($producto["codigo"]) ?></td>
                    <td><?php echo htmlspecialchars($producto["descripcion"]) ?></td>
                    <td><?php echo htmlspecialchars($producto["inventariable"]) ?></td>
                    <td><?php echo htmlspecialchars($producto["stock"]) ?></td>
                    <td><?php echo htmlspecialchars($producto["activo"]) ?></td>
                    <td>
                        <a class="btn btn-warning"
                           href="?controller=producto&action=edit&id_producto=<?php echo $producto['id_producto']; ?>">
                            Editar
                        </a>
                        <a class="btn btn-danger"
                           href="?controller=producto&action=delete&id_producto=<?php echo $producto['id_producto']; ?>">
                            ELIMINAR
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>