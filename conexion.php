

<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "saytatmakeup";
 
$conexion = @mysqli_connect($servidor, $usuario, $password, $bd);
 
if (!$conexion) {
    echo "error en la conexion";
} else {
    echo "conexion exitosa";
}
?>


