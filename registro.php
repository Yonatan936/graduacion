<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel= "styles.sheet" href="css/main.css"/> 
  <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Registro</title>
</head>
<body>
    
    <section class="row" >
     <div class="col-md-6">
        <form action="registro_proceso.php" method ="POST">
                <div class ="form-group">
                    <label for ="">Usuario</label>
                    <input type ="text" class="form-control" name ="usuario">
                </div> 

                <div class ="form-group">
                    <label for ="">Contraseña</label>
                    <input type ="password" class="form-control"name ="contrasena">
                </div> 
                <div class ="form-group">
                    <label for ="">Email</label>
                    <input type ="text" class="form-control"name ="email">
                </div>  
                <button class="btn btn-primary">Registrar </button>
        </form>

    </div>
    </section>
</body>
</html>