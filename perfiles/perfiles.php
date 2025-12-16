<?php
session_start();
require_once '../config/db_connect.php';


?>
<!DOCTYPE html>
<html>
<head>
    <title>Mi Perfil - ForoPayos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ForoPayos | <a href='../main/index.php'>Inicio</a></h1>

<hr>
<h1>@<?php print $_SESSION['user'] ?></h1>
<?php print $follower . " Seguidores " . $following . " Siguiendo<br><br>" ?>
<a href='../perfiles/perfil.php'><button>[wip] Editar perfil</button></a>
<a href='../funciones/logout.php'><button>Cerrar sesión</button></a>
<hr>
<h1>Mis Posts</h1>
<?php
    if (ISSET($_SESSION['error']))
    {
        print '<p class="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
?>
<?php
for ($i=0; $i<$nfilas; $i++)
{
    $row2 = mysqli_fetch_assoc($res2);
    print "<form method='post' action='../funciones/borrar_post2.php'>";
    print "<a href='../perfiles/perfil.php'>@" . $_SESSION['user'] . "</a><br>";
    print $row2['info'] . " <button type='submit' name='postbar' value='" . $row2['id_post'] . "'>borrar</button><br><br>";
    print "</form>";
    
}
?>