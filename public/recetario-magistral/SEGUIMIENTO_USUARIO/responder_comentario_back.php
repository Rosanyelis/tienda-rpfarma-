<?php

require 'conn.php';

    $alert='';
    if (empty($_POST['mensaje']) ) 
    {
        $alert='<p class="alert alert-danger">todos los campos son obligatorio</p>';
    }
    else
    {
                
        $mensaje = $_POST['mensaje'];   
        $user =   $_POST['user'];   
        $id = $_POST['id'];  

        $query_insert = mysqli_query($conexion,"INSERT INTO comentarios(id_registro,nombre,mensaje) VALUES('$id','$user','$mensaje')");

        header('Location: responder_usuario.php?id='.$id);
    }
?>