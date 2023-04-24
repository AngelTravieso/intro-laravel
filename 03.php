<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;

$empleado->nombre = 'Angel';
$empleado->apellido = 'Travieso';

echo '<pre>';
var_dump($empleado);
echo '</pre>';

$empleado2 = new Empleado;

$empleado2->nombre = 'Jose';
$empleado2->apellido = 'Perez';

echo '<pre>';
var_dump($empleado2);
echo '</pre>';