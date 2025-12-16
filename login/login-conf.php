<?php
session_start();
$_SESSION['error'] = "";
$_SESSION['error2'] = "";
require_once '../config/db_connect.php';

$nombre = mysqli_real_escape_string($conn,$_POST['user']);
$passwd = trim($_POST['passwd']);

$res = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$nombre'");
$row = mysqli_fetch_assoc($res);

if (!$row) {
    $_SESSION['error'] = "Usuario no existe";
    header('Location: ../index.php');
    exit;
}

$pas = $row['contra'];

if (password_verify($passwd,$pas))
{
    $_SESSION['id'] = $row['id_user'];
    $_SESSION['loggedin'] = true;
	$_SESSION['user'] = $row['usuario'];
    $_SESSION['email'] = $row['correo'];
    header('Location: ../main/index.php');
    exit;
}
else
{
    $_SESSION['error'] = "Contraseña incorrecta";
    header('Location: ../index.php');
    exit;
}
?>