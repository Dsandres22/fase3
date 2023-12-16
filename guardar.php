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
 
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
 
$ins = $conexion->query("INSERT INTO tblclientes(nombre, cedula, celular, correo) VALUES ('$nombre', '$cedula', '$celular', '$correo')");

?>
<div class="boxAlert">
    <div class="alert">
        <p class="mensajeAlerta">
            <?php

                if ($ins) {
                    echo "<h1>Registro exitoso.</h1>";
                } else {
                    echo "<h1>Error al registrar: " . mysqli_error($conexion) . "</h1>";
                }
            ?>
        </p>
    </div>
<div class="alert">
    <?php
        echo "<h1><a href='inicioSesion.php'>Acceder al sitio </a></h1>";

    ?>
</div>
</div>
</body>
</html>