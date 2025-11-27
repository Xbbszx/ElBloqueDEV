<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrar - ForoPayos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ForoPayos</h1>
<form action="" method="POST">
    <h3>Crear cuenta</h3>

    <?php
         if (ISSET($_SESSION['error']))
            {
                print '<p class="error">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
            }
    ?>

    <label>Usuario</label><br>
    <input type="text" name="user" id="user"><br><br>

    <label>Email</label><br>
    <input type="email" name="mail" id="mail"><br><br>

    <label>Contraseña</label><br>
    <input type="password" name="passwd" id="passwd"><br><br>

    <label>Verificar contraseña</label><br>
    <input type="password" name="vpasswd" id="vpasswd"><br><br>

    <a href="../index.php">¿Ya tienes cuenta? Inicia sesión</a><br><br>

    <input type="submit" value="Registrar">
</form>
</body>
</html>