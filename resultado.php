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
$password =hash ("whirlpool",$_POST["password"]);
$statement = "SELECT Nombre,contrasena
                 FROM usuarios
                 WHERE contrasena ='$password'
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