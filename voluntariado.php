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


$nom = $_POST["nom"];
$email = $_POST["email"];
$cel = $_POST["cel"];
$especialidad = $_POST["especialidad"];
$msg = $_POST["msg"];

$contenido = "👤Datos de Nuevo Voluntario" . "\n | 📝 Nombre y Apellido: " .$nom.
"\n | 📧 Correco Electrónico  : " .$email. "\n | 📱 N° Celular : " .$cel. "\n | 👨‍🎓 Especialidad: " .$especialidad.
"\n | 💬 N° Mensaje : " .$msg;
mail($destino,"🗣️🔴 Nuevo Voluntario a espera de noticias.", $contenido);

echo '<script language="javascript">
alertify.alert("Registro exitoso", " ✅ Mensaje enviado con éxito");
window.location.replace("https://apneyomancora.org/conviertete-en-voluntario#ser-voluntario");</script>';
?>
    </body>
    
</html>


