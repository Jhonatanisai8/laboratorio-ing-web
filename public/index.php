<?php

require_once '../core/Autoloader.php';

// Compatibilidad con PHP < 7 usando isset en lugar de ??.
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controllerName = ucfirst($controller) . 'Controller';

if (class_exists($controllerName)) {
    $controllerInstance = new $controllerName();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        die("La acción $action no existe en el controlador $controllerName.");
    }
} else {
    die("El controlador $controllerName no existe.");
}
