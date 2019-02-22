<?php
include("header.php");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


function mostrar ($a, $b, $c, $d){
    echo"<p>Haz Recibido el nombre de: </p>".$a."\n";
    echo"<p>Haz Recibido el correo: </p>".$b."\n";
    echo"<p>Haz Recibido con el asunto: </p>".$c."\n";
    echo"<p>Haz Recibido el mensaje: </p>".$d."\n";
}

mostrar($nombre, $correo,$asunto,$mensaje);

/*
    $from = "test@hostinger-tutorials.com";  //Correo de Origen
    $to = "test@gmail.com";  // Correo destino
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Su mensaje ha sido enviado Satisfactoriamente";
*/
 include("footer.php");
?>