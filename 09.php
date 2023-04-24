<?php
include 'includes/header.php';

// Getters y Setters
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

    /*
        Get - Para obtener un valor
        Set - Para modificar un valor
    */
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

$angel->setNombre('Maria'); 
$angel->setCodigo('2030'); 
$angel->setDepartamento('ADMIN'); 

echo $angel->getNombre();
echo '<br>';
echo $angel->getCodigo();
echo '<br>';
echo $angel->getDepartamento();

echo '<pre><br>';
var_dump($angel);
echo '</pre>';