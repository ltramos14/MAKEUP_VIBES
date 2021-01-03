
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/login-styles.css">
    <title>REGISTRARSE - MAKE UP VIBES</title>
</head>
<body>
    <?php if (!empty($message)) {
        echo '<script language="javascript">alert("'.$message.'");</script>';
    }
    ?>
   
    <h1 class="nuevaCuenta">CREA TU CUENTA EN MAKEUP VIBES</h1>
    <form action="signup.php" method="post">
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="email" name="Correo" placeholder="Correo electrónico">
        <input type="password" name="Clave" placeholder="Contraseña">
        <input type="password" name="ConfirmarClave" placeholder="Confimar contraseña">
        <input type="submit" value="REGISTRARSE">
    </form>
</body>
</html>
<?php
    require '../../database/database.php';

    $message = '';

    if (!empty($_POST['Correo']) && !empty($_POST['Clave']) && !empty($_POST['Nombre']) && !empty($_POST['Apellido']) && !empty($_POST['ConfirmarClave'])) {
        if ($_POST['Clave'] == $_POST['ConfirmarClave']) {
            $sql = "INSERT INTO usuarios (email, contraseña, id_rol, nombre, apellido, last_modify, session) VALUES (:Correo, :Clave, 2, :Nombre, :Apellido, NULL, NULL)";
            $stmt = $conn -> prepare($sql);
            $stmt -> bindParam(':Correo', $_POST['Correo']);
            //Cifrar contraseña del usuario
            $password = password_hash($_POST['Clave'], PASSWORD_BCRYPT);
            $stmt -> bindParam(':Clave', $_POST['Clave']);
            $stmt -> bindParam(':Nombre', $_POST['Nombre']);
            $stmt -> bindParam(':Apellido', $_POST['Apellido']);

            if ($stmt->execute()) {
                $message = 'Usuario creado satisfactoriamente';
            } else {
                $message = 'Ha occurrido un error al crear el usuario';
            }
        } else {
            $message = "Las contraseñas no sin iguales";
        }
    } else{
        $message = "Todos los campos del formularios son obligatorios";
    }
?>