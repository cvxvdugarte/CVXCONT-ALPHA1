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
    <?
    session_start();
    
    echo $_SESSION["USER"];
    session_destroy(); 
    ?>
    <div class="btn-group-vertical">
  <button type="button" class="btn btn-primary">PERSONAS</button>
  <button type="button" class="btn btn-primary">CXC</button>
  <button type="button" class="btn btn-primary">CXP</button>
  <button type="button" class="btn btn-primary">TESRORERIA</button>
  <button type="button" class="btn btn-primary">CONTABILIDAD</button>
  <button type="button" class="btn btn-primary">ADMINISTRACION DEL SISTEMA</button>
  <a href="index.html"><button type="button" class="btn btn-primary">SALIR</button></a>
</div>
   </body>
</html>
