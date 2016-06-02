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
 /* $cod = $_POST["codigo"];
$mysqli = new mysqli("mysql.hostinger.es","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D","u754135709_dbvd");
if ($mysqli->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
                            }
$resultado = $mysqli->query("SELECT CODIGO , CLAVE  FROM USUARIOS WHERE CODIGO = DEMO" ); 
echo $resultado;
echo $cod;*/

$nombreConexion = mysqli_connect("mysql.hostinger.es" ,"u754135709_vddb" , "*#L4S3PT1M4D3LM4DR1D");
mysqli_ select_db ($nombreConexión, "u754135709_dbvd");
$result = mysqli_query($nombreConexion, "SELECT CODIGO , CLAVE  FROM USUARIOS WHERE CODIGO ='DEMO");
mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result);
echo "- Nombre: ".$extraido[0]."<br/>";






mysqli_close($nombreConexión);
?> 
  </body>
</html>

