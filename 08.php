<?php
include 'includes/header.php';

// Modificadores de acceso
class Empleado {

    // Public, acceso en cualquier lugar (clase u objeto)
    // Protected, unicamente en la clase
    // public, private, protected
    
    protected $nombre;
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

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}

$angel = new Empleado('Angel', 'Travieso', 'T1', 'correo@correo.com', 806);

// $angel->nombre = 'jose'; ❌ error

// ✔ 
$angel->cambiarNombre('jose'); 

echo $angel->obtenerNombre();

echo '<pre><br>';
var_dump($angel);
echo '</pre>';