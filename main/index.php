<?php
session_start();
require_once '../config/db_connect.php';
$tucuenta = $_SESSION['user'];
$tuid = $_SESSION['id'];
$res = mysqli_query($conn, "SELECT * FROM post p, usuarios u WHERE u.id_user=p.id_usuario ORDER BY fecha_publicacion DESC LIMIT 10");
$nfilas = mysqli_num_rows ($res);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión - ForoPayos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ForoPayos</h1>
<hr>
<h1>@<?php print $_SESSION['user'] ?></h1>
<a href='../funciones/logout.php'><button>Cerrar sesión</button></a>

<hr>
<?php
    if (ISSET($_SESSION['error']))
    {
        print '<p class="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
?>
<h2><u>Post Recientes</u></h2>
<a href='./nuevo_post.php'><button>Nuevo post</button></a>
<br><br>
<?php 
for ($i=0; $i<$nfilas; $i++)
{
    $row = mysqli_fetch_assoc($res);
    if ($row['id_usuario'] == $tuid) 
    {
        print "@" . $row['usuario'] . "<br>";
        print $row['info'] . "<a href ='../funciones/borrar_post.php'><button name='postbar' value=" . $row['id_post'] . ">borrar</button></a><br><br>";
    }
    else
    {
        print "@" . $row['usuario'] . "<br>";
        print $row['info'] . "<br><br>";   
    }
    
} 
?>
<hr>
</body>
</html>
