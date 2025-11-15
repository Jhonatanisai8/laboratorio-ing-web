<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>

<body>
    <div>
        <h1>Creacion de nuevo Producto</h1>
    </div>
    <div>
        <form method="post">
            <div>
                <label for="codigo">Codigo: </label>
                <input type="text" id="codigo" name="codigo" required>
            </div>



            <div>
                <label for="descripcion">Descripcion: </label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            <div>
                <label for="inventariable">Inventario: </label>
                <input type="hidden" name="inventariable" value="0">
                <input type="checkbox" id="inventariable" name="inventariable" value="1" checked>
            </div>

            <div>
                <label for="stock">Stock: </label>
                <input type="number" id="stock" name="stock" required>
            </div>

            <div>
                <label for="activo">Activo: </label>
                <input type="hidden" name="activo" value="0">
                <input type="checkbox" id="activo" name="activo" value="1" checked>
            </div>

            <div>
                <a href="?controller=producto&action=index">CANCELAR</a>
                <button type="submit">Registrar</button>
            </div>


        </form>
    </div>
</body>

</html>