<?php
include 'includes/header.php';

class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
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