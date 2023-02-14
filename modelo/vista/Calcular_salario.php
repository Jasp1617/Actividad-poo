<?php// require_once('../controlador/salario.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cálculo de salarios</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Cálculo de salarios</h1>
      <form>
        <div class="form-group">
          <label for="tipoEmpleado">Tipo de empleado</label>
          <select class="form-control" id="tipoEmpleado">
            <option value="contratista">Contratista</option>
            <option value="planta">De planta</option>
          </select>
        </div>
        <div class="form-group">
          <label for="valorHora">Valor por hora</label>
          <input type="text" class="form-control" id="valorHora" placeholder="Ingrese el valor por hora" disabled>
        </div>
        <div class="form-group">
          <label for="totalHoras">Total de horas trabajadas</label>
          <input type="text" class="form-control" id="totalHoras" placeholder="Ingrese el total de horas trabajadas">
        </div>
        <div class="form-group">
          <label for="sueldoBasico">Sueldo básico</label>
          <input type="text" class="form-control" id="sueldoBasico">
        </div>
        <div class="form-group">
          <input type="submit" class="form-control btn btn-success" id="sueldoBasico">
        </div>
    </div>
  </body>
</html>