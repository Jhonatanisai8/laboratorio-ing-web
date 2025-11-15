<?php

class ProductoController extends Controller
{
    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new Producto();
    }

    public function index()
    {
        $productos = $this->productoModel->getAll();
        $this->view('index', ['productos' => $productos]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->productoModel->create($_POST);
            header('location: /?controller=producto&action=index');
        } else {
            $this->view('create');
        }
    }
}
