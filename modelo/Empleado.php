<?php
class Empleado{
    protected $id;
    protected $cargo;
    protected $identificacion;
    protected $nombre;
    protected $salario;
    //Constructor
    /**
     * @param cargo, @param salario, @param nombre, @param identificacion
     */
    public function Empleado($identificacion,$nombre,$cargo){
        $this->identificacion=$identificacion;
        $this->nombre=$nombre;
        $this->cargo=$cargo;
    }
    protected function getCargo(){
        return $this->cargo;
    }
    protected function getIdentificacion(){
        return $this->identificacion;
    }
    protected function getNombre(){
        return $this->nombre;
    }
    protected function getSalario(){
        return $this->salario;
    }
    /** @param newVal */
    protected function setCargo($newVal){
        $this->cargo = $newVal;
    }
    /** @param newVal */
    protected function setIdentificacion($newVal){
        $this->identificacion = $newVal;
    }
    /** @param newVal */
    protected function setNombre($newVal){
        $this->nombre = $newVal;
    }
    /** @param newVal */
    protected function setSalario($newVal){
        $this->salario = $newVal;
    }
}
?>