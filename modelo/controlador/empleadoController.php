<?php
require_once('../empleadoModel.php');

class EmpleadoController{
    private $model;
    public function __construct(){
        $this->model = new EmpleadoModel();
    }
    public function read( $id = '' ){
        return $this->model->read($id);
    }
    public function __destruct(){
        //unset($this);
    }

}
?>