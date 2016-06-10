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
<FORM name="registro" method=post action="cia.php">
Registro de cia
<table  class="table table-bordered table-responsive ">
<TR>
	<TD>nombre</TD>
	<TD>
	<INPUT type=text name="nombre">
	</TD>
</TR>

<TR>
	<TD>direccion</TD>
	<TD>
	<INPUT type=text name="dir">
	</TD>
</TR>

<TR>
	<TD>activo</TD>
	<TD>
	<br>activo: <INPUT type=checkbox name="activo" value=1>
	</TD>
</TR>

<TR>
	<TD>cedula rif</TD>
	<TD>
    <INPUT type=text name="rif">
	</TD>
</TR>
<br> 
<td>
<input type="submit"class="btn class="btn btn-primary btn-lg"" value="guardar" />
</td>
</TABLE>
</FORM>
 
</div>
</div>
  <?php
$mysqli = new mysqli("mysql.hostinger.es","u754135709_vddb","*#L4S3PT1M4D3LM4DR1D","u754135709_dbvd");
if($mysqli->connect_errno) {mysqli_autocommit($mysqli,TRUE);
                     die("Connection failed: " . $mysqli->connect_error); }
$nomcia=$_POST["nombre"];
$dir=$_POST["dir"];
$cedula=$_POST["activo"];
$activo=$_POST["rif"];
$cia = array ($nomcia,$dir,$cedula,$activo); 
$row = 0;
while ($row < 5){
echo $cia[$row];
 $row++;	
}

?> 
</body>
</html>
