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
      <?php
$user = $_POST["inputUser"]; 
$pass = $_POST["inputPassword"]; 
$mysqli = mysqli_connect("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
if (mysqli_connect_errno($mysqli)) {
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}
$mysqli = new mysqli("mysql.hostinger.es", "u754135709_vddb", "H4NZ0h4tt0r1", "u754135709_dbvd");
if ($mysqli->connect_errno) {
   echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
} 
else
     {
       echo "good";
     }
$resultado = mysqli_query($mysqli,"SELECT CODIGO
FROM  USUARIOS");
?>
  </head>
  <body>
      <div id="header">
           <svg height="30" width="500">
           <text x="15" y="15" fill="gray">App administrativa y contable</text>
           </svg>
      </div>
      <div class="container-fluid">
          <section>
    <table border="0">
             <tr>
               <td><b>Nombre</b><form>
                   <input type="text" name="nombre"><br>
                   </form>
               </td>
             </tr>
               
             <tr>
               <td><b>Rif</b><form>
                   <input type="text" name="Rif"><br>
                   </form>
               </td>
             </tr>
               
             <tr>
               <td><b>direccion</b><form>
                   <input type="text" name="direccion"><br>
                   </form>
               </td>
             </tr>
     </table>
           </section>  
  
  
  </body>
</html>

