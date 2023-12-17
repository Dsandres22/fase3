<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContacto.css">
    <title>Contacto Say Tat Makeup</title>
</head>

<body>
    <div class="formulario">
        <h1>¡Bienvenido!</h1>
        <form action="validarContacto.php" method="post" autocomplete="off">
            <div class="texBox">
                <input type="text" name="nombre" id="nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="texBox">
                <input type="tel" name="celular" id="celular" required>
                <label for="celular">Celular</label>
            </div>
            <div class="texBox">
                <input type="email" name="correo" id="correo" required>
                <label for="correo">Email</label>
            </div>

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>

            <div class="contacto">
                <button class="btnContacto" type="submit" name="btnContacto">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</body>
</html>



