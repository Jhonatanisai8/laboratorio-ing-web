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

}
