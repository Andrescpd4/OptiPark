<?php
class UsuarioModel {
    private $id_usuario;
    private $nombre;
    private $email;
    private $telefono;
	private $contraseña;
    private $fecha_registro;

	// Getters
    public function getIdUsuario() { return $this->id_usuario; }
    public function getNombre() { return $this->nombre; }
    public function getEmail() { return $this->email; }
    public function getTelefono() { return $this->telefono; }
    public function getContraseña() { return $this->contraseña; }
    public function getFechaRegistro() { return $this->fecha_registro; }

    //conectar a la base de datos
    private function conectarBD() {
        $host = 'localhost';
        $dbname = 'optipark';
        $username = 'root';
        $password = '';
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    // Método para obtener todos los usuarios
    public function getAll() {
        $sql = "SELECT id_usuario, nombre, email, telefono, fecha_registro FROM Usuario";
        $conexion = $this->conectarBD();
        $result = $conexion->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un usuario por id
    public function getOne($id_usuario) {
        $sql = "SELECT id_usuario, nombre, email, telefono, fecha_registro FROM Usuario WHERE id_usuario = :id_usuario";
        $conexion = $this->conectarBD();
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $result->execute();
        $usuario = $result->fetch(PDO::FETCH_ASSOC);
        if ($usuario) {
            $this->id_usuario = $usuario['id_usuario'];
            $this->nombre = $usuario['nombre'];
            $this->email = $usuario['email'];
            $this->telefono = $usuario['telefono'];
            $this->fecha_registro = $usuario['fecha_registro'];
        }
        return $usuario;
    }
}
?>
