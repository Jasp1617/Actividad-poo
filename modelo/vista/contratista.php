<?php
include('../Empleado.php');
include "../Contratista.php";
include("../controlador/empleadoController.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Contratista</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="../../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="planta.php">Planta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card d-flex border border-success" style="width: 40rem;">
            <div class="card-body ">
                <h4>Calcular Salario Empleado Contratista</h4>
                <?php
                $empleado = new EmpleadoController();

                $data = $empleado->read(2);

                for ($n = 0; $n < count($data); $n++) {
                    $id_empleado = $data[$n]['id'];
                    $nombre_empleado = $data[$n]['nombre'];
                    $apellido_empleado = $data[$n]['apellido'];
                    $doc_empleado = $data[$n]['documento'];
                    $tipo_empleado = $data[$n]['tipo_empleado'];
                    $salario_empleado = $data[$n]['salario_basico'];
                }

                //Datos de Entrada Empleado Contratista
                
                /* $tipoEmpleado = "Contratista";
                $identificacion = "123";
                $nombre = "Angie Cepeda";
                $cargo = "Secretaria"; */

                $totalHorasTrabajadas = 160;
                //Creamos el objeto
                $objContratista = new Contratista($id_empleado, $nombre_empleado, $tipo_empleado);

                //$objContratista = new Contratista($identificacion,$nombre,$cargo);
                //modificamos atributos del empleado de Contrato
                $objContratista->setvalorHora(4000);
                $objContratista->setTotalHoras($totalHorasTrabajadas);
                //imprimimos datos de entrada
                ?>
                <div class="form group row">
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Nombres del empleado</label>
                        <input type="text" class="form-control border-success" placeholder="<?php echo $nombre_empleado . ' ' . $apellido_empleado ?>" disabled>
                    </div>
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Cargo del empleado</label>
                        <input type="text" class="form-control border-success" placeholder=<?php echo $tipo_empleado ?> disabled>
                    </div>
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Valor de la hora</label>
                        <input type="text" class="form-control border-success" placeholder=<?php echo $objContratista->getValorHora() ?> disabled>
                    </div>
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Total horas trabajas en el mes</label>
                        <input type="text" class="form-control border-success" placeholder=<?php echo $objContratista->getTotalHoras() ?> disabled>
                    </div>
                    <?php
                //calculamos el salario del empleado de Contrato
                $objContratista->calcularSalario(4000, $totalHorasTrabajadas); ?>
                <div class="mt-5 ml-3">
                    <h4>Resultados:</h4>
                </div>
                    <div class="col-md-12 my-sm-1">
                        <label for="idEmpleado">Nombres del empleado</label> 
                        <input type="text" class="form-control border-success" placeholder="<?php echo $nombre_empleado . ' ' . $apellido_empleado ?>" disabled>
                    </div>
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Cargo del empleado</label> 
                        <input type="text" class="form-control border-success" placeholder=<?php echo $tipo_empleado ?> disabled> 
                    </div>
                    <div class="col-md-6 my-sm-1">
                        <label for="idEmpleado">Salario Neto a recibir en el Mes</label>
                        <input type="text" class="form-control border-success" placeholder=<?php echo $objContratista->getSalario() ?> disabled>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
</body>

</html>