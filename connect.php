<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>CVXCONT by V.Dugarte</title>
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/github-dark.css">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="javascripts/respond.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
  </head>
  <body>
  <?php
  $cod = $_POST["codigo"];
$mysqli = new mysqli("mysql.hostinger.es","u754135709_dbvd","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D");
if ($mysqli->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
                            }
$mysqli->query("SELECT CODIGO , CLAVE  FROM USUARIOS WHERE CODIGO = $cod" );                           
printf("La selección devolvió %d filas.\n", $resultado->num_rows);


?> 
  </body>
</html>

