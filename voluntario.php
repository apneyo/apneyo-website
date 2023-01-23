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
$dni = $_POST["dni"];
$email = $_POST["email"];
$pais = $_POST["pais"];
$ciudad = $_POST["ciudad"];
$cel = $_POST["cel"];

$contenido = "👤Datos de Nuevo Voluntario (a)" . "\n | 📝 Nombre y Apellido:" .$nomape. "\n | 🆔 N° de DNI: " .$dni.
"\n | 📧 Correco Electrónico  : " .$email. "\n | 🌍 País: " .$pais. "\n | 🏙️ Ciudad: " .$ciudad. "\n | 📱 N° Celular : " .$cel;
mail($destino,"🗣️🔴 Nuevo Voluntario (a) a espera de noticias.", $contenido);

echo '<script language="javascript">
alertify.alert("Registro exitoso", " ✅ Mensaje enviado con éxito");
window.location.replace("https://apneyomancora.org/inicio#registro-exitoso");</script>';
?>
    </body>
    
</html>


