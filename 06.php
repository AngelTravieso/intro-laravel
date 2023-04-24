<?php
include 'includes/header.php';

// Constructor property promotion
class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {
        
    }

}

$angel = new Empleado('Angel', 'Travieso', 'T1', 'correo@correo.com', 806);
$maria = new Empleado('Maria', 'Pérez', 'MKT', 'correo2@correo.com', 007);

echo '<pre><br>';
var_dump($angel);
echo '</pre>';

echo '<pre><br>';
var_dump($maria);
echo '</pre>';