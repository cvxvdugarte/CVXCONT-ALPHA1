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
      <div class="container">
        <div class="jumbotron">  
<table style="width:100%">
  <tr>
    <th>nombre de cia</th>
    <th>Direccion</th> 
    <th>Cedula_rif</th>
    <th>Activo</th>
  </tr>
  <tr>
    <td><from id="cia" action="cia.php" method="post">
        <input type="text" id="nomcia">
    </td>
    <td><from>
        <input type="text" id="dir"></td> 
    <td><from>
        <input type="text" id="cedula"></td>
        <td><from>
        <input type="checkbox" id="activo"></td>
  </tr>
</table>
<button type="submit" form="cia" value="Submit" >Submit</button>
</div>
</div>
  <?php
$mysqli = new mysqli("mysql.hostinger.es","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D","u754135709_dbvd");
if($mysqli->connect_errno) {mysqli_autocommit($mysqli,TRUE);
                     die("Connection failed: " . $mysqli->connect_error); }
$nomcia=$_POST["nomcia"];
$dir=$_POST["dir"];
$cedula=$_POST["cedula"];
$activo=$_POST["activo"];
$cia = array ($nomcia,$dir,$cedula,$activo); 
echo $cia[0];
?> 
</body>
</html>
