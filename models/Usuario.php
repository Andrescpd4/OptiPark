<?php
class Usuario {
    private $db;

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    public function registrar($nombre, $email, $telefono, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO Usuario (nombre, email, telefono, contraseña) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nombre, $email, $telefono, $hash]);
    }
}
?>
