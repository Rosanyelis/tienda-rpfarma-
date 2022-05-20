<?php
require 'conn.php';

if (!empty($_POST)) 
{
    $alert='';
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2']))
    {
        $alert='<p class="alert alert-danger">todos los campos son obligatorio</p>';
    }
    else 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $rol=2;

        $sql = "SELECT * FROM usuario WHERE usuario='$username'";


        $stmt = mysqli_query($conexion,$sql);

        $filas = mysqli_fetch_array($stmt);
    
        if ($filas > 0) {
            $alert='<p class="alert alert-danger">Usuario ya esta creado</p>';
        }else{
            if ($password == $password2) {
                $query_insert = mysqli_query($conexion,"INSERT INTO usuario(usuario,clave,rol) VALUES('$username','$password','$rol')");
                if ($query_insert) {
                    $alert='<p class="alert alert-success">usuario creado</p>';
                }else{
                    $alert='<p class="alert alert-danger">nose pudo crear</p>';
                }
            }else {
                $alert='<p class="alert alert-danger">Las contraseña no coinciden</p>';
            }
        }
    }
    mysqli_close($conexion);  
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styleMemo.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 form-container">
                <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                    <div class="logo mt-5 mb-3">
                    <a href="../index.php"><img src="../images/ISOTIPO.png" width="150px"></a>
                    </div>
                    <div class="heading mb-3">
                        <h4>Registrar cuenta</h4>   
                    </div>
                    <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                    <form method="post" action="">
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="text" name="username" id="username" placeholder="Dirección de correo electrónico" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Contraseña" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" name="password2" id="password2" placeholder="Repetir Contraseña" required>
                        </div>
                        <div class="text-left mb-3">
                            <center><button type="submit" class="btn">Registrarse</button></center>
                            
                        </div>
                       
                        <div class="text-white">Ya tienes una cuenta
                            <a href="login.php" class="register-link">Ingresa aquí</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
        </div>
    </div>
</body>

</html>

<style>
    .image-container{
    background: url('../images/HOME3-1920x1149.jpg') center no-repeat;
    background-size: cover;
    height: 100vh;
}
</style>