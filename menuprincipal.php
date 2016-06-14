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
    <div class="btn-group-horizontal">
  <!--<button type="button" class="btn btn-primary">PERSONAS</button>-->
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">PERSONAS
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">REGISTRO DE PERSONAS</a></li>
    <li><a href="#">REGISTRO DE USUARIOS</a></li>
    <li><a href="#">REGISTRO DE PROVEEDORES</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////

  <button type="button" class="btn btn-primary">CXC</button>-->
   <div class="dropdown-menu-right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CXC
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">REGISTRO DE FACTURAS</a></li>
    <li><a href="#">REGISTRO DE ANTICIPOS</a></li>
    <li><a href="#">REGISTRO DE CRUCES</a></li>
     <li><a href="#">REPORTES</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////
  <button type="button" class="btn btn-primary">CXP</button>-->
   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CXP
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">REGISTRO DE FACTURAS</a></li>
    <li><a href="#">REGISTRO DE ANTICIPOS</a></li>
    <li><a href="#">REGISTRO DE CRUCES</a></li>
     <li><a href="#">REPORTES</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////
  <button type="button" class="btn btn-primary">TESRORERIA</button>-->
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CXP
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">COBRANZA</a></li>
    <li><a href="#">BANCOS</a></li>
     <li><a href="#">REPORTES</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////
  <button type="button" class="btn btn-primary">CONTABILIDAD</button>-->
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CONTABILIDAD
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">PLANES DE CUENTA</a></li>
    <li><a href="#">CUENTAS</a></li>
     <li><a href="#">REPORTES</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////
  <button type="button" class="btn btn-primary">ADMINISTRACION DEL SISTEMA</button>-->
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ADMINISTRACION DEL SISTEMA
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">INFORMES DE ACTIVIDAD</a></li>
    <li><a href="#">PERMISOS DE USUARIOS</a></li>
     <li><a href="#">OTROS</a></li>
  </ul>
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////
  <a href="index.html"><button type="button" class="btn btn-primary">SALIR</button></a>-->
   <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ADMINISTRACION DEL SISTEMA
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="index.html">salir</a></li>
  </ul>
</div>
</div>
   </body>
</html>
