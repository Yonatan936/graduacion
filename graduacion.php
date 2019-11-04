<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">

    <script>
$function() {
    $botn=$("button");
    $botn.on=("clik",funtion(evento)){
        evento.preventDefault();
        var usuario =$('[name]="usuario"');
        var contrasena=$('[name]="password"');
         }
    
}
    </script>
    <style> 
    .fa.pin {
        display.none;
    
    }
    </style>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<script>
    $(function(){
            $boton=$("button");
            $boton.on("click",function(evento){
                evento.preventDefault();
                var usuario=$('[name="usuario" ');
                var contrasena=$('[name="password" ');
                $.ajax({
                        url:"resultado.php",
                        method:"POST",
                        data:{
                            usuario.usuario,
                            password.contrasena
                        }
                })
                    .done(function)
            });
    });
    </script>
      
    <form action ="resultado.php" method="GET">
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/user.png" th:src="/img/user.png"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
            </div>
         </div>
    </div>

</body>
</html>