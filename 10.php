<?php
include 'includes/header.php';

// Herencia
class Empleado {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: $this->nombre $this->apellido Email: $this->email";
    }

}

class Proveedor {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa) {
        $this->nombre = $empresa;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->empresa = $empresa;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: $this->nombre $this->apellido Email: $this->email";
    }

}

$empleado = new Empleado('Angel', 'Travieso', 'correo@correo.com', 4654654, 005, 'TI');

$proveedor = new Proveedor('Pedro', 'Perez', 'correo2@correo.com', 6516546, 'TikTok');

echo '<pre>';
var_dump($empleado);
echo '</pre>';

echo '<pre>';
var_dump($proveedor);
echo '</pre>';

$empleado->mostrarInformacion();

echo '<br>';

$proveedor->mostrarInformacion();