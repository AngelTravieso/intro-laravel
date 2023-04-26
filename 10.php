<?php
include 'includes/header.php';

class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: $this->nombre $this->apellido Email: $this->email";
    }

    public function getTelefono()
    {
        return $this->telefono;
    }
}

// Herencia
class Empleado extends Persona {
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}


class Proveedor extends Persona {
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa) {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: $this->nombre $this->apellido Email: $this->email de la empresa $this->empresa";
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

echo '<br>';

echo $proveedor->getTelefono();