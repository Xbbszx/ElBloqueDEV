<?php
session_start();
require_once '../config/db_connect.php';
$tucuenta = $_SESSION['user'];
$tuid = $_SESSION['id'];

$bor = $_POST['postbar'];

$delete_query = "DELETE FROM post WHERE id_post = '$bor'";
if (mysqli_query($conn, $delete_query))
{
    header("Location: ../perfiles/perfil.php");
    exit;
}
else
{
    $_SESSION['error'] = "Error al borrar el post.";
    header("Location: ../perfiles/perfil.php");
    exit;
}
?>