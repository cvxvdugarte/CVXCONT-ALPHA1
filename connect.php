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
 $q =("SELECT * FROM USUARIOS ");
 $mysqli = new mysqli("mysql.hostinger.es","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D","u754135709_dbvd");
 if ($mysqli->connect_errno) {
                     die("Connection failed: " . $mysqli->connect_error); }

echo $q."<br><br><br><br><br><br>";
echo "Connected successfully"; 
$re = $mysqli->query($q);
$num_resultados=$re->num_rows;
echo $num_resultados;

mysqli_fetch_all($re,MYSQLI_ASSOC);

$re->data_seek(0);
while ($fila = $re->fetch_assoc()) {
    echo " id = " . $fila['id'] . "\n";


$mysqli->close();

?> 
  </body>
</html>

