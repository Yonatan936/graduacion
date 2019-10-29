<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<?php

include ("conexion.php");
$usuario=$_POST["usuario"];
$contrasena =hash ("whirlpool",$_POST["contrasena"]);
$statement = "SELECT Nombre,contrasena
                 FROM usuarios
                 WHERE contrasena ='$contrasena'
                 AND Nombre='$usuario'";
        $resultado =$conexionBD->query($statement);

        if($resultado->num_rows>0)
        {
            echo "<h1 class =\"text-success\">Bienveido".$usuario."</h1>";
            
        }
        else {
            echo "<h1 class =\"text-danger\">Usuario o contraseña incorrectos</h1>";
        }


?>

 


</body>
</html>