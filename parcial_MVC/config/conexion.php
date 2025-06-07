<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $dbname = "notas_db";
        $usuario = "root";
        $password = ""; // coloca tu contraseña aquí si tienes

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
