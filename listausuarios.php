<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php
    include("conexion.php");
    $sentencia = "SELECT nombre,contrasena,email,lugares FROM usuarios";
    $resultado = $conexionBD->query($sentencia);

    $usuarios = array();

    while($fila = mysqli_fetch_assoc($resultado))
    {
        $usuarios[]=$fila;
    }
    
    echo "<table class=\"table table-striped\">
        <tr>
            <th>nombre</th>
            <th>password</th>
            <th>Email</th>
            <th>Lugares</th>
        </tr>";

    foreach($usuarios AS $usuario)
    {
        $nombre = $usuario["nombre"];
        $password = $usuario["contrasena"];
        $email = $usuario["email"];
        $lugares = $usuario["lugares"];
       #
        

        echo "<tr>
            <td>$nombre</td>
            <td>$password</td>
            <td>$email</td>
            <td>$lugares</td>
        </tr>";
    }
    echo"</table>"

    #var_dump($resultado);
?>
    
</body>
</html>


