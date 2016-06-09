<!doctype html>
<html>
<head>
<title>CVXCONT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <link rel="stylesheet" href="stylesheets/github-dark.css">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap-theme.css" rel="stylesheet">
    <script src="bootstrap.js"></script>
    <script src="javascripts/respond.js"></script>
    <script src="jquery-1.12.4.min.js"></script>
    <link href="estilosvdugarte.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
</head>
  <body class="bodyblack">
  <?php
$cod = $_POST["codigo"];
$key = $_POST["password"];
$consulta = ("SELECT `USUARIOS`.`CODIGO`,`USUARIOS`.`CLAVE` FROM `USUARIOS` WHERE `USUARIOS`.`CODIGO` = `$cod` AND `USUARIOS`.`CLAVE` = `$key` LIMIT 10");
$mysqli = new mysqli("mysql.hostinger.es","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D","u754135709_dbvd");
if ($mysqli->connect_errno) {mysqli_autocommit($mysqli,TRUE);
                     die("Connection failed: " . $mysqli->connect_error); }
echo $consulta."<br><br><br><br><br><br>";
echo $cod.$key."<br><br><br><br><br><br>";
echo "Connected successfully"; 

$resultado=mysqli_query($mysqli,$consulta,MYSQLI_STORE_RESULT);
$row = mysqli_fetch_row($resultado);
if(!$row){echo "bad";}

$mysqli->close();
?> 
</body>
</html>
