<?php
require '../LOGIN/funciones.php';
require 'conn.php';

$auth = estaAutenticado();

if (!$auth) {
    header("Location: ../LOGIN/login.php");
}


$nombre_usuario=$_SESSION['usuario'];

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Seguimiento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }

    .owl-dot:hover,
    .owl-dot.active {
        border-color: black;
        background-color: black;
    }

    .icon-bg-white {
        color: black;
        background: #ffffff;
    }

    .ui-to-top {
        background: #02a8da;
    }

    .button-primary,
    .button-primary:focus {
        color: #ffffff;
        background-color: #02a8da;
        border-color: #02a8da;
    }

     .footer-minimal-nav a:hover {
	color: #02a8da;
    }

    .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link, .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link, .rd-navbar-fixed .rd-nav-item.active .rd-nav-link, .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
    color: #ffffff;
    background: #02a8da;
}

    ul.social-list a:hover {
	color: #ffffff;
	background:  #02a8da;
    }

    ::selection {
        background: black;
        color: #ffffff;
    }

    a,
    a:focus,
    a:active {
        color: #02a8da;
    }

    a:hover {
        color: #02a8da;
    }

    .cssload-speeding-wheel {
	width: 36px;
	height: 36px;
	margin: 0 auto;
	border: 3px solid #02a8da;
	border-radius: 50%;
	border-left-color: transparent;
	border-bottom-color: transparent;
	animation: cssload-spin .88s infinite linear;
    }

    .btn-primary, .btn-primary:active, .btn-primary:focus {
    color: #ffffff;
    background: #02a8da;
    border-color: #02a8da1;
    }

    .link-hover {
        color: #02a8da;
    }
    }

    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Cargando Un Momento Por Favor...</p>
        </div>
    </div>
    <div class="page">
        <!--<a class="section section-banner d-none d-xl-flex"
      href="https://www.templatemonster.com/website-templates/monstroid2.html"
      style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )"><img
        src="images/banner/foreground-04-1600x60.png"
        srcset="images/banner/foreground-04-1600x60.png 1x, images/banner/foreground-04-3200x120.png 2x" alt=""
        width="1600" height="310"></a>-->
        <!-- Page Header-->
        <?php include('head_seguimiento.php');?>

        <section class="parallax-container overlay-1" data-parallax-img="../images/regencia.jpg">
            <div class="parallax-content breadcrumbs-custom context-dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <h2 class="breadcrumbs-custom-title" style="color:#000;">seguimiento a tu solicitud</h2>
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="../index.php" style="color:#000;">Inicio</a></li>
                                <li class="active" style="color:#000;">seguimiento</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid" id="campo">

            <div class="row col-md-12 " id="bg">
                <div class="col-md-12">
                    <br><br><br>

                    <table class="table table-striped table-bordered table-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mail</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col">Fecha Creacion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Status</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = ("SELECT * FROM registro WHERE mail = '$nombre_usuario'");
                             // $stmt->execute(array($username));
                             $stmt = mysqli_query($conexion,$sql);
                             while ($mostrar=mysqli_fetch_array($stmt)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $mostrar['id_registro']; ?></th>
                                <td><?php echo $mostrar['mail']; ?></td>
                                <td><?php echo $mostrar['nombre']; ?></td>
                                <td><?php echo $mostrar['telefono']; ?></td>
                                <td><?php echo $mostrar['direccion']; ?></td>
                                <td><?php echo $mostrar['mensaje']; ?></td>
                                <td><?php echo $mostrar['creacion']; ?></td>
                                <td><strong>$<?php echo $mostrar['precio']; ?></strong></td>
                                <td><?php echo $mostrar['estado']; ?></td>
                                <td> <a href="responder_usuario.php?id=<?php echo $mostrar['id_registro']; ?>" class="btn btn-primary btn-xs">Cliente</a></td>
                            </tr>
                            <?php
                             }
                            ?>

                            <?php
                             $sql1 = ("SELECT * FROM registro_pago WHERE mail = '$nombre_usuario'");
                             // $stmt->execute(array($username));
                             $stmt1 = mysqli_query($conexion,$sql1);
                             while ($mostrar1=mysqli_fetch_array($stmt1)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $mostrar1['id_registro_pago']; ?></th>
                                <td><?php echo $mostrar1['mail']; ?></td>
                                <td><?php echo $mostrar1['nombre']; ?></td>
                                <td><?php echo $mostrar1['telefono']; ?></td>
                                <td><?php echo $mostrar1['direccion']; ?></td>
                                <td><?php echo $mostrar1['mensaje']; ?></td>
                                <td><?php echo $mostrar1['creacion']; ?></td>
                                <td><strong>$<?php echo $mostrar1['precio']; ?></strong></td>
                                <td><?php echo $mostrar1['estado']; ?></td>
                            </tr>
                            <?php
                             }
                            ?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <br><br><br>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>