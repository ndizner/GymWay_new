<?php

require 'database.php';
   $db = Database::getInstance();
   $mysqli = $db->getConnection();


   if (isset($_POST["curso"]) && empty($_POST["ano"])) {
     if(is_numeric($_POST["curso"])) {
       $imput = $_POST["curso"];
        $sql = "select * from curso inner JOIN alumnos on dni_alumnos=dni_alumno where Cod_curso =".$imput;
        $result = $mysqli->query($sql);
        }else{
          echo "Solo adminite valores numericos";
        }

   }else if (isset($_POST["ano"]) && empty($_POST["curso"])){
     if(is_numeric($_POST["ano"])) {
       $imput = $_POST["ano"];
       $sql = "select * from curso inner JOIN alumnos on dni_alumnos=dni_alumno where ingreso =".$imput;
       $result = $mysqli->query($sql);
        }else{
          echo "Solo adminite valores numericos";
        }
   }else if (isset($_POST["ano"]) && isset($_POST["curso"])){
     echo "complete una sola opcion";
   }

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<h3>Final!!</h3>
<form action="index.php" class="form" method="post">
  <div class="col-sm-4">
    <label for="name">Codigo Curso</label>
     <input class="form-control"   name="curso" placeholder="Codigo de Curso" type="text">

  </div>
  <div class="col-sm-4">
<label for="name">Año de Ingreso</label> <input class="form-control"   name="ano" placeholder="Año de Ingreso" type="text">
</div>
<div class="col-sm-4">
<button class="submit" type="submit">Consultar!</button>
</div>
</form>

<?php
if(isset($result)){
  if($result->num_rows == 0){
    echo "no hay resultados";
  }else{

  ?>
<div class="container">
  <h3>Listado</h3>

  <table class="table table-condensed">
  <tr>
    <th>Codigo de Curso</th>
    <th>DNI ALUMNO</th>
    <th>NOMBRE Y apellido</th>
    <th>Año Ingreso</th>
  </tr>
  <tr>
    <?php foreach ($result as $r) {
      ?>
      <td><?= $r['Cod_curso'] ?></td>
      <td><?= $r['dni_alumno'] ?></td>
      <td><?= $r['Nombre'].', '.$r['Apellido'] ?></td>
      <td><?= $r['ingreso'] ?></td>
    </tr>
<?php
}
    }
?>
</table>
</div>
<?php
    }
?>
