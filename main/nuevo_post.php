<?php
session_start();
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
<h2><u>Nuevo Post</u></h2>
<?php
    if (ISSET($_SESSION['error']))
    {
        print '<p class="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
?>
<form method='post' action='./post-proceso.php'>
<textarea rows='6' cols='40' id='area' name='area'></textarea><br><br>
<input type='submit' value='Publicar'>
</form><br>
<a href='./index.php'><button>Volver</button></a>
</body>
</html>