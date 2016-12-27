<?php
session_start();
$usuario = $_SERVER['SSL_CLIENT_S_DN_CN'];

include("includes/abrirbd.php");
$sql = "SELECT * FROM usuarios WHERE user ='{$usuario}'";
$resultado = mysqli_query($link, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['autenticado'] = 'correcto';
    $_SESSION['permisos'] = str_split($usuario['permisos']);
    $_SESSION['user'] = $usuario['user'];
    header("Location: MasterWeb.php");
} else {
    $_SESSION['autenticado'] = 'incorrecto';
    header("Location: NoAuth.php");
}

mysqli_close($link);
?>