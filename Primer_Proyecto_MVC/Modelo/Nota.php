<?php
require_once 'config/conexion.php';

class Nota {
    private $conexion;

    public function __construct() {
        $this->conexion = Conexion::conectar();
    }

    public function registrar($estudiante, $descripcion, $nota) {
        $sql = "INSERT INTO notas (estudiante, descripcion, nota) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$estudiante, $descripcion, $nota]);
    }

    public function listar() {
        $sql = "SELECT * FROM notas";
        $stmt = $this->conexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function promedio() {
        $sql = "SELECT AVG(nota) as promedio FROM notas";
        $stmt = $this->conexion->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['promedio'];
    }
}
