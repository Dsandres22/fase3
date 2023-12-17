<?php
include 'conexion.php';

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    // Verificar si los datos son correctos
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = $conexion->query("SELECT * FROM tblusuarios WHERE usuario = '$usuario' AND clave = '$clave'");

    if ($datos = $sql->fetch_object()) {
        // Datos correctos, muestra una alerta de JavaScript y redirige a Index.html
        echo '<script>alert("Ingreso exitoso"); window.location.href = "Index.html";</script>';
    } else {
        // Datos incorrectos, muestra una alerta de JavaScript
        echo '<script>alert("Acceso denegado"); window.location.href = "inicioSesion.php";</script>';
    }
}
?>

