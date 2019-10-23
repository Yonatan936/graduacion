<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link ref= "stylessheet" href="css/main.css"/>
</head>
<body>
    
    <p class="text-info">
        <?php 
         $usuario=$_Get["usuario"];
            echo $usuario;
         ?>

    </p>
    <p class="text-info">

        <?php 
            $password=$_Get["password"];
            echo $password;
        ?>
    </p>
</body>
</html>