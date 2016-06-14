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
  <!--PERSONAS-->    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">PERSONAS <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cxcregpers.php">REGISTRO DE PERSONAS</a></li>
          <li><a href="cxcregusr.php">REGISTRO DE USUARIOS</a></li>
         <li><a href="cxcregprov.php">REGISTRO DE PROVEEDORES</a></li>
        </ul>
      </li>
  <!--CXC-->
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">CXC <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="cxcregfac.php">REGISTRO DE FACTURAS</a></li>
          <li><a href="cxcregant.php">REGISTRO DE ANTICIPOS</a></li>
          <li><a href="cxcregcruce.php">REGISTRO DE CRUCES</a></li>
          <li><a href="cxcreport.php">REPORTES</a></li>
      </ul>
   </li>
   <!--CXP-->
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >CXP <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cxpregfac.php">REGISTRO DE FACTURAS</a></li>
          <li><a href="cxpregant.php">REGISTRO DE ANTICIPOS</a></li>
          <li><a href="cxpregcruce.php">REGISTRO DE CRUCES</a></li>
          <li><a href="cxpreport.php">REPORTES</a></li>
        </ul>
   </li>
   <!--TESORERIA-->
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">TESORERIA <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="tesoro1.php">COBRANZA</a></li>
          <li><a href="bancos.php">BANCOS</a></li>
          <li><a href="tesororeport.php">REPORTES</a></li>
        </ul>
    </li>
    <!--CONTABILIDAD-->
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >CONTABILIDAD <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="contabilidad1.php">PLAN DE CUENTAS<a></li>
          <li><a href="contabilidad2.php">COMPROBANTES</a></li>
          <li><a href="contabilidad3.php">REPORTES</a></li>
        </ul>
    </li>
    <!--SALIR-->
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >SALIR<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.html">SALIR<a></li>
        </ul>
    </li>
    </ul>
  </div>
</nav>
   </body>
</html>
