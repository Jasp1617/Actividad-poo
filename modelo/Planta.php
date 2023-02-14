<?php
/**
 * @author César Cuéllar
 * @version 1.0
 * @created 20-oct-2013 07:47:30 a.m.
 */
class Planta extends Empleado
{
private $deducciones;
private $sueldoBasico;
private $valorExtras;
//Constructor
public function Planta($identificacion,$nombre,$cargo)
{
//ejecutamos el constructor de la clase Padre Empleado
parent::__construct($identificacion,$nombre,$cargo);
}
public function calcularSalario()
{
$this->salario=$this->sueldoBasico + $this->valorExtras -
$this->deducciones;
}
public function getDeducciones()
{
return $this->deducciones;
}
public function getSueldoBasico()
{
return $this->sueldoBasico;
}
public function getValorExtras()
{
return $this->valorExtras;
}
public function getCargo(){
    return $this->cargo;
}
public function getIdentificacion()
{
return $this->identificacion;
}
public function getNombre()
{
return $this->nombre;
}
public function getSalario()
{
return $this->salario;
}
/** @param newVal */
public function setDeducciones($newVal)
{
$this->deducciones = $newVal;
}
/** @param newVal */
public function setSueldoBasico($newVal)
{
$this->sueldoBasico = $newVal;
}
/** @param newVal */
public function setValorExtras($newVal)
{
$this->valorExtras = $newVal;
}
}
?>