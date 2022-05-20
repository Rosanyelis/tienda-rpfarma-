
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    a:hover {
        color: #02a8da;
    }
    
     .footer-minimal-nav a:hover {
	color: #02a8da;
    }

    ul.social-list a:hover {
	color: #ffffff;
	background:  #02a8da;
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
                src="../images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
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
        <?php include('head_contacto.php');?>

        <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
            <div class="main-bunner-img"
                style="background-image: url(&quot;../images/footerNarma.jpg&quot;); background-size: cover;"></div>
           
        </section>
        <section class="section section-lg text-center bg-default">
            <div class="container">
                <div class="row row-50">
                    <div class="col-md-6 col-lg-4">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-triangle"><span
                                    class="icon-xl linearicons-phone-incoming"></span>
                            </div>
                            <div class="box-icon-caption">
                                <h4><a href="tel:#">+56991360438</a></h4>
                                <p>Puedes llamarnos en cualquier momento</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-map2"></span>
                            </div>
                            <div class="box-icon-caption">
                                <h4><a href="#">1438 Av.Providencia , Santiago , Chile</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box-icon-classic">
                            <div class="box-icon-inner decorate-rectangle"><span
                                    class="icon-xl linearicons-paper-plane"></span></div>
                            <div class="box-icon-caption">
                                <h4><a href="mailto:#">contacto@narma.cl</a></h4>
                                <p>No dude en enviarnos un correo electrónico con sus preguntas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Google Map-->
        <section class="section">
            <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
            <!--Please note that YOUR_API_KEY should replaced with your key.-->
            <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
            <div class="google-map-container" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.8248438101887!2d-70.62043598523712!3d-33.427810603735864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf631b174fc3%3A0xb481f406f97beba0!2sAv.%20Providencia%201438%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1645543885263!5m2!1ses!2scl" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
        </section>
        <!-- Contact us-->
        <section class="section section-lg bg-gray-1 text-center">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-9 col-lg-7">
                        <h3>Contacto</h3>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                            method="post" action="enviarMail.php">
                            <div class="form-wrap">
                            <label  for="contact-name">Tu Nombre:</label>
                                <input class="form-input" id="nombre" type="text" name="nombre" placeholder="Nombre"
                                    data-constraints="@Required">
                                
                            </div>
                            <div class="form-wrap">
                            <label  for="contact-email">E-mail:</label>
                                <input class="form-input" id="mail" type="email" name="mail" placeholder="Correo Electronico"
                                    data-constraints="@Email @Required">
                                
                            </div>
                            <div class="form-wrap">
                            <label  for="contact-phone">Teléfono:</label>
                                <input class="form-input" id="telefono" type="text" name="telefono" placeholder="569"
                                    data-constraints="@Numeric">
                            </div>
                            <div class="form-wrap">
                                <label  for="contact-message"> Mensaje:</label>
                                <textarea class="form-input" id="mensaje" name="mensaje"
                                    data-constraints="@Required"></textarea>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-7 col-lg-5">
                                    <button class="button button-block button-lg button-primary"
                                        type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--<a class="section section-banner" href="https://www.templatemonster.com/website-templates/monstroid2.html"
      style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img
        src="images/banner/foreground-03-1600x310.png"
        srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt=""
        width="1600" height="310"></a>-->

        <!-- Page Footer-->
        <?php include('footer.php');?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>