<?php
include 'includes/header.php';

// Métodos estáticos
class Empleado {

    // Public, acceso en cualquier lugar (clase u objeto)
    // Protected, unicamente en la clase
    // public, private, protected
    
    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;


    public function __construct(string $nombre, string $apellido, string $departamento, string  $email, int $codigo) {
        self::$nombre = $nombre;
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


    public static function obtenerEmpleado()
    {
        echo 'Desde método estático';
    }


    public static function getNombre()
    {
        return self::$nombre;
    }
}

Empleado::obtenerEmpleado();

$angel = new Empleado('Angel', 'Travieso', 'T1', 'correo@correo.com', 806);

echo '<br>';

echo $angel::getNombre();

echo '<pre><br>';
var_dump($angel);
echo '</pre>';