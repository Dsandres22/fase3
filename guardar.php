<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegistro.css">
    <title></title>
</head>

<body>
       
<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];

    // Sentencias preparadas para prevenir la inyección SQL
    $stmt = $conexion->prepare("INSERT INTO tblclientes (nombre, cedula, celular, correo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $cedula, $celular, $correo);
    
    $registroExitoso = $stmt->execute();
    $stmt->close();
    
    ?>
    <div class="boxAlert">
        <div class="alert">
            <p class="mensajeAlerta">
                <?php
                if ($registroExitoso) {
                    echo "<h1>Registro exitoso.</h1>";
                } else {
                    echo "<h1>Error al registrar: " . mysqli_error($conexion) . "</h1>";
                }
                ?>
            </p>
        </div>
        <div class="alert">
            <?php
            echo "<h1><a href='inicioSesion.php'>Acceder al sitio</a></h1>";
            ?>
        </div>
    </div>
    <?php
}
?>
</div>
</div>
</body>
</html>