<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

include("conexion.php");

$sentencia="SELECT Nombre,password,email,lugares FROM usuarios";
$resultado=$conexionBD->query($sentencia);


$usuarios=array();


while($fila=mysqli_fetch_assoc($resultado)){
    $usuarios[]=$fila;
}

echo "<table class=\"table table-striped\" >
<tr>
<th>Nombre</th>
<th>Password</th>
<th>Email</th>
<th>Lugares</th>
</tr>";

foreach($usuarios AS $usuario){
$Nombre=$usuario["Nombre"];
$password=$usuario["password"];
$email=$usuario["email"];
$lugares=$usuario["lugares"];

echo "<tr>
        <td>$Nombre</td>
        <td>$password</td>
        <td>$email</td>
        <td>$lugares</td>

    </tr>";

}

echo  "</table>";
//var_dump($usuarios);

?>
</body>
</html>


