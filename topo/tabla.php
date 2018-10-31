<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tecnologia";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 if ($_GET["cod_curso"]){
   if ($_GET["ano_ingreso"]){
     echo "solo puede introducir un valor";
   }else{
     $resultado = $conn->query("select * from curso inner JOIN alumnos on Dni_alumno=dni_alumno where Cod_curso =".$_GET["cod_curso"]);
     if($resultado->num_rows == 0){
       echo "no hay resultados";
     }else{
?>
     <table class="table table-condensed">
     <tr>
       <th>Codigo de Curso</th>
       <th>DNI ALUMNO</th>
       <th>NOMBRE Y apellido</th>
       <th>Año Ingreso</th>
     </tr>
     <tr>
       <?php foreach ($resultado as $linea) {
         ?>
         <td><?= $linea['Cod_curso'] ?></td>
         <td><?= $linea['dni_alumno'] ?></td>
         <td><?= $linea['Nombre'].', '.$linea['Apellido'] ?></td>
         <td><?= $linea['ingreso'] ?></td>
       </tr>
     <?php
     }
}
     ?>
     </table>

<?php


   }

 }

 if ($_GET["ano_ingreso"]){
   if ($_GET["cod_curso"]){
     echo "solo puede introducir un valor";
   }else{
     $resultado = $conn->query("select * from curso inner JOIN alumnos on Dni_alumno=dni_alumno where Cod_curso =".$_GET["ano_ingreso"]);
     if($resultado->num_rows == 0){
       echo "no hay resultados";
     }else{
?>
     <table class="table table-condensed">
     <tr>
       <th>Codigo de Curso</th>
       <th>DNI ALUMNO</th>
       <th>NOMBRE Y apellido</th>
       <th>Año Ingreso</th>
     </tr>
     <tr>
       <?php foreach ($resultado as $linea) {
         ?>
         <td><?= $linea['Cod_curso'] ?></td>
         <td><?= $linea['dni_alumno'] ?></td>
         <td><?= $linea['Nombre'].', '.$linea['Apellido'] ?></td>
         <td><?= $linea['ingreso'] ?></td>
       </tr>
     <?php
     }
}
     ?>
     </table>

<?php


   }

 }
?>
<a href="index.html">Realizar Otra Consulta</a>
