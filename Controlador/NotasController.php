<?php
require_once 'modelo/Nota.php';

class NotaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Nota();
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $estudiante = $_POST['estudiante'];
            $descripcion = $_POST['descripcion'];
            $nota = floatval($_POST['nota']);

            $this->modelo->registrar($estudiante, $descripcion, $nota);
            header("Location: index.php?action=listar");
        } else {
            include 'vista/registrar.php';
        }
    }

    public function listar() {
        $notas = $this->modelo->listar();
        $promedio = $this->modelo->promedio();
        include 'vista/listar.php';
    }
}
