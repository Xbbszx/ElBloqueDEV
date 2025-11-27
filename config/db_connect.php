<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'rootroot');
define('DB_NAME', 'foropayos');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn)
{
    die("Conexión fallida: " . mysqli_connect_error());
}
?>