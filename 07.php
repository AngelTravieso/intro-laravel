<?php
include 'includes/header.php';

// Métodos
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string  $email, int $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function nombreEmpleado()
    {
        echo "$this->nombre $this->apellido";
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;
    }

}

$angel = new Empleado('Angel', 'Travieso', 'T1', 'correo@correo.com', 806);
echo $angel->nombreEmpleado();

echo '<br>';


$maria = new Empleado('Maria', 'Pérez', 'MKT', 'correo2@correo.com', 007);
echo $maria->nombreEmpleado();

echo '<pre><br>';
var_dump($angel);
echo '</pre>';

echo '<pre><br>';
var_dump($maria);
echo '</pre>';

$departamento1 = $angel->departamentoEmpleado();
echo $departamento1;