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
//$mysqli = mysqli_connect("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
/*if ($mysqli === false){
	die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
} */
$mysqli = new mysqli("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
if ($mysqli->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
} 

//$sql = "SELECT CODIGO FROM  USUARIOS WHERE CODIGO =" ."'".$_POST["codigo"]."'" ;
/*if ($result = $mysqli->query($sql) ){
	if ($result->num_rows > 0 ){
 
		                 while($row = $result->fetch_array() ){
			               echo $row[0]. " : ". trim($row[1])."\n";
	                          	}
 
	                	$result->close();
	                   } else {
		echo "NO se encontró ningún registro que coincida con su busqueda.";
	                   }
 
                     } else {
	echo "Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
}*/
$nombre = $_POST["codigo"]; 
$password = $_POST["password"]; 
echo   $nombre;

$consulta1 =("SELECT USUARIO_ID FROM  USUARIOS WHERE CODIGO = $nombre"); 
$consulta1 = $mysqli->query($consulta1);
$consulta2 =("SELECT USUARIO_ID  USUARIOS WHERE CLAVE = $password"); 
$consulta2 = $mysqli->query($consulta2);
echo   $consulta1;
echo $consulta2;
$mysqli->close();

?> 
  </body>
</html>

