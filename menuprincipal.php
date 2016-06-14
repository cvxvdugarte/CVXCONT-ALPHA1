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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="menuprincipal.php">MENUPRINCIPAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="persona.php">PERSONAS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">REGISTRO DE PERSONAS</a></li>
          <li><a href="#">REGISTRO DE USUARIOS</a></li>
         <li><a href="#">REGISTRO DE PROVEEDORES</a></li>
        </ul>
      </li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="cxc.php">CXC <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cxc.php">REGISTRO DE FACTURAS</a></li>
          <li><a href="#">REGISTRO DE ANTICIPOS</a></li>
          <li><a href="#">REGISTRO DE CRUCES</a></li>
        </ul>
</li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="cxp.php">CXP <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">REGISTRO DE FACTURAS</a></li>
          <li><a href="#">REGISTRO DE ANTICIPOS</a></li>
          <li><a href="#">REGISTRO DE CRUCES</a></li>
          <li><a href="#">REPORTES</a></li>
        </ul>
        </li>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="tesoreria.php">TESORERIA <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">COBRANZA</a></li>
          <li><a href="#">BANCOS</a></li>
          <li><a href="#">REPORTES</a></li>
        </ul>
    </li>
    </ul>
  </div>
</nav>
   </body>
</html>
