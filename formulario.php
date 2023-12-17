<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'conexion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegistro.css">
    <title>Inicio Sesion Say Tat Makeup</title>
</head>

<body>
       
    <div class="formulario">
        
        
        <h1>¡Bienvenido!</h1>
        <form action="guardar.php" method="post">
            <div class="texBox">
                <input type="text" name="nombre" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="texBox">
                <input type="number" name="cedula" required>
                <label>Cedula</label>
            </div>
            <div class="texBox">
                <input type="tel" name="celular" required>
                <label>Celular</label>
            </div>
            <div class="texBox">
                <input type="email" name="correo" required>
                <label>Email</label>
            </div>
    
            <div class="iniciarSesion">
                <a href="inicioSesion.php">
                Ya tengo una cuenta</a></div>
            <button class="btnRegistro" type="submit" name="enviar" href="inicioSesion.php">Enviar</button>
        </form>

    </div>
</div>  
</body>
</html>


