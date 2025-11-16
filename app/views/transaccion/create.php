<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Nueva Transacción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Registrar Nueva Transacción</h1>

    <form method="post" action="?controller=transaccion&action=create">
        <div class="mb-3">
            <label for="id_producto" class="form-label">Producto:</label>
            <select class="form-select" id="id_producto" name="id_producto" required>
                <option value="" disabled selected>Seleccione un producto</option>
                <?php foreach ($productos as $producto): ?>
                    <option value="<?php echo htmlspecialchars($producto['id_producto']); ?>">
                        <?php echo htmlspecialchars($producto['descripcion']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
        </div>

        <div class="mb-3">
            <label for="precio_unitario" class="form-label">Precio Unitario (S/):</label>
            <input type="number" class="form-control" id="precio_unitario" name="precio_unitario" step="0.01" min="0.01" required>
        </div>

        <div>
            <a class="btn btn-secondary" href="?controller=producto&action=index">CANCELAR</a>
            <button class="btn btn-primary" type="submit">Registrar Transacción</button>
        </div>
    </form>
</div>
</body>
</html>
