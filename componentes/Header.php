<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<?php
if ($tipo == 1) {
    echo '
        <title>Inicio</title>
        <link href="../css/inicio.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 2) {
    echo '
        <title>Conocenos</title>
        <link href="../css/conocenos.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 3) {
    echo '
        <title>Sociedades</title>
        <link href="../css/sociedades.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 4) {
    echo '
        <title>Membresía</title>
        <link href="../css/membresia.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 5) {
    echo '
        <title>Contáctenos</title>
        <link href="../css/contactenos.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 6) {
    echo '
        <title>Contáctenos</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        ';
}
if ($tipo == 7) {
    echo '
        <title>Contáctenos</title>
        <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
        ';
}
?>

<body>
    <header>
        <span></span>
        <form action="" method="post" target="_blank">
            <input type="search" name="buscador" placeholder="¿Qué desea hacer?">
            <img class="icon_bus" src="../img/busqueda.png" alt="buscador">
            <a href="#"><img class="user_interfaz" src="../img/videollamada.png" alt="logo_clases"></a>
            <a href="../login/index.php"><img class="user_interfaz" src="../img/usuario.png" alt="logo_user"></a>
        </form>
        <a href="#"><img class="social_media_logo" src="../img/facebook.png" alt="logo_facebook"></a>
        <a href="#"><img class="social_media_logo" src="../img/linkendin.png" alt="logo_linkedin"></a>
        <a href="#"><img class="social_media_logo" src="../img/instagram.png" alt="logo_instagram"></a>
        <a href="#"><img class="social_media_logo" src="../img/whatsapp.png" alt="logo_whatsapp"></a>
    </header>