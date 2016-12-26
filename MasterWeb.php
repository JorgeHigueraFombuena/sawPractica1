<html>
<head>
    <title> Master Web </title>
    <meta charset="UTF-8">
</head>
<body>
<?php
session_start();
include("includes/autenticado.php");
?>

<br><br>
<center>
    <img src="logo.png" width=120 height=60>
    <br><br>
    <h1> Máster en Ingeniería Web </H1>
    <HR>
    <BR>
    <?php
    if ($_SESSION['permisos'][0] === 'S') {
        ?>
        <a href='/'> Ingeniería Web: Visión General (IWVG) </a><br>
        <?php
    }
    if ($_SESSION['permisos'][1] === 'S') {
        ?>
        <a href='/'> Arquitectura y Patrones para Aplicacionew Web (APAW)</a><br>
        <?php
    }
    if ($_SESSION['permisos'][2] === 'S') {
        ?>
        <a href='/'> Front-end para Móviles (FEM) </a><br>
        <?php
    }
    if ($_SESSION['permisos'][3] === 'S') {
        ?>
        <a href='/'> Front-end para Navegadores Web (FENW)</a><br>
        <?php
    }
    if ($_SESSION['permisos'][4] === 'S') {
        ?>
        <a href='/'> Back-end con Tecnologías de Libre Distribución (PHP)</a><br>
        <?php
    }
    if ($_SESSION['permisos'][5] === 'S') {
        ?>
        <a href='seguridad.php'> Seguridad en Aplicaciones Web (SAW) </a><br>
        <?php
    }
    if ($_SESSION['permisos'][6] === 'S') {
        ?>
        <a href='/'> Back-end con Tecnologías Propietarias (NET) </a><br>
        <?php
    }
    if ($_SESSION['permisos'][7] === 'S') {
        ?>
        <a href='/'> Back-end con Tecnologías de Código Abierto (Spring) </a><br>
        <?php
    }
    if ($_SESSION['permisos'][8] === 'S') {
        ?>
        <a href='/'> Metodologías de Desarrollo Web (MDW)</a><br>
        <?php
    }
    if ($_SESSION['permisos'][9] === 'S') {
        ?>
        <a href='/'> Proyecto Fin de Master </a><br>
        <?php
    }
    ?>
    <br><br><br><br>
    <p style='font-size:16.0pt'><a href='matricula.php'> MATRICULA DE ASIGNATURAS </a></p>
</center>
</body>
</html>