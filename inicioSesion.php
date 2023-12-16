<?php
include 'conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleInicioSesion.css">
    <title>Inicio Sesion Say Tat Makeup</title>
</head>

<body>

    <div class="formulario">
      
        <h1>¡Bienvenido!</h1>
        <form action="guardar.php" method="post">
            <div class="username">
                <input type="text" name="usuario" require>
                <label>Nombre de usuario</label>
            </div>

            <div class="password">
                <input type="password" name="clave" required>
                <label>Password</label>
            </div>

            <div class="recordar">¿Olvido su contraseña?</div>
            <a class="btnInicio" name="btnInicio" href="index.html">Iniciar sesión</a>
            <div class="registro">
                Quiero hacer el <a href="formulario.php">registro</a>
            </div>
        </form>

    </div>
</div>

   
    
</body>
</html>