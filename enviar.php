<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];


    $destinatario = "conejerosalondra@gmail.com"
    $asunto = "Cotización Diseño y Maquetación Web"

    $carta = "De: $nombre \n";
    $carta = "whatsapp: $telefono \n";
    $carta = "De: $correo \n";
    $carta = "De: $mensaje \n";

    mail($destinatario, $asunto, $carta);
    header('Location:mensaje-enviado.php')

?>