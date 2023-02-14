<?php
/**
 * @author César Cuéllar
 * @version 1.0
 * @created 20-oct-2013 07:47:29 a.m.
 */
class Contratista extends Empleado {
private $totalHoras;
private $valorHora;
//Constructor
public function Contratista($identificacion,$nombre,$cargo){
//ejecutamos el connstructor de la clase Padre Empleado
parent::__construct($identificacion,$nombre,$cargo);
}
/** @param totalHoras, @param valorHora */
public function calcularSalario($valorHora, $totalHoras)
{
$this->salario= $valorHora*$totalHoras;
}
public function getTotalHoras()
{
return $this->totalHoras;
}
public function getValorHora()
{
return $this->valorHora;
}
public function getCargo()
{
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
public function setTotalHoras($newVal)
{
$this->totalHoras = $newVal;
}
/** @param newVal */
public function setValorHora($newVal)
{
$this->valorHora = $newVal;
}
}
?>