<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<button class="btn btn-primary"  
  data-target="#mimodal"    data-role="modal"  
  data-toggle="modal">  Log In</button>
      
    <form action ="resultado.php" method="GET">
    <div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <section class ="row">
            <div class="col-md-6">
            <form action ="resultado.php" method="POST">
                        <div class="form-group ">
                            <label for="usuario">Nombre</label>
                            <input type="text" class="form-control" name="usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </form>
                </div>
            </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-outline-primary btn-block">
                        <i class="fas "></i> Enviar Datos</button>
                        
                        </div>
       
            </div>
        </div>
    </div>
</div>

</body>
</html>