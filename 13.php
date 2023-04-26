<?php
include 'includes/header.php';
include 'DB.php';

// Comunicar 2 Clases
class Empleado {
    
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;


    public function __construct(string $nombre, string $apellido, string $departamento, string  $email, int $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getCodigo()
    {
        return $this->codigo;
    }


    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getDepartamento()
    {
        return $this->departamento;
    }


    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
}

$angel = new Empleado('Angel', 'Travieso', 'T1', 'correo@correo.com', 806);

$nombre = $angel->getNombre();

$db = new DB($nombre);

$db->guardar();

echo '<br>';

var_dump($db);