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
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="stylesheets/ie.css">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
      <?php
$user = $_POST["inputUser"]; 
$pass = $_POST["inputPassword"]; 
$mysqli = mysqli_connect("mysql.hoxstinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
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
  </head>
  <body>
      <div id="header">
        <svg height="30" width="500">
        <text x="15" y="15" fill="gray">App administrativa y contable</text>
        </svg>
      </div>

    <div class="wrapper">
      <section>
    
      </section>
  
  
  </body>
</html>

