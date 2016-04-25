<?php
$user = $_POST["inputUser"]; 
$pass = $_POST["inputPassword"]; 
$mysqli = mysqli_connect("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
if (mysqli_connect_errno($mysqli)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$resultado = mysqli_query($mysqli, "SELECT * 
FROM  `USUARIOS` where codigo = ".$user);
$fila = mysqli_fetch_assoc($resultado);
echo $fila['_msg'];

$mysqli = new mysqli("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}

?>
