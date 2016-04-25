<?php
$mysqli = mysqli_connect("ejemplo.com", "usuario", "contraseña", "basedatos");
if (mysqli_connect_errno($mysqli)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$resultado = mysqli_query($mysqli, "SELECT 'Un mundo lleno de ' AS _msg FROM DUAL");
$fila = mysqli_fetch_assoc($resultado);
echo $fila['_msg'];

$mysqli = new mysqli("ejemplo.com", "usuario", "contraseña", "basedatos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}

$resultado = $mysqli->query("SELECT 'elecciones para complacer a todos.' AS _msg FROM DUAL");
$fila = $resultado->fetch_assoc();
echo $fila['_msg'];
?>
