<?php


$head 			= "

<script type='text/javascript'>
		window.onload = function() {
			var select_opcion1 = document.getElementById('rpfarma');
			var select_opcion2 = document.getElementById('asociado');
			var select_opcion3 = document.getElementById('despacho');
			var display_opcion1 = document.getElementById('rpfarma_sucursal');
			var display_opcion2 = document.getElementById('asociado_sucursal');
			var display_opcion3 = document.getElementById('entrega_domicilio');
			select_opcion1.onchange = function() {
						display_opcion1.style.display = 'block';
						display_opcion2.style.display = 'none';
						display_opcion3.style.display = 'none';
						};
			select_opcion2.onchange = function() {
						display_opcion1.style.display = 'none';
						display_opcion2.style.display = 'block';
						display_opcion3.style.display = 'none';
						};
			select_opcion3.onchange = function() {
						display_opcion1.style.display = 'none';
						display_opcion2.style.display = 'none';
						display_opcion3.style.display = 'block';
						};


		}
	</script>

";

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Cotizador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">


    <?php echo $head;?>

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
        background: yellow;
    }

    .button-primary,
    .button-primary:focus {
        color: #ffffff;
        background-color: yellow;
        border-color: yellow;
    }

    .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.active .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
        color: #ffffff;
        background: yellow;
    }

    ::selection {
        background: black;
        color: #ffffff;
    }

    .footer-minimal-nav a:hover {
        color: yellow;
    }

    ul.social-list a:hover {
        color: #ffffff;
        background: yellow;
    }

    a,
    a:focus,
    a:active {
        color: yellow;
    }

    a:hover {
        color: yellow;
    }

    .cssload-speeding-wheel {
        width: 36px;
        height: 36px;
        margin: 0 auto;
        border: 3px solid yellow;
        border-radius: 50%;
        border-left-color: transparent;
        border-bottom-color: transparent;
        animation: cssload-spin .88s infinite linear;
    }

    .btn-primary,
    .btn-primary:active,
    .btn-primary:focus {
        color: #ffffff;
        background: yellow;
        border-color: yellow;
    }

    .link-hover {
        color: yellow;
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
        <?php include('head_cotizar.php');?>

        <section class="section section-lg bg-gray-1 text-center pt-5 pb-3">
            <div class="container" id="campo">

                <!-- <div class="container p-0" id="bg"> -->
                <div class="col-md-12">
                    <h3>
                        <strong>Sube Tu Receta</strong>
                    </h3>
                </div>

                <form class="rd-form rd-mailform " id="formulario" method="post" action="ssdatos1.php"
                    enctype="multipart/formdata" accept-charset="utf-8">
                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for="miNombre">Nombre:</label>
                                    <div id="notaMiNombre"></div>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"
                                        id="miNombre" value="" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="miApellido">Apellido:</label>
                                    <div id="notaMiApellido"></div>
                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido"
                                        id="miApellido" value="" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="miEstado">Telefono:</label>
                                    <div id="notaMiTelefono"></div>
                                    <input type="text" class="form-control" placeholder="+569" name="telefono"
                                        id="miTelefono" value="" required>
                                    <input type="hidden" name="miEstado" value="enviadoCorreo">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="miCorreo">Email:</label>
                                    <div id="notaMiCorreo"></div>
                                    <input type="email" class="form-control" placeholder="Email" name="correo"
                                        id="miCorreo" value="" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="miClave">Clave:</label>
                                    <div id="notaMiCorreo"></div>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Contraseña" required>

                                </div>
                                <div class="col-md-12">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                                    <br><br>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-3">


                                <div class="form-group col-md-12 mb-3">
                                <div>
                                    <label for="">
                                        Adjunte la receta.
                                        <br>
                                        La receta se puede subir desde el celular o computador.
                                        <br>
                                        El formato de imagen debe estar en: GIF, PNG , JPG, JPEG o PDF.
                                    </label>
                                    <br>
                                    <div class="form-group">

                                        <br><br>
                                        <input type="file" id="imagen" name="imagen">
                                        <br>
                                    </div>
                                </div>

                                &nbsp;

                                <span class='w3-tag w3-blue w3-round'>
                                    <small>
                                        Si presenta problemas al cargar su receta, por favor enviar, <b>nombre y
                                            apellidos</b>,
                                        <b>dirección de despacho</b> (el valor de la cotización incluye despacho),
                                        y <b>receta</b> al email contacto@farmaciasrpfarma.cl</span>
                                </small>

                                <p><b>Información</b>:<br>
                                    - La receta magistral será cotizada y fabricado por RP Farma
                                    <br><br><br>
                                </p>
                                <button type='submit' e id='botonCotizar' class='btn btn-primary btn-block'
                                    onClick='cotizaRecetarioMagistral();'>Enviar
                                    Cotización
                                </button>

                                <div id="msgAbajo"></div>
                            </div>
                        </div>





                </form>
                <!-- </div> -->
            </div>
        </section>
    </div>





    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    var logeado = "no";
    var actFile = new Array();
    escuchoFotos(1);
    actFile[1] = 1;

    traeComunas();

    function traeComunas() {

        //Variables
        var error = 0;
        var msg = document.getElementById("msgComunas");
        var campo = document.getElementById("comunas");

        campo.innerHTML = "";
        if (error == 0) {

            msg.innerHTML = "Buscando comunas...";
            archivoValidacion = "https://rpfarma.farmaciaeconomica.cl/funciones.php?jsoncallback=?";
            $.getJSON(archivoValidacion, {
                    funcion: "rpFarmaTraeComunas",
                })
                .success(function(respuestaServer) {

                    if (respuestaServer.error == 0) {

                        msg.innerHTML = "";
                        campo.innerHTML = "<option value ='' selected disabled>Seleccione su Comuna</option>";
                        campo.innerHTML += respuestaServer.resp;

                    } else {
                        msg.innerHTML =
                            "Ocurrió un error al intentar conectar. <a onclick='traeComunas()'><b>Reintentar</b></a>";
                    }
                })
                .error(function(respuestaServer) {
                    msg.innerHTML =
                        "Ocurrió un error al intentar conectar. <a onclick='costoDespacho()'><b>Reintentar</b></a>";
                    msg.setAttribute("class", "w3-container w3-red w3-round tipo4");
                })

        } else {
            msg.innerHTML = "Revise los errores...";
            msg.setAttribute("class", "w3-container w3-red w3-round tipo4");
        }
    }
    </script>

    <script>
    $(document).ready(function() {



        $('#botonCotizar').click(function() {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'El Registro ha sido creado exitosamente!',
                showConfirmButton: false,
                timer: 1500
            });
            //location.reload();
            setTimeout(function() {
                location.reload(1);
            }, 1550);
        });

    })
    </script>
</body>

</html>
