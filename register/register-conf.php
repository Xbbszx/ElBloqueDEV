<?php
session_start();
$_SESSION['error'] = "";
$_SESSION['error2'] = "";
require_once '../config/db_connect.php';

$nombre = mysqli_real_escape_string($conn,$_POST['user']);
$email = mysqli_real_escape_string($conn,$_POST['mail']);
$passwd = trim($_POST['passwd']);
$passwd_ver = trim($_POST['vpasswd']);
$pass_hash = password_hash($passwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, contra, correo) VALUES ('$nombre', '$pass_hash', '$email')";

if ($passwd == $passwd_ver)
{
    if (mysqli_query($conn,$sql))
    {
        header('Location: ../index.php');
        exit;
    }
    else
    {
        $_SESSION['error'] = "Este correo ya existe.";
        header('Location: ./index.php');
        exit;
    }
}
else
{
    $_SESSION['error'] = "Las contraseñas no coinciden";
    header('Location: ./index.php');
    exit;
}
?>