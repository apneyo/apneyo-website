<html>
    
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

    <head></head>
    <body>
        
<?php

$destino= "fundacion@apneyomancora.org, amneyo28@hotmail.com";

$nomape = $_POST["nomape"];
$email = $_POST["email"];
$msg = $_POST["msg"];

$contenido = "👤Datos del Mensaje" . "\n | 👤 Nombre y Apellido: " .$nomape. 
"\n | 📧 Correco Electrónico  : " .$email. "\n | 📝 Mensaje: " .$msg;
mail($destino,"📝🔴 Nuevo mensaje para donación de Bienes", $contenido);

echo '<script language="javascript">
alertify.alert("Contacto exitoso", " ✅ Mensaje enviado con éxito");
window.location.replace("https://apneyomancora.org/donacion#donacion-bienes");</script>';
?>
    </body>
    
</html>


