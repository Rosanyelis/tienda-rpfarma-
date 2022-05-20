<?php
require '../LOGIN/funciones.php';
require 'conn.php';
$auth = estaAutenticado();
$rol = roles();

if (!$auth) {
    header("Location: ../LOGIN/login.php");
}

if (!$rol) {
    header("Location: ../SEGUIMIENTO_USUARIO/seguimiento.php");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
    
    .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link, .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link, .rd-navbar-fixed .rd-nav-item.active .rd-nav-link, .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
    color: #ffffff;
    background: #02a8da;
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

    ::selection {
        background: black;
        color: #ffffff;
    }

    a,
    a:focus,
    a:active {
        color: #02a8da;
    }
    
     .footer-minimal-nav a:hover {
	color: #02a8da;
    }

    ul.social-list a:hover {
	color: #ffffff;
	background:  #02a8da;
    }

    a:hover {
        color: #02a8da;
    }
    .btn-primary, .btn-primary:active, .btn-primary:focus {
    color: #ffffff;
    background: #02a8da;
    border-color: #02a8da;
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
        <?php include('head_ADMIN.php');?>

        <section class="parallax-container overlay-1" data-parallax-img="../images/footerNarma.jpg">
            <div class="parallax-content breadcrumbs-custom context-dark">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <h2 class="breadcrumbs-custom-title">Responder a Solicitud</h2>
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="">Inicio</a></li>
                                <li class="active">Seguimiento Admin</li>
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
                 $sql2 = ("SELECT * FROM pago WHERE id_registro = '$id'");
                 // $stmt->execute(array($username));
                 $stmt2 = mysqli_query($conexion,$sql2);
                 while ($mostrar2=mysqli_fetch_array($stmt2)) {
                ?>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered table-hover">
                        <thead></thead>

                        <tbody>
                            <tr>
                                <th scope="col">Comentario </th>
                                <td><?php echo $mostrar2['mensaje']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Precio </th>
                                <td>$ <?php echo $mostrar2['precio_total']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tiempo De Despacho </th>
                                <td><?php echo $mostrar2['dias_despacho']; ?> días (Hábiles).</td>
                            </tr>
                            <tr>
                                <th scope="col">Fecha De Respuesta</th>
                                <td><?php echo $mostrar2['fecha_cotizado']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Respondido Por</th>
                                <td><?php echo $mostrar2['usuario']; ?></td>
                            </tr>
                            <br>
                        </tbody>
                    </table>
                </div>
                <?php 
                 }
                ?>

                <?php  
                 $sql = ("SELECT * FROM comentarios WHERE id_registro = '$id'");
                 // $stmt->execute(array($username));
                 $stmt = mysqli_query($conexion,$sql);
                 while ($mostrar=mysqli_fetch_array($stmt)) {
                ?>
                <div class="col-md-12">
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
                            <br>
                        </tbody>
                    </table>
                </div>
                <?php 
                 }
                ?>


                <?php 
                $sql3 = "SELECT * FROM pago WHERE id_registro = '$id'";


                $stmt3 = mysqli_query($conexion,$sql3);

                $filas = mysqli_fetch_array($stmt3);
                
                if ($filas > 0) {
                ?>
                <div class="col-md-12">
                    <br><br><br>
                    <form action="responder_comentario_back.php" method="post">
                        <table class="table table-striped table-bordered table-hover">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Comentario </th>
                                    <td><textarea class="form-control" id="mensaje" name="mensaje"></textarea></td>
                                </tr>

                                <tr>
                                    <th scope="col">Respondido Por</th>
                                    <td><input type="text" class="form-control" id="user" name="user" placeholder=""
                                            value="<?php echo $nombre_usuario; ?>" readonly></td>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col"><input type="hidden" class="form-control" id="id" name="id"
                                            value="<?php echo $id; ?>"></th>
                                    <td><input type="submit" value="Enviar Comentarios a Cliente"
                                            class="btn btn-primary">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <?php 
                 }else{
                ?>
                <div class="col-md-12">
                    <br><br><br>
                    <form action="responder_comentario_back.php" method="post">
                        <table class="table table-striped table-bordered table-hover">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <th scope="col">Comentario </th>
                                    <td><textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje es Obligatorio"></textarea></td>
                                </tr>

                                <tr>
                                    <th scope="col">Precio Receta</th>
                                    <td><input type="number" class="form-control" id="PR" name="PR" placeholder="Debe Tener Valor 0"
                                            value="0" min="0" max=""></td>
                                </tr>
                                <tr>
                                    <th scope="col">Precio Despacho</th>
                                    <td><input type="number" class="form-control" id="PD" name="PD" placeholder="Debe Tener Valor 0"
                                            value="0" min="0" max=""></td>
                                </tr>
                                <tr>
                                    <th scope="col">Precio Total </th>
                                    <td><input type="number" class="form-control" id="PT" name="PT" placeholder=""
                                            value="0" readonly></td>
                                </tr>
                                <tr>
                                    <th scope="col">Tiempo De Despacho (Dias) </th>
                                    <td><input type="number" class="form-control" id="TD" name="TD"
                                            value="0" min="0" max="10" placeholder="Debe Tener Valor 0"></td>
                                </tr>

                                <tr>
                                    <th scope="col">Respondido Por</th>
                                    <td><input type="text" class="form-control" id="user" name="user" placeholder=""
                                            value="<?php echo $nombre_usuario; ?>" readonly></td>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col"><input type="hidden" class="form-control" id="id" name="id"
                                            value="<?php echo $id; ?>"></th>
                                    <td><input type="submit" value="Enviar Comentarios a Cliente"
                                            class="btn btn-primary">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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
    <script>
    $(document).ready(function($) {

        $('#PR').change(function() {

            var data = parseInt($('#PD').val());
            if (data >= 0) {
                var data2 = parseInt($('#PR').val());
                let data3 = data + data2;

                $('#PT').val(data3);

            }

        });

        $('#PD').change(function() {
            var data = parseInt($('#PD').val());
            if (data >= 0) {
                var data2 = parseInt($('#PR').val());
                let data3 = data + data2;

                $('#PT').val(data3);
            }

        });


    });
    </script>
</body>

</html>