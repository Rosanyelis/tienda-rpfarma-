<?php
require 'conn.php';

if (!empty($_POST))
{
    $alert='';
    if (empty($_POST['username']) || empty($_POST['password']))
    {
        $alert='<p class="alert alert-danger">todos los campos son obligatorio</p>';
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuario WHERE usuario='$username' AND
        clave= '$password' ";


        $stmt = mysqli_query($conexion,$sql);

        $filas = mysqli_fetch_array($stmt);

        if ($filas > 0) {
            $sql = ("SELECT rol FROM usuario WHERE usuario = '$username'");
            // $stmt->execute(array($username));
            $stmt = mysqli_query($conexion,$sql);

            // $resultado =  sqlsrv_fetch_array($stmt);
            $resultado =  $stmt->fetch_assoc();



            if ($resultado['rol'] == 1) {
                session_start();
                $_SESSION['usuario']= $username;
                $_SESSION['rol'] = true;
                $_SESSION['login'] = true;
                $_SESSION['idRol'] = 1;
                header('Location: ../SEGUIMIENTO_ADMIN/seguimientoAdmin.php');

            } elseif ($resultado['rol'] == 2) {
                session_start();
                $_SESSION['usuario']= $username;
                $_SESSION['rol'] = true;
                $_SESSION['login'] = true;
                $_SESSION['idRol'] = 2;
                header('Location: ../SEGUIMIENTO_USUARIO/seguimiento.php');
            }

        } else {
            $alert='<p class="alert alert-danger">Usuario o contraseña incorrectas</p>';
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

                    <div class="heading mb-3">
                        <h4>Inicie sesión en su cuenta</h4>
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
                        <div class="row mb-3">
                            <div class="col-6 d-flex">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cb1">
                                    <label class="custom-control-label text-white" for="cb1">Recordarme</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="recuperar_cuenta.php" class="forget-link">Contraseña olvidada</a>
                            </div>
                        </div>
                        <div class="text-left mb-3">
                            <center><button type="submit" class="btn">Acceder</button></center>

                        </div>

                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 d-none d-md-block image-container">
            </div>
        </div>
    </div>
</body>

</html>

<style>
    .image-container{
    background: url('../images/regencia.jpg') center no-repeat;
    background-size: cover;
    height: 100vh;
}
</style>
