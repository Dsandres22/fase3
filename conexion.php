<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "saytatmakeup";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    // Muestra una alerta en JavaScript con el mensaje "Conexión exitosa"
    echo '<script>alert("Conexión exitosa");</script>';
}
?>


