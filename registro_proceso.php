<?php
    include("conexion.php");
    $usuario=$_POST["usuario"];

    $password=hash ("whirlpool",$_POST["password"]);
   
    $email=$_POST["email"];

    $statement = "INSERT INTO usuarios(nombre,contrasena,email)
    VALUES ('$usuario', '$password', '$email')";
        
    //echo $statement;
        $resultado=$conexionBD->query($statement);

        if ($resultado){
           echo "Si se Inserto el registro";
            }
        else {
                echo "No se inserto el registro :( ";
        }


?>