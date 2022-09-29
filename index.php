<?php

$errores = "";
$enviado = false;

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
  
    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
    }else {
        $errores .= "Por favor ingresa un nombre <br>";
    }
    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);

        if(!$correo) {
            $errores .= "Por favor introduce un correo valido<br>";
        }
    }else {
        $errores .= "Por favor ingresa un correo <br>";
    }
    if(!empty($mensaje)){
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);
    }else {
        $errores .= "Por favor ingresa un mensaje <br>";
    }

    if(!$errores) {
        $enviar_a = "madi.benallou@nodrizatech.com";
        $asunto = 'Correo enviado desde miPagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: $mensaje ";

       if(mail($enviar_a, $asunto, $mensaje_preparado)){
        $enviado = true;
       }else {
        $errores = "No se ha enviado";
       }
        
     }


}

require "index.view.php";



?>