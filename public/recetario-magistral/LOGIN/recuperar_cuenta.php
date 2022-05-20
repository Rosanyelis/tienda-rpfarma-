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
                        <h4>Recuperar cuenta</h4>   
                        <br>
                    </div>
                    <form method="post" action="recuperar_back.php">
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" name="username" id="username" placeholder="Dirección de correo electrónico" required>
                            <br>
                        </div>
                        
                        <div class="text-left mb-3">
                            <br>
                            <center><button type="submit" class="btn">Enviar Clave</button></center>
                            
                        </div>
                        <div class="text-white">ya tienes una cuenta
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
    background: url('../images/footerNarma.jpg') center no-repeat;
    background-size: cover;
    height: 100vh;
}
</style>