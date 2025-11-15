<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 11</title>
</head>
<body>
<div>
    <h1>Lista de Productos</h1>
</div>
<div>
    <div>
        <a href="?controller=producto&action=create">Crear un Nuevo Producto</a>
    </div>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>DESCRIPCION</th>
                <th>INVENTARIABLE</th>
                <th>STOCK</th>
                <th>ACTIVO</th>
                <th>ACCIONES</th>
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
                        <a href="">EDITAR</a>
                        <a href="">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>