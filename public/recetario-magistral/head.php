<?php
if (!isset($_SESSION)) {
  session_start();
}

$auth = $_SESSION['login'] ?? null;
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #1A1A1B;">
    <a class="navbar-brand" href="index.php"><img class="img-fluid" src="images/ISOTIPO2.png"
            alt="Responsive image" /></a></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./COTIZAR/cotizar.php" id="aa">Cotizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./SEGUIMIENTO_USUARIO/seguimiento.php" id="aa">Seguimiento</a>
            </li>
            <li class="nav-item">
                <?php if ($auth) : ?>
                <a class="nav-link" href="./LOGIN/cerrar-sesion.php">Cerrar Sesion</a>
                <?php endif; ?>
            </li>
        </ul>
        <div class="navbar-brand" id="aaasefgadgh" style="color : white; font-size :"><img class="btn-whatsapp" src="https://clientes.dongee.com/whatsapp.png" width="64" height="64" alt="Whatsapp" onclick="window.location.href='https://wa.me/56977080257?text=Hola!%20Estoy%20interesado%20en%20tu%20servicio'">
                +56977080257
        </div>
    </div>
</nav>
<style>
.nav-item .nav-link:hover {
    color: #02a8da;
}
#aa:hover{
    color: #02a8da;
}
#aa{
    font-family:"Poppins", sans-serif;
    color: #FFFFFF;
    font-size: 25px;
}
</style>
