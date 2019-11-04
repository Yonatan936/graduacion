<?php
    include("conexion.php");
    $usuario=$_POST["nombre"];
    $contrasena = hash("whirlpool",$_POST["contrasena"]);
    $email = $_POST["email"];


    $statement = "INSERT INTO usuarios(nombre,contrasena,email)
                    VALUES('$usuario', '$contrasena', '$email')";

        #echo $statement;
        $resultado = $conexionBD->query($statement);
        if($resultado)
        {
            echo "si se inserto el registro";
        }
        else
        {
            echo "el registro no se registro";
        }

?>