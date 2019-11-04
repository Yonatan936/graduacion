<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Registro</title>
</head>
<body>
    <section class="rom">
    <div class="col-md-6">
            <form action="registro_proceso.php" method= "POST">
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="usuario" class="form-control" name="nombre">
                </div> 
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" class="form-control" name ="contrasena">
                </div>    
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name = "email">
                </div>       
                <button class="btn btn-primary">Registrarse</button>
            </form>
        
    </section>
    
</body>
</html>