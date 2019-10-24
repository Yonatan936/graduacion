<?php
$conexionBD= new mysqli ("localhost","root","admin1234","graduacion");

if ($conexionBD->connect_error){
    die("Error en la conexion".$conexionBD->connect_error);
}
else {
    echo"Conexion exitosa a la base de datos";
}
?>