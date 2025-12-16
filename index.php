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
<form action="./login/login-conf.php" method="POST">
    <h3>Iniciar sesión</h3>

    <?php
         if (ISSET($_SESSION['error']))
            {
                print '<p class="error">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
            }
    ?>

    <label>Usuario</label><br>
    <input type="text" name="user" id="user"><br><br>

    <label>Contraseña</label><br>
    <input type="password" name="passwd" id="passwd"><br><br>

    <a href="./register/index.php">¿No tienes cuenta? Créala</a><br><br>

    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>