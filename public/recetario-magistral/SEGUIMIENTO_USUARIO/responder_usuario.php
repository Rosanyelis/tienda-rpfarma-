<?php
require '../LOGIN/funciones.php';
require 'conn.php';

$auth = estaAutenticado();

if (!$auth) {
    header("Location: ../LOGIN/login.php");
}


$nombre_usuario=$_SESSION['usuario'];
$id = $_GET['id'];
$sql = ("SELECT * FROM registro WHERE id_registro = '$id'");
$stmt = mysqli_query($conexion,$sql);
$resultado =  $stmt->fetch_assoc();

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
    
    .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link, .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link, .rd-navbar-fixed .rd-nav-item.active .rd-nav-link, .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
    color: #ffffff;
    background: #02a8da;
}

    ::selection {
        background: black;
        color: #ffffff;
    }
    
     .footer-minimal-nav a:hover {
	color: #02a8da;
    }

    ul.social-list a:hover {
	color: #ffffff;
	background:  #02a8da;
    }

    a,
    a:focus,
    a:active {
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

    a:hover {
        color: #02a8da;
    }
    .btn-primary, .btn-primary:active, .btn-primary:focus {
    color: #ffffff;
    background: #02a8da;
    border-color: #02a8da1;
    }

    .link-hover {
        color: #02a8da;
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

        <section class="parallax-container overlay-1" data-parallax-img="../images/footerNarma.jpg">
            <div class="parallax-content breadcrumbs-custom context-dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <h2 class="breadcrumbs-custom-title">Responder Solicitud</h2>
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="../index.php">Inicio</a></li>
                                <li class="active">seguimiento</li>
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
                    <table class="table table-striped table-bordered table-hover">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th scope="col">ID </th>
                                <td><?php echo $resultado['id_registro']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Estado </th>
                                <td><?php echo $resultado['estado']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Precio </th>
                                <td><strong>$<?php echo $resultado['precio']; ?>.-</strong></td>
                            </tr>
                            <tr>
                                <th scope="col">Nombre </th>
                                <td><?php echo $resultado['nombre']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Correo </th>
                                <td><?php echo $resultado['mail']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Dirección</th>
                                <td><?php echo $resultado['direccion']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Telefono </th>
                                <td><?php echo $resultado['telefono']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Creación</th>
                                <td><?php echo $resultado['creacion']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Mensaje </th>
                                <td><?php echo $resultado['mensaje']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Laboratorio </th>
                                <td>Farmacia Narma</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <img src="../COTIZAR/<?php echo $resultado['imagen']; ?>" class="img-fluid" alt="">
                </div>
                <?php  
                    $sql = ("SELECT * FROM comentarios WHERE id_registro = '$id'");
                    // $stmt->execute(array($username));
                    $stmt = mysqli_query($conexion,$sql);
                    while ($mostrar=mysqli_fetch_array($stmt)) {
                ?>
                
                <div class="col-md-12">
                    <br>
                    <table class="table table-striped table-bordered table-hover">
                        <thead></thead>

                        <tbody>

                            <tr>
                                <th scope="col">Comentario </th>
                                <td><?php echo $mostrar['mensaje']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Fecha De Respuesta</th>
                                <td><?php echo $mostrar['fecha_creacion']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Respondido Por</th>
                                <td><?php echo $mostrar['nombre']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <?php } ?>
                <div class="col-md-12">
                    <br><br>
                    <form action="responder_comentario_back.php" method="post">
                        <table class="table table-striped table-bordered table-hover">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Comentario </th>
                                    <td><textarea class="form-input" id="mensaje" name="mensaje" placeholder="Mensaje a Responder "
                                            ></textarea></td>
                                </tr>
                                <tr>
                                    <th scope="col">Respondido Por</th>
                                    <td><input type="text" class="form-input" id="user" name="user"
                                            value="<?php echo $resultado['nombre']; ?>" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">
                                        <input type="hidden" id="id" name="id" class="form-input" value="<?php echo $id; ?>">
                                    </th>
                                    <td><input type="submit" value="Enviar Comentarios a Farmacia"
                                            class="btn btn-primary"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                
                <?php 
                    $p = $resultado['precio'];
                    if ($p>0) {
                ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <br>
                            <img src="flow2.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <br><br><br>
                            <h3>Monto A Pagar:   $<strong><?php  echo $resultado['precio']; ?>.-</strong></h3>
                            <br><br>
                            <a href="./flow/examples/payments/create.php?id=<?php  echo $resultado['precio']; ?>&mail=<?php  echo $resultado['mail']; ?>" class="btn btn-primary btn-block">Pagar</a>
                        </div>
                    </div>
                </div>
                <?php  
                    } 
                ?>

            </div>

        </div>


        <br><br><br>
        <?php include('footer.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>