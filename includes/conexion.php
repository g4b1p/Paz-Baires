<?php

class database {
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $charset = "utf8";
    private $db = "Carrito";

    function conectar() {
        try {
            $conexion = "mysql:host=" . $this->server . "; dbname=" . $this->db . "; charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion, $this->user, $this->password, $options);
            return $pdo;
        } catch(PDOException $e){
            echo 'conexion fallida: ' . $e->getMessage();
            exit;
        }
    }
}

?>