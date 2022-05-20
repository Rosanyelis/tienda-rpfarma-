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
        background: #02a8da;
    }

    .button-primary,
    .button-primary:focus {
        color: #ffffff;
        background-color: #02a8da;
        border-color: #02a8da;
    }

    .rd-navbar-fixed .rd-nav-item:hover .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.focus .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.active .rd-nav-link,
    .rd-navbar-fixed .rd-nav-item.opened .rd-nav-link {
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
        background: #02a8da;
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

    .btn-primary,
    .btn-primary:active,
    .btn-primary:focus {
        color: #ffffff;
        background: #02a8da;
        border-color: #02a8da;
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
        <?php include('head_cotizar.php');?>


        <section class="parallax-container overlay-1" data-parallax-img="../images/HOME3-1920x1149.jpg">
            <div class="parallax-content breadcrumbs-custom context-dark">

            </div>
        </section>
        <section class="section section-lg bg-gray-1 text-center">
            <div class="container-fluid" id="campo">

                <div class="container p-0" id="bg">
                    <br>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <h3>
                                <strong>Tus Datos Personales</strong>
                            </h3>

                        </div>
                    </div>
                    <br>
                    <form class="rd-form rd-mailform" id="formulario" method="post" action="ssdatos1.php"
                        enctype="multipart/formdata" accept-charset="utf-8">

                        <center>
                            <div class="form-group col-md-12 mb-3">
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
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <div class="col-md-12">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                                    <br><br>
                                </div>

                            </div>


                            <div class="container">
                                <div class="form-group col-md-12 mb-3">
                                    <h3 class='tipo8 w3-large'>Elije una forma de entrega:</h3>
                                    <br>
                                    <div class='radiobtn '>
                                        <input type='radio' name='fentrega' id='rpfarma' value='rpfarma'>
                                        <label for='rpfarma'>Sucursal RpFARMA</label>
                                    </div>


                                    <div class='radiobtn'>
                                        <input type='radio' name='fentrega' id='asociado' value='asociado'>
                                        <label for='asociado'>Farmacia asociada</label>
                                    </div>


                                    <div class='radiobtn'>
                                        <input type='radio' name='fentrega' id='despacho' value='despacho'>
                                        <label for='despacho'>Despacho a domicilio</label>
                                    </div>
                                    <br>
                                    <select name='rpfarma_sucursal' id='rpfarma_sucursal' name='rpfarma_sucursal'
                                        class='form-control' style='display:none; width:100%;'>
                                        <option value='null' selected>- Selecciona una sucursal RpFARMA -</option>
                                        <option value='Sucursal Providencia'>Av. Providencia 1438, Providencia (Metro
                                            Manuel
                                            Montt)</option>
                                        <option value='Sucursal Recoleta'>Av. Recoleta 3646, Recoleta (Metro Zapadores)
                                        </option>
                                        <option value='Sucursal Quilicura'>Av. Americo Vespucio 0410, Quilicura
                                        </option>
                                    </select>

                                    <select id='asociado_sucursal' name='asociado_sucursal' class='form-control'
                                        style='display:none; width: 100%; '>
                                        <option>Seleccione...</option>
                                    </select>
                                    <br>


                                    <div id="select2lista"></div>

                                    <div id='entrega_domicilio' style='display:none; width: 50rem; margin-left:-860px'>
                                        
                                            <div class='px-4 '>
                                                <br>
                                                <div class='form-group'>
                                                    <div id='notaMiComuna'></div>
                                                    <input class='form-control' placeholder='Comuna' type='text'
                                                        id='comunadespacho' name='comunadespacho'
                                                        style="margin-left:12cm" />
                                                </div>
                                                <br>
                                                <div class='form-group'>
                                                    <div id='notaMiDireccion'></div>
                                                    <input class='form-control' placeholder='Calle número depto'
                                                        type='text' id='direcciondespacho' name='direcciondespacho'
                                                        style="margin-left:12cm" />
                                                </div>
                                                <br>
                                                <div class='form-group'>
                                                    <div id='notaMiDireccion'></div>
                                                    <textarea class='form-control' id='referencia' name='referencia'
                                                        placeholder='Referencia de la dirección (opcional)'
                                                        style="margin-left:12cm"></textarea>
                                                </div>
                                            </div>
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="container">
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
                                            y <b>receta</b> al email contacto@narma.cl</span>
                                    </small>
                                    <br>
                                    <br>

                                    <button type='submit' e id='botonCotizar' class='btn btn-primary btn-block'
                                        onClick='cotizaRecetarioMagistral();'>Enviar
                                        Cotización
                                    </button>

                                    <div id="msgAbajo"></div>
                                </div>
                            </div>

                            <div class="w3-row">
                                <div class="w3-half w3-container w3-center">
                                    <table border='0' width='100%' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td width="3%" height='22' valign='top'></td>
                                            <td width="97%" valign='top' align="justify">


                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="container p-0 w3-center">
                                    <table border='0' width='100%' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td width="3%" height='22' valign='top'></td>
                                            <td width="97%" valign='top' align="justify">


                                                <p><b>Información</b>:
                                                    <br>

                                                    - La receta magistral será cotizada por Narma y fabricado por RP
                                                    Farma

                                                    <br><br><br>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </section>
    </div>




    <?php include('footer.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/datepicker.bundle.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
    $(document).ready(function() {

        $('#asociado').change(function() {
            $.ajax({
                type: 'GET',
                url: '../controlador/comunas.php',
                data: {},
                success: function(response) {
                    console.log(response);
                    console.log(JSON.parse(response));
                    var data = JSON.parse(response);
                    $.each(data, function(index, dato) {
                        $('#asociado_sucursal').append('<option value =' + dato
                            .codigo + '>' + dato.nombre + '</option>');
                    });

                }
            });
        });
        $('#asociado_sucursal').change(function() {
            var cod = $('#asociado_sucursal').val();
            $.ajax({
                type: 'POST',
                url: '../controlador/datos.php',
                data: {
                    codigo: cod,
                },
                success: function(r) {
                    $('#select2lista').html(r);
                    console.log(cod);

                }
            });
        })

        $("#rpfarma").click(function() {
            $("#lista2").remove();
        });

        $("#despacho").click(function() {
            $("#lista2").remove();
        });
        $("#chibra").click(function() {
            $("#lista2").remove();
        });

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