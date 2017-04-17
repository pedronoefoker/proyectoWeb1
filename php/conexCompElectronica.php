<?php

  $serverDB= "localhost"; 
  $userDB = "root";
  $passDB = "";
  $DB = "tiendaonline";

  $conexion = new mysqli($serverDB,$userDB,$passDB,$DB);
  if($conexion -> connect_errno)
    die("Fallo la conexion:(".$conexion -> mysqli_connect_error().")".$conexion -> mysqli_connect_error());


$clasificaion = "SELECT * FROM articulos WHERE clasificacion LIKE 'Electronica'";
$resClasificacion = $conexion -> query($clasificaion);

?>