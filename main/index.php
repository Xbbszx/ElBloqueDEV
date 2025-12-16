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
    <title>Inicio - ForoPayos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ForoPayos</h1>
<hr>
<h1>@<?php print $_SESSION['user'] ?></h1>
<a href='../perfiles/perfil.php'><button>Mi perfil</button></a>
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
        print "<form method='post' action='../funciones/borrar_post.php'>";
        print "<a href='../perfiles/perfil.php'>@" . $row['usuario'] . "</a><br>";
        print $row['info'] . " <button type='submit' name='postbar' value='" . $row['id_post'] . "'>borrar</button><br><br>";
        print "</form>";
    }
    else
    {
        print "<a href='../perfiles/perfiles.php'>@" . $row['usuario'] . "</a><br>";
        print $row['info'] . "<br><br>";   
    }
    
} 
?>
<hr>
</body>
</html>
