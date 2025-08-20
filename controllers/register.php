<?php
require_once __DIR__ . '/../database/config.php';
require_once __DIR__ . '/../models/Usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($nombre) && !empty($email) && !empty($telefono) && !empty($password)) {
        $usuario = new Usuario($conexion);
        if ($usuario->registrar($nombre, $email, $telefono, $password)) {
            echo json_encode(["status" => "ok", "message" => "Registro exitoso. Ahora debe iniciar sesión."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error al registrar usuario."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios."]);
    }
}
?>
