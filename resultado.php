<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="col-md-6">
            <form action ="graduacion.php" method="GET">
    <p class="text-info">
        <?php 
            $usuario=$_GET["usuario"];
            echo $usuario;
         ?>

    </p>
    <p class="text-info">

        <?php 
            $password=$_GET["password"];
            echo $password;
        ?>
    </p>
    <button class="btn btn-outline-primary btn-block">
                        <i class="fas "></i> SALIR</button>

</body>
</html>