<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
        include("conexion.php");
        $usuario=$_POST["usuario"];
        $contrasena = hash("whirlpool",$_POST["contrasena"]);

        $statement = "SELECT contrasena
                        FROM usuarios
                        WHERE contrasena ='$contrasena'
                        AND nombre = '$usuario'";
        $resultado = $conexionBD->query($statement);
        if($resultado->num_rows>0)
        {
            session_start();
            $_SESSION["usuario"]=$usuario;
            echo "<h1 class=\"text-success\">Bienvenid@".$usuario."</h1>";
        }
        else
        {
            echo "<h1 class=\"text-error\">Ususario o contraseña incorrecta!</h1>";
        }
        
    ?>
    <p class="text-info">
        <?php
            $usuario=$_POST["usuario"];
            echo $usuario; 
        ?>
    </p>
    <p class="text-info">
         <?php
            $password=$_POST["password"];
            echo $password;
        ?>
    </p>
    
</body>
</html>