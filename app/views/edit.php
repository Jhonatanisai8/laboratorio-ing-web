<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <h1>Editar Producto</h1>
</div>
<div class="container">
    <form method="post">
        <div class="mb-3">
            <label class="form-label" for="codigo">Codigo: </label>
            <input class="form-control" type="text" id="codigo" name="codigo"
                   value="<?php echo htmlspecialchars($producto['codigo']); ?>">
        </div>

        <div class="mb-3">
            <labelclass
            ="form-label" for="descripcion">Descripcion: </label>
            <input class="form-control" type="text" id="descripcion" name="descripcion"
                   value="<?php echo htmlspecialchars($producto['descripcion']); ?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inventariable">Inventario: </label>
            <input type="hidden" name="inventariable" value="0">
            <input type="checkbox" id="inventariable" name="inventariable"
                   value="1" <?php echo ($producto['inventariable'] == 1) ? 'checked' : ''; ?>>
        </div>

        <div class="mb-3">
            <label class="form-label" for="stock">Stock: </label>
            <input class="form-control" type="number" id="stock" name="stock"
                   value="<?php echo htmlspecialchars($producto['stock']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="activo">Activo: </label>
            <input type="hidden" name="activo" value="0">
            <input type="checkbox" id="activo" name="activo"
                   value="1" <?php echo ($producto['activo'] == 1) ? 'checked' : ''; ?>>
        </div>

        <div class="mb-3">
            <a class="btn btn-secondary" href="?controller=producto&action=index">CANCELAR</a>
            <button class="btn btn-primary" type="submit">Registrar</button>
        </div>

    </form>
</div>
</body>

</html>