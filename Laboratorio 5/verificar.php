<?php
session_start();

if (isset($_GET['cerrar_sesion']) && $_GET['cerrar_sesion'] === 'true') {
    session_destroy();
    header("Location: index.php");
}

$user1 = $_POST['user'];
$password1 = $_POST['password'];

$contraseña = "123";

if ($user1 === "Facundo Rubil" && $contraseña === $password1) {
    $_SESSION['usuario'] = "Facundo Rubil";
    header("Location: index-Loged.php");
} else {
    header("Location: index.php");
}
?>
