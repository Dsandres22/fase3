<?php
include 'conexion.php';

if (isset($_POST['btnContacto'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['celular']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['mensaje']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $celular = trim($_POST['celular']);
        $correo = trim($_POST['correo']);
        $mensaje = trim($_POST['mensaje']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO tblcontacto(nombre, celular, correo, mensaje, fecha) 
        VALUES ('$nombre', '$celular', '$correo', '$mensaje', '$fecha')";
        
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            header("Location: Index.html");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            // Puedes manejar el error aquí si lo deseas
            echo "Error al enviar el mensaje: " . mysqli_error($conexion);
        }
    } else {
        // Mensaje si no se completan todos los campos
        echo "Llena todos los campos";
    }
}
?>
