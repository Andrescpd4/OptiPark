<?php
// Ejemplo básico para tu controlador ClientesController.php

class ClientesController {

    public function crear() {
        require 'views/clientes/crear.php';
    }

    public function guardar() {
        // Aquí deberías validar y guardar los datos en la base de datos
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        // Ejemplo: guardar en la base de datos (ajusta según tu modelo)
        // Cliente::crear(['nombre' => $nombre, 'email' => $email, 'telefono' => $telefono]);

        // Redirige al listado de clientes
        header('Location: index.php?controller=clientes&action=index');
        exit;
    }
}