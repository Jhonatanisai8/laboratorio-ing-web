<?php

class TransaccionController extends Controller
{
    private $transaccionModel;
    private $productoModel;

    public function __construct()
    {
        $this->transaccionModel = new Transaccion();
        $this->productoModel = new Producto();
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // 1. Obtener datos del POST
            $id_producto = $_POST['id_producto'];
            $cantidad = (int)$_POST['cantidad'];
            $precio_unitario = (float)$_POST['precio_unitario'];

            // 2. Obtener detalles del producto para guardar su nombre
            $producto = $this->productoModel->getById($id_producto);

            if ($producto) {
                // 3. Calcular valores
                $subtotal = $cantidad * $precio_unitario;
                $igv = $subtotal * 0.18; // 18% de IGV
                $total = $subtotal + $igv;

                // 4. Preparar datos para guardar
                $data = [
                    'id_producto' => $id_producto,
                    'nombre_producto' => $producto['descripcion'], // Usamos la descripción como nombre
                    'cantidad' => $cantidad,
                    'precio_unitario' => $precio_unitario,
                    'subtotal' => $subtotal,
                    'igv' => $igv,
                    'total' => $total,
                ];

                // 5. Guardar la transacción
                $this->transaccionModel->create($data);

                // 6. Redirigir a la lista de productos
                header('location: /?controller=producto&action=index');
            } else {
                // Si el producto no existe, simplemente redirigir
                header('location: /?controller=producto&action=index');
            }

        } else {
            // Si es GET, mostrar el formulario con la lista de productos
            $productos = $this->productoModel->getAll();
            $this->view('transaccion/create', ['productos' => $productos]);
        }
    }
}
