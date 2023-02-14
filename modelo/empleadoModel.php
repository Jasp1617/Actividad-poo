<?php
require_once('conexion.php');
class empleadoModel extends conexion{
    public $id;
    public $nombre;
    public $apellido;
    public $tipo_empleado;
    public $salario_basico;

    function __construct(){
        $this->db_name = 'poo';
    }
    
    public function read($id = ''){
        $this->query = ($id != '')
        ? "SELECT * FROM empleados WHERE id = '$id'" 
        : "SELECT * FROM empleados";

        $this->get_query();

        $this->rows;
        //var_dump($this->rows);
        $num_rows = count($this->rows);
        //echo $num_rows;
        $data = array();
        
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
            //$data[$key] = $value;
        }
        return $data;
    }

}
?>