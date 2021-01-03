<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/login-styles.css">
    <title>INICIAR SESION - MAKEUP VIBES</title>
</head>
<body>
    <h1 class="loginCuenta">INICIAR SESIÓN EN MAKE UP VIBES</h1>
    <form action="login.php" method="post">
        <input type="email" name="correo" placeholder="Ingrese su correo">
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
        <input type="submit" value="INGRESAR">
    </form>
    <a href="signup.php">¿Ya tienes una cuenta? Inicia sesión</a>
</body>
</html>
<?php
    require '../../database/database.php';

?>