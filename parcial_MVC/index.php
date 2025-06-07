<?php
require_once 'controlador/NotaController.php';

$action = $_GET['action'] ?? 'registrar';
$controlador = new NotaController();

if (method_exists($controlador, $action)) {
    $controlador->$action();
} else {
    echo "Acción no válida.";
}
