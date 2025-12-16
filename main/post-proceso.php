<?php
session_start();
require_once '../config/db_connect.php';
$tucuenta = $_SESSION['user'];
$tuid = $_SESSION['id'];

$texto = $_POST['area'];

$sql = "INSERT INTO post (id_usuario, info, fecha_publicacion) VALUES ('$tuid', '$texto', NOW())";

if (mysqli_query($conn, $sql)) 
{
    $_SESSION['error'] = "Publicado correctamente.";
    header('Location: ./index.php');
    exit;
} 
else 
{
    $_SESSION['error'] = "No se puede publicar este post.";
    header('Location: ./nuevo_post.php');
    exit;
}
?>