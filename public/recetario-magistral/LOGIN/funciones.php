<?php
function estaAutenticado() : bool{
    session_start();
    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }
    return false;
    echo "Aca";
}

function roles() : bool{
    // session_start();
    $rol = $_SESSION['rol'];
    if($rol){
        return true;
    }
    return false;
    echo "Aca";
}
?>